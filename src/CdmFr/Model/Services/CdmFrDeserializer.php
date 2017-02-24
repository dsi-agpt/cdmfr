<?php
namespace CdmFr\Model\Services;

use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Ecoles\Container\SessionContainer;
use Zend\ServiceManager\ServiceLocatorInterface;
use Doctrine\ORM\AbstractQuery;
use JMS\Serializer\SerializerBuilder;

class CdmFrDeserializer implements ServiceLocatorAwareInterface
{

    private $init = false;

    private $serializer;

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
    public function setServiceLocator(ServiceLocatorInterface $serviceLocator)
    {
        $this->serviceLocator = $serviceLocator;
    }

    /**
     * Get service locator
     *
     * @return ServiceLocatorInterface
     */
    public function getServiceLocator()
    {
        return $this->serviceLocator;
    }

    /**
     *
     * @param string $filename            
     * @return \CdmFr\Model\V1_1_1\Cdm\CDM
     */
    public function loadCdmFrObjectFromFile($filename)
    {
        $data = file_get_contents($filename);
        $data = str_replace('ns2:', '', $data);
        return $this->loadCdmFrObject($data);
    }

    public function loadCdmFrObjectFromDocument(\DOMDocument $domDocument)
    {
        $data = $domDocument->saveXML();        
        $data = str_replace('ns2:', '', $data);
        return $this->loadCdmFrObject($data);
    }

    /**
     *
     * @param unknown $data            
     * @return \CdmFr\Model\V1_1_1\Cdm\CDM
     */
    public function loadCdmFrObject($data)
    {
        return $this->getSerializer()->deserialize($data, 'CdmFr\Model\V1_1_1\Cdm\CDM', 'xml');
    }

    private function getSerializer()
    {
        if (is_null($this->serializer))
            $this->serializer = SerializerBuilder::create()->addMetadataDir(dirname(__DIR__) . '/V1_1_1/Metadata/Cdm', 'CdmFr\Model\V1_1_1\Cdm')
                ->addMetadataDir(dirname(__DIR__) . '/V1_1_1/Metadata/CdmFr', 'CdmFr\Model\V1_1_1\CdmFr')
                ->addMetadataDir(dirname(__DIR__) . '/V1_1_1/Metadata/Lheo', 'CdmFr\Model\V1_1_1\Lheo')
                ->build();
        return $this->serializer;
    }
}