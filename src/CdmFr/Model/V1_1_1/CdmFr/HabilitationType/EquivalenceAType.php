<?php

namespace CdmFr\Model\V1_1_1\CdmFr\HabilitationType;

/**
 * Class representing EquivalenceAType
 */
class EquivalenceAType
{

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $equivRefReg
     */
    private $equivRefReg = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[] $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToEquivRefReg(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->equivRefReg[] = $text;
        return $this;
    }

    /**
     * isset equivRefReg
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEquivRefReg($index)
    {
        return isset($this->equivRefReg[$index]);
    }

    /**
     * unset equivRefReg
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEquivRefReg($index)
    {
        unset($this->equivRefReg[$index]);
    }

    /**
     * Gets as equivRefReg
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getEquivRefReg()
    {
        return $this->equivRefReg;
    }

    /**
     * Sets a new equivRefReg
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $equivRefReg
     * @return self
     */
    public function setEquivRefReg(array $equivRefReg)
    {
        $this->equivRefReg = $equivRefReg;
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


}

