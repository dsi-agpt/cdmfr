<?php

namespace CdmFr\Model\V1_1_1\CdmFr\HabilitationType\LicProAType;

/**
 * Class representing ComposanteAType
 */
class ComposanteAType
{

    /**
     * @property string $typeCompLicPro
     */
    private $typeCompLicPro = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $compName
     */
    private $compName = null;

    /**
     * Gets as typeCompLicPro
     *
     * @return string
     */
    public function getTypeCompLicPro()
    {
        return $this->typeCompLicPro;
    }

    /**
     * Sets a new typeCompLicPro
     *
     * @param string $typeCompLicPro
     * @return self
     */
    public function setTypeCompLicPro($typeCompLicPro)
    {
        $this->typeCompLicPro = $typeCompLicPro;
        return $this;
    }

    /**
     * Gets as refOrgUnit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit
     */
    public function getRefOrgUnit()
    {
        return $this->refOrgUnit;
    }

    /**
     * Sets a new refOrgUnit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     * @return self
     */
    public function setRefOrgUnit(\CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit)
    {
        $this->refOrgUnit = $refOrgUnit;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text
     */
    public function addToCompName(\CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text)
    {
        $this->compName[] = $text;
        return $this;
    }

    /**
     * isset compName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCompName($index)
    {
        return isset($this->compName[$index]);
    }

    /**
     * unset compName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCompName($index)
    {
        unset($this->compName[$index]);
    }

    /**
     * Gets as compName
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[]
     */
    public function getCompName()
    {
        return $this->compName;
    }

    /**
     * Sets a new compName
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $compName
     * @return self
     */
    public function setCompName(array $compName)
    {
        $this->compName = $compName;
        return $this;
    }


}

