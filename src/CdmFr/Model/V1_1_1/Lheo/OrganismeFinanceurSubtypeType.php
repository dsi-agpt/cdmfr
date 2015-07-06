<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing OrganismeFinanceurSubtypeType
 *
 *
 * XSD Type: organisme-financeur-subtype
 */
class OrganismeFinanceurSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeFinanceur $codeFinanceur
     */
    private $codeFinanceur = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\NbPlacesFinancees $nbPlacesFinancees
     */
    private $nbPlacesFinancees = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as codeFinanceur
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeFinanceur
     */
    public function getCodeFinanceur()
    {
        return $this->codeFinanceur;
    }

    /**
     * Sets a new codeFinanceur
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeFinanceur $codeFinanceur
     * @return self
     */
    public function setCodeFinanceur(\CdmFr\Model\V1_1_1\Lheo\CodeFinanceur $codeFinanceur)
    {
        $this->codeFinanceur = $codeFinanceur;
        return $this;
    }

    /**
     * Gets as nbPlacesFinancees
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\NbPlacesFinancees
     */
    public function getNbPlacesFinancees()
    {
        return $this->nbPlacesFinancees;
    }

    /**
     * Sets a new nbPlacesFinancees
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\NbPlacesFinancees $nbPlacesFinancees
     * @return self
     */
    public function setNbPlacesFinancees(\CdmFr\Model\V1_1_1\Lheo\NbPlacesFinancees $nbPlacesFinancees)
    {
        $this->nbPlacesFinancees = $nbPlacesFinancees;
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

