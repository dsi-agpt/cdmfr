<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing PartnershipDataType
 *
 * This tag describes any partnership it is used in various places of habilitation
 * description
 * XSD Type: partnershipDataType
 */
class PartnershipDataType
{

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $partnerName
     */
    private $partnerName = null;

    /**
     * @property string[] $partnershipType
     */
    private $partnershipType = null;

    /**
     * Description des modalités du partenariat. Description de la diplomation, nombre
     * et précisions sur les étudiants, précisions sur la gestion du
     *  partenariat.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType
     * $partnershipInfo
     */
    private $partnershipInfo = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[] $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\CountryAType $country
     */
    private $country = null;

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToPartnerName(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->partnerName[] = $text;
        return $this;
    }

    /**
     * isset partnerName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPartnerName($index)
    {
        return isset($this->partnerName[$index]);
    }

    /**
     * unset partnerName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPartnerName($index)
    {
        unset($this->partnerName[$index]);
    }

    /**
     * Gets as partnerName
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getPartnerName()
    {
        return $this->partnerName;
    }

    /**
     * Sets a new partnerName
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $partnerName
     * @return self
     */
    public function setPartnerName(array $partnerName)
    {
        $this->partnerName = $partnerName;
        return $this;
    }

    /**
     * Adds as partnershipType
     *
     * @return self
     * @param string $partnershipType
     */
    public function addToPartnershipType($partnershipType)
    {
        $this->partnershipType[] = $partnershipType;
        return $this;
    }

    /**
     * isset partnershipType
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPartnershipType($index)
    {
        return isset($this->partnershipType[$index]);
    }

    /**
     * unset partnershipType
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPartnershipType($index)
    {
        unset($this->partnershipType[$index]);
    }

    /**
     * Gets as partnershipType
     *
     * @return string[]
     */
    public function getPartnershipType()
    {
        return $this->partnershipType;
    }

    /**
     * Sets a new partnershipType
     *
     * @param string $partnershipType
     * @return self
     */
    public function setPartnershipType(array $partnershipType)
    {
        $this->partnershipType = $partnershipType;
        return $this;
    }

    /**
     * Gets as partnershipInfo
     *
     * Description des modalités du partenariat. Description de la diplomation, nombre
     * et précisions sur les étudiants, précisions sur la gestion du
     *  partenariat.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType
     */
    public function getPartnershipInfo()
    {
        return $this->partnershipInfo;
    }

    /**
     * Sets a new partnershipInfo
     *
     * Description des modalités du partenariat. Description de la diplomation, nombre
     * et précisions sur les étudiants, précisions sur la gestion du
     *  partenariat.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType
     * $partnershipInfo
     * @return self
     */
    public function setPartnershipInfo(\CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType $partnershipInfo)
    {
        $this->partnershipInfo = $partnershipInfo;
        return $this;
    }

    /**
     * Adds as refOrgUnit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     */
    public function addToRefOrgUnit(\CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit)
    {
        $this->refOrgUnit[] = $refOrgUnit;
        return $this;
    }

    /**
     * isset refOrgUnit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefOrgUnit($index)
    {
        return isset($this->refOrgUnit[$index]);
    }

    /**
     * unset refOrgUnit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefOrgUnit($index)
    {
        unset($this->refOrgUnit[$index]);
    }

    /**
     * Gets as refOrgUnit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[]
     */
    public function getRefOrgUnit()
    {
        return $this->refOrgUnit;
    }

    /**
     * Sets a new refOrgUnit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[] $refOrgUnit
     * @return self
     */
    public function setRefOrgUnit(array $refOrgUnit)
    {
        $this->refOrgUnit = $refOrgUnit;
        return $this;
    }

    /**
     * Gets as country
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\CountryAType
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\CountryAType $country
     * @return self
     */
    public function setCountry(\CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\CountryAType $country)
    {
        $this->country = $country;
        return $this;
    }


}

