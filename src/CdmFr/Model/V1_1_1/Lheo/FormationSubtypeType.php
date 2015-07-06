<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing FormationSubtypeType
 *
 *
 * XSD Type: formation-subtype
 */
class FormationSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\DomaineFormation $domaineFormation
     */
    private $domaineFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\IntituleFormation $intituleFormation
     */
    private $intituleFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ObjectifFormation $objectifFormation
     */
    private $objectifFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ResultatsAttendus $resultatsAttendus
     */
    private $resultatsAttendus = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ContenuFormation $contenuFormation
     */
    private $contenuFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Certifiante $certifiante
     */
    private $certifiante = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ContactFormation $contactFormation
     */
    private $contactFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ParcoursDeFormation $parcoursDeFormation
     */
    private $parcoursDeFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeNiveauEntree $codeNiveauEntree
     */
    private $codeNiveauEntree = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ObjectifGeneralFormation $objectifGeneralFormation
     */
    private $objectifGeneralFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Certification[] $certification
     */
    private $certification = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeNiveauSortie $codeNiveauSortie
     */
    private $codeNiveauSortie = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Action[] $action
     */
    private $action = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\OrganismeFormationResponsable
     * $organismeFormationResponsable
     */
    private $organismeFormationResponsable = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\IdentifiantModule $identifiantModule
     */
    private $identifiantModule = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Positionnement $positionnement
     */
    private $positionnement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\SousModules $sousModules
     */
    private $sousModules = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ModulesPrerequis $modulesPrerequis
     */
    private $modulesPrerequis = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as domaineFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\DomaineFormation
     */
    public function getDomaineFormation()
    {
        return $this->domaineFormation;
    }

    /**
     * Sets a new domaineFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\DomaineFormation $domaineFormation
     * @return self
     */
    public function setDomaineFormation(\CdmFr\Model\V1_1_1\Lheo\DomaineFormation $domaineFormation)
    {
        $this->domaineFormation = $domaineFormation;
        return $this;
    }

    /**
     * Gets as intituleFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\IntituleFormation
     */
    public function getIntituleFormation()
    {
        return $this->intituleFormation;
    }

    /**
     * Sets a new intituleFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\IntituleFormation $intituleFormation
     * @return self
     */
    public function setIntituleFormation(\CdmFr\Model\V1_1_1\Lheo\IntituleFormation $intituleFormation)
    {
        $this->intituleFormation = $intituleFormation;
        return $this;
    }

    /**
     * Gets as objectifFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ObjectifFormation
     */
    public function getObjectifFormation()
    {
        return $this->objectifFormation;
    }

    /**
     * Sets a new objectifFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ObjectifFormation $objectifFormation
     * @return self
     */
    public function setObjectifFormation(\CdmFr\Model\V1_1_1\Lheo\ObjectifFormation $objectifFormation)
    {
        $this->objectifFormation = $objectifFormation;
        return $this;
    }

    /**
     * Gets as resultatsAttendus
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ResultatsAttendus
     */
    public function getResultatsAttendus()
    {
        return $this->resultatsAttendus;
    }

    /**
     * Sets a new resultatsAttendus
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ResultatsAttendus $resultatsAttendus
     * @return self
     */
    public function setResultatsAttendus(\CdmFr\Model\V1_1_1\Lheo\ResultatsAttendus $resultatsAttendus)
    {
        $this->resultatsAttendus = $resultatsAttendus;
        return $this;
    }

    /**
     * Gets as contenuFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ContenuFormation
     */
    public function getContenuFormation()
    {
        return $this->contenuFormation;
    }

    /**
     * Sets a new contenuFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ContenuFormation $contenuFormation
     * @return self
     */
    public function setContenuFormation(\CdmFr\Model\V1_1_1\Lheo\ContenuFormation $contenuFormation)
    {
        $this->contenuFormation = $contenuFormation;
        return $this;
    }

    /**
     * Gets as certifiante
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Certifiante
     */
    public function getCertifiante()
    {
        return $this->certifiante;
    }

    /**
     * Sets a new certifiante
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Certifiante $certifiante
     * @return self
     */
    public function setCertifiante(\CdmFr\Model\V1_1_1\Lheo\Certifiante $certifiante)
    {
        $this->certifiante = $certifiante;
        return $this;
    }

    /**
     * Gets as contactFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ContactFormation
     */
    public function getContactFormation()
    {
        return $this->contactFormation;
    }

    /**
     * Sets a new contactFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ContactFormation $contactFormation
     * @return self
     */
    public function setContactFormation(\CdmFr\Model\V1_1_1\Lheo\ContactFormation $contactFormation)
    {
        $this->contactFormation = $contactFormation;
        return $this;
    }

    /**
     * Gets as parcoursDeFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ParcoursDeFormation
     */
    public function getParcoursDeFormation()
    {
        return $this->parcoursDeFormation;
    }

    /**
     * Sets a new parcoursDeFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ParcoursDeFormation $parcoursDeFormation
     * @return self
     */
    public function setParcoursDeFormation(\CdmFr\Model\V1_1_1\Lheo\ParcoursDeFormation $parcoursDeFormation)
    {
        $this->parcoursDeFormation = $parcoursDeFormation;
        return $this;
    }

    /**
     * Gets as codeNiveauEntree
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeNiveauEntree
     */
    public function getCodeNiveauEntree()
    {
        return $this->codeNiveauEntree;
    }

    /**
     * Sets a new codeNiveauEntree
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeNiveauEntree $codeNiveauEntree
     * @return self
     */
    public function setCodeNiveauEntree(\CdmFr\Model\V1_1_1\Lheo\CodeNiveauEntree $codeNiveauEntree)
    {
        $this->codeNiveauEntree = $codeNiveauEntree;
        return $this;
    }

    /**
     * Gets as objectifGeneralFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ObjectifGeneralFormation
     */
    public function getObjectifGeneralFormation()
    {
        return $this->objectifGeneralFormation;
    }

    /**
     * Sets a new objectifGeneralFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ObjectifGeneralFormation $objectifGeneralFormation
     * @return self
     */
    public function setObjectifGeneralFormation(\CdmFr\Model\V1_1_1\Lheo\ObjectifGeneralFormation $objectifGeneralFormation)
    {
        $this->objectifGeneralFormation = $objectifGeneralFormation;
        return $this;
    }

    /**
     * Adds as certification
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Certification $certification
     */
    public function addToCertification(\CdmFr\Model\V1_1_1\Lheo\Certification $certification)
    {
        $this->certification[] = $certification;
        return $this;
    }

    /**
     * isset certification
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCertification($index)
    {
        return isset($this->certification[$index]);
    }

    /**
     * unset certification
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCertification($index)
    {
        unset($this->certification[$index]);
    }

    /**
     * Gets as certification
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Certification[]
     */
    public function getCertification()
    {
        return $this->certification;
    }

    /**
     * Sets a new certification
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Certification[] $certification
     * @return self
     */
    public function setCertification(array $certification)
    {
        $this->certification = $certification;
        return $this;
    }

    /**
     * Gets as codeNiveauSortie
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeNiveauSortie
     */
    public function getCodeNiveauSortie()
    {
        return $this->codeNiveauSortie;
    }

    /**
     * Sets a new codeNiveauSortie
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeNiveauSortie $codeNiveauSortie
     * @return self
     */
    public function setCodeNiveauSortie(\CdmFr\Model\V1_1_1\Lheo\CodeNiveauSortie $codeNiveauSortie)
    {
        $this->codeNiveauSortie = $codeNiveauSortie;
        return $this;
    }

    /**
     * Adds as action
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Action $action
     */
    public function addToAction(\CdmFr\Model\V1_1_1\Lheo\Action $action)
    {
        $this->action[] = $action;
        return $this;
    }

    /**
     * isset action
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAction($index)
    {
        return isset($this->action[$index]);
    }

    /**
     * unset action
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAction($index)
    {
        unset($this->action[$index]);
    }

    /**
     * Gets as action
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Action[]
     */
    public function getAction()
    {
        return $this->action;
    }

    /**
     * Sets a new action
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Action[] $action
     * @return self
     */
    public function setAction(array $action)
    {
        $this->action = $action;
        return $this;
    }

    /**
     * Gets as organismeFormationResponsable
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\OrganismeFormationResponsable
     */
    public function getOrganismeFormationResponsable()
    {
        return $this->organismeFormationResponsable;
    }

    /**
     * Sets a new organismeFormationResponsable
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\OrganismeFormationResponsable
     * $organismeFormationResponsable
     * @return self
     */
    public function setOrganismeFormationResponsable(\CdmFr\Model\V1_1_1\Lheo\OrganismeFormationResponsable $organismeFormationResponsable)
    {
        $this->organismeFormationResponsable = $organismeFormationResponsable;
        return $this;
    }

    /**
     * Gets as identifiantModule
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\IdentifiantModule
     */
    public function getIdentifiantModule()
    {
        return $this->identifiantModule;
    }

    /**
     * Sets a new identifiantModule
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\IdentifiantModule $identifiantModule
     * @return self
     */
    public function setIdentifiantModule(\CdmFr\Model\V1_1_1\Lheo\IdentifiantModule $identifiantModule)
    {
        $this->identifiantModule = $identifiantModule;
        return $this;
    }

    /**
     * Gets as positionnement
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Positionnement
     */
    public function getPositionnement()
    {
        return $this->positionnement;
    }

    /**
     * Sets a new positionnement
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Positionnement $positionnement
     * @return self
     */
    public function setPositionnement(\CdmFr\Model\V1_1_1\Lheo\Positionnement $positionnement)
    {
        $this->positionnement = $positionnement;
        return $this;
    }

    /**
     * Gets as sousModules
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\SousModules
     */
    public function getSousModules()
    {
        return $this->sousModules;
    }

    /**
     * Sets a new sousModules
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\SousModules $sousModules
     * @return self
     */
    public function setSousModules(\CdmFr\Model\V1_1_1\Lheo\SousModules $sousModules)
    {
        $this->sousModules = $sousModules;
        return $this;
    }

    /**
     * Gets as modulesPrerequis
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ModulesPrerequis
     */
    public function getModulesPrerequis()
    {
        return $this->modulesPrerequis;
    }

    /**
     * Sets a new modulesPrerequis
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ModulesPrerequis $modulesPrerequis
     * @return self
     */
    public function setModulesPrerequis(\CdmFr\Model\V1_1_1\Lheo\ModulesPrerequis $modulesPrerequis)
    {
        $this->modulesPrerequis = $modulesPrerequis;
        return $this;
    }

    /**
     * Adds as extras
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Extras $extras
     */
    public function addToExtras(\CdmFr\Model\V1_1_1\Lheo\Extras $extras)
    {
        $this->extras[] = $extras;
        return $this;
    }

    /**
     * isset extras
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtras($index)
    {
        return isset($this->extras[$index]);
    }

    /**
     * unset extras
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtras($index)
    {
        unset($this->extras[$index]);
    }

    /**
     * Gets as extras
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Extras[]
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Sets a new extras
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     * @return self
     */
    public function setExtras(array $extras)
    {
        $this->extras = $extras;
        return $this;
    }


}

