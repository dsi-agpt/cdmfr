<?php

namespace CdmFr\Controller\Services;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class XmlFileHandler implements ServiceLocatorAwareInterface {
	private $cdmFrDomDocument;
	private $cdmFrObject;
	private $cdmFrCourses;
	private $errorMessages;
	private $fileIsValid;
	private $fileIsLoaded;
	private $tmpFileName;
	
	/**
	 *
	 * @var ServiceLocatorInterface $serviceLocator
	 */
	protected $serviceLocator;
	
	/**
	 * Set service locator
	 *
	 * @param ServiceLocatorInterface $serviceLocator        	
	 */
	public 

	function setServiceLocator(ServiceLocatorInterface $serviceLocator) {
		$this->serviceLocator = $serviceLocator;
	}
	
	/**
	 * Get service locator
	 *
	 * @return ServiceLocatorInterface
	 */
	public function getServiceLocator() {
		return $this->serviceLocator;
	}
	/**
	 *
	 * @return \CdmFr\Model\Services\CdmFrDeserializer
	 */
	public function getCdmFrDeserializer() {
		return $this->getServiceLocator ()->get ( 'cdmfr-deserializer' );
	}
	public function loadFile($tmpFileName) {
		$this->filePath = $tmpFileName;
		$this->errorMessages = array ();
		libxml_use_internal_errors ( true );
		$this->cdmFrDomDocument = new \DOMDocument ();
		$success = $this->cdmFrDomDocument->load ( $tmpFileName );
		if (! $success) {
			$this->fileIsLoaded = false;
			$this->errorMessages ['loading'] = "Impossible to lod and parse as xml $tmpFileName";
		} else {
			$this->fileIsLoaded = true;
			$this->fileIsValid = false;
		}
	}
	public function validateFile() {
		$this->errorMessages = array ();
		if (is_null ( $this->cdmFrDomDocument )) {
			$this->errorMessages ['loading'] = "Please load the file before validation validation";
			return;
		}
		if (! $this->cdmFrDomDocument->schemaValidate ( __DIR__ . '/../../../../xsd/CDMFR.xsd' )) {
			$this->fileIsValid = false;
			$errors = libxml_get_errors ();
			foreach ( $errors as $error ) {
				$this->errorMessages [$error->line] = $error->message;
			}
		} else {
			$this->fileIsValid = true;
		}
	}
	
	/**
	 *
	 * @return \CdmFr\Model\V1_1_1\Cdm\CDM
	 */
	public function getCdmFrObject() {
		if (! isset ( $this->cdmFrObject )) {
			$analyzer = $this->getCdmFrDeserializer ();
			$this->cdmObject = $analyzer->loadCdmFrObjectFromFile ( $this->filePath );
		}
		return $this->cdmObject;
	}

	
	/**
	 *
	 * @return boolean
	 */
	public function fileIsLoaded() {
		return $this->fileIsLoaded;
	}
	
	/**
	 *
	 * @return boolean
	 */
	public function fileIsValid() {
		return $this->fileIsValid;
	}
	
	/**
	 *
	 * @return array
	 */
	public function getErrorMessages() {
		return $this->errorMessages;
	}
	
	/**
	 *
	 * @param string $tmpFileName        	
	 * @throws \Exception
	 */
	public function cleanNameSpaces($tmpFileName) {
		$str = file_get_contents ( $tmpFileName );
		$str = str_replace ( "ns3:", "", $str );
		$str = str_replace ( ' xmlns:ns2="http://cdm-fr.fr/2012/CDM-frSchema"', "", $str );
		$str = str_replace ( ' xmlns:ns3="http://cdm-fr.fr/2012/CDM"', "", $str );
		$str = str_replace ( 'xmlns="http://cdm-fr.fr/2012/CDM"', 'xmlns="http://cdm-fr.fr/2012/CDM" xmlns:ns2="http://cdm-fr.fr/2012/CDM-frSchema"', $str );
		$success = file_put_contents ( $tmpFileName, $str );
		if (false === $success)
			throw new \Exception ( "Impossible to access $tmpFileName in write mode." );
	}
	
	/**
	 *
	 * @param string $originaleFileName        	
	 * @param string $tmpFileName        	
	 * @param int $anneeScolaire        	
	 * @throws \Exception
	 */
	public function registerFile($originaleFileName, $tmpFileName, $anneeScolaire) {
		$succes = copy ( $tmpFileName, $this->getCdmFrFilePath ( $originaleFileName, $anneeScolaire ) );
		if (! $succes)
			throw new \Exception ( "Impossible de copier le fichier $tmpFileName vers le répertoire $fileDirectory" );
	}
	
	/**
	 *
	 * @param string $fileName        	
	 * @param string $anneeScolaire        	
	 * @throws \Exception
	 * @return string
	 */
	public function getCdmFrFilePath($fileName, $anneeScolaire) {
		$config = $this->getServiceLocator ()->get ( 'Config' );
		if (! array_key_exists ( 'data-store-directory', $config ))
			throw new \Exception ( "La configuration local.php devrait contenir une entrée data-store-directory" );
		$fileDirectory = $config ['data-store-directory'];
		if (! is_dir ( $fileDirectory )) {
			$succes = mkdir ( $fileDirectory, '744' );
			if (! $succes)
				throw new \Exception ( "Impossible de créer le répertoire $fileDirectory" );
		}
		$subFileDirectory = $fileDirectory . '/' . $anneeScolaire;
		if (! is_dir ( $subFileDirectory )) {
			$succes = mkdir ( $subFileDirectory, '744' );
			if (! $succes)
				throw new \Exception ( "Impossible de créer le répertoire $subFileDirectory" );
		}
		return $subFileDirectory . '/' . $fileName;
	}
}