<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing OrganismeFormateurSubtypeType
 *
 *
 * XSD Type: organisme-formateur-subtype
 */
class OrganismeFormateurSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\SIRETFormateur $sIRETFormateur
     */
    private $sIRETFormateur = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\RaisonSocialeFormateur $raisonSocialeFormateur
     */
    private $raisonSocialeFormateur = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ContactFormateur $contactFormateur
     */
    private $contactFormateur = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Potentiel $potentiel
     */
    private $potentiel = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as sIRETFormateur
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\SIRETFormateur
     */
    public function getSIRETFormateur()
    {
        return $this->sIRETFormateur;
    }

    /**
     * Sets a new sIRETFormateur
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\SIRETFormateur $sIRETFormateur
     * @return self
     */
    public function setSIRETFormateur(\CdmFr\Model\V1_1_1\Lheo\SIRETFormateur $sIRETFormateur)
    {
        $this->sIRETFormateur = $sIRETFormateur;
        return $this;
    }

    /**
     * Gets as raisonSocialeFormateur
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\RaisonSocialeFormateur
     */
    public function getRaisonSocialeFormateur()
    {
        return $this->raisonSocialeFormateur;
    }

    /**
     * Sets a new raisonSocialeFormateur
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\RaisonSocialeFormateur $raisonSocialeFormateur
     * @return self
     */
    public function setRaisonSocialeFormateur(\CdmFr\Model\V1_1_1\Lheo\RaisonSocialeFormateur $raisonSocialeFormateur)
    {
        $this->raisonSocialeFormateur = $raisonSocialeFormateur;
        return $this;
    }

    /**
     * Gets as contactFormateur
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ContactFormateur
     */
    public function getContactFormateur()
    {
        return $this->contactFormateur;
    }

    /**
     * Sets a new contactFormateur
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ContactFormateur $contactFormateur
     * @return self
     */
    public function setContactFormateur(\CdmFr\Model\V1_1_1\Lheo\ContactFormateur $contactFormateur)
    {
        $this->contactFormateur = $contactFormateur;
        return $this;
    }

    /**
     * Gets as potentiel
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Potentiel
     */
    public function getPotentiel()
    {
        return $this->potentiel;
    }

    /**
     * Sets a new potentiel
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Potentiel $potentiel
     * @return self
     */
    public function setPotentiel(\CdmFr\Model\V1_1_1\Lheo\Potentiel $potentiel)
    {
        $this->potentiel = $potentiel;
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

