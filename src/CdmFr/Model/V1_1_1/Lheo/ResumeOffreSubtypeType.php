<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing ResumeOffreSubtypeType
 *
 *
 * XSD Type: resume-offre-subtype
 */
class ResumeOffreSubtypeType
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
     * @property \CdmFr\Model\V1_1_1\Lheo\NomOrganisme $nomOrganisme
     */
    private $nomOrganisme = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\SIRET $sIRET
     */
    private $sIRET = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Codepostal $codepostal
     */
    private $codepostal = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeINSEECommune $codeINSEECommune
     */
    private $codeINSEECommune = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Ville $ville
     */
    private $ville = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Departement $departement
     */
    private $departement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Region $region
     */
    private $region = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Certifiante $certifiante
     */
    private $certifiante = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeNiveauEntree $codeNiveauEntree
     */
    private $codeNiveauEntree = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\PriseEnChargeFraisPossible
     * $priseEnChargeFraisPossible
     */
    private $priseEnChargeFraisPossible = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ModalitesEnseignement $modalitesEnseignement
     */
    private $modalitesEnseignement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodePublicVise $codePublicVise
     */
    private $codePublicVise = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\NombreHeuresTotal $nombreHeuresTotal
     */
    private $nombreHeuresTotal = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Session[] $session
     */
    private $session = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ContactFormationResume $contactFormationResume
     */
    private $contactFormationResume = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Certification[] $certification
     */
    private $certification = null;

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
     * Gets as nomOrganisme
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\NomOrganisme
     */
    public function getNomOrganisme()
    {
        return $this->nomOrganisme;
    }

    /**
     * Sets a new nomOrganisme
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\NomOrganisme $nomOrganisme
     * @return self
     */
    public function setNomOrganisme(\CdmFr\Model\V1_1_1\Lheo\NomOrganisme $nomOrganisme)
    {
        $this->nomOrganisme = $nomOrganisme;
        return $this;
    }

    /**
     * Gets as sIRET
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\SIRET
     */
    public function getSIRET()
    {
        return $this->sIRET;
    }

    /**
     * Sets a new sIRET
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\SIRET $sIRET
     * @return self
     */
    public function setSIRET(\CdmFr\Model\V1_1_1\Lheo\SIRET $sIRET)
    {
        $this->sIRET = $sIRET;
        return $this;
    }

    /**
     * Gets as codepostal
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Codepostal
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Sets a new codepostal
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Codepostal $codepostal
     * @return self
     */
    public function setCodepostal(\CdmFr\Model\V1_1_1\Lheo\Codepostal $codepostal)
    {
        $this->codepostal = $codepostal;
        return $this;
    }

    /**
     * Gets as codeINSEECommune
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeINSEECommune
     */
    public function getCodeINSEECommune()
    {
        return $this->codeINSEECommune;
    }

    /**
     * Sets a new codeINSEECommune
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeINSEECommune $codeINSEECommune
     * @return self
     */
    public function setCodeINSEECommune(\CdmFr\Model\V1_1_1\Lheo\CodeINSEECommune $codeINSEECommune)
    {
        $this->codeINSEECommune = $codeINSEECommune;
        return $this;
    }

    /**
     * Gets as ville
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Sets a new ville
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Ville $ville
     * @return self
     */
    public function setVille(\CdmFr\Model\V1_1_1\Lheo\Ville $ville)
    {
        $this->ville = $ville;
        return $this;
    }

    /**
     * Gets as departement
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Sets a new departement
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Departement $departement
     * @return self
     */
    public function setDepartement(\CdmFr\Model\V1_1_1\Lheo\Departement $departement)
    {
        $this->departement = $departement;
        return $this;
    }

    /**
     * Gets as region
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Region $region
     * @return self
     */
    public function setRegion(\CdmFr\Model\V1_1_1\Lheo\Region $region)
    {
        $this->region = $region;
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
     * Gets as priseEnChargeFraisPossible
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\PriseEnChargeFraisPossible
     */
    public function getPriseEnChargeFraisPossible()
    {
        return $this->priseEnChargeFraisPossible;
    }

    /**
     * Sets a new priseEnChargeFraisPossible
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\PriseEnChargeFraisPossible $priseEnChargeFraisPossible
     * @return self
     */
    public function setPriseEnChargeFraisPossible(\CdmFr\Model\V1_1_1\Lheo\PriseEnChargeFraisPossible $priseEnChargeFraisPossible)
    {
        $this->priseEnChargeFraisPossible = $priseEnChargeFraisPossible;
        return $this;
    }

    /**
     * Gets as modalitesEnseignement
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ModalitesEnseignement
     */
    public function getModalitesEnseignement()
    {
        return $this->modalitesEnseignement;
    }

    /**
     * Sets a new modalitesEnseignement
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ModalitesEnseignement $modalitesEnseignement
     * @return self
     */
    public function setModalitesEnseignement(\CdmFr\Model\V1_1_1\Lheo\ModalitesEnseignement $modalitesEnseignement)
    {
        $this->modalitesEnseignement = $modalitesEnseignement;
        return $this;
    }

    /**
     * Gets as codePublicVise
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodePublicVise
     */
    public function getCodePublicVise()
    {
        return $this->codePublicVise;
    }

    /**
     * Sets a new codePublicVise
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodePublicVise $codePublicVise
     * @return self
     */
    public function setCodePublicVise(\CdmFr\Model\V1_1_1\Lheo\CodePublicVise $codePublicVise)
    {
        $this->codePublicVise = $codePublicVise;
        return $this;
    }

    /**
     * Gets as nombreHeuresTotal
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\NombreHeuresTotal
     */
    public function getNombreHeuresTotal()
    {
        return $this->nombreHeuresTotal;
    }

    /**
     * Sets a new nombreHeuresTotal
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\NombreHeuresTotal $nombreHeuresTotal
     * @return self
     */
    public function setNombreHeuresTotal(\CdmFr\Model\V1_1_1\Lheo\NombreHeuresTotal $nombreHeuresTotal)
    {
        $this->nombreHeuresTotal = $nombreHeuresTotal;
        return $this;
    }

    /**
     * Adds as session
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Session $session
     */
    public function addToSession(\CdmFr\Model\V1_1_1\Lheo\Session $session)
    {
        $this->session[] = $session;
        return $this;
    }

    /**
     * isset session
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSession($index)
    {
        return isset($this->session[$index]);
    }

    /**
     * unset session
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSession($index)
    {
        unset($this->session[$index]);
    }

    /**
     * Gets as session
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Session[]
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Sets a new session
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Session[] $session
     * @return self
     */
    public function setSession(array $session)
    {
        $this->session = $session;
        return $this;
    }

    /**
     * Gets as contactFormationResume
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ContactFormationResume
     */
    public function getContactFormationResume()
    {
        return $this->contactFormationResume;
    }

    /**
     * Sets a new contactFormationResume
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ContactFormationResume $contactFormationResume
     * @return self
     */
    public function setContactFormationResume(\CdmFr\Model\V1_1_1\Lheo\ContactFormationResume $contactFormationResume)
    {
        $this->contactFormationResume = $contactFormationResume;
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

