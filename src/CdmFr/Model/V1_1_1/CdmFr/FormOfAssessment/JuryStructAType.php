<?php

namespace CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment;

/**
 * Class representing JuryStructAType
 */
class JuryStructAType
{

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $juryStructDesc
     */
    private $juryStructDesc = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefPerson[] $refPerson
     */
    private $refPerson = null;

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToJuryStructDesc(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->juryStructDesc[] = $text;
        return $this;
    }

    /**
     * isset juryStructDesc
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetJuryStructDesc($index)
    {
        return isset($this->juryStructDesc[$index]);
    }

    /**
     * unset juryStructDesc
     *
     * @param scalar $index
     * @return void
     */
    public function unsetJuryStructDesc($index)
    {
        unset($this->juryStructDesc[$index]);
    }

    /**
     * Gets as juryStructDesc
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getJuryStructDesc()
    {
        return $this->juryStructDesc;
    }

    /**
     * Sets a new juryStructDesc
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $juryStructDesc
     * @return self
     */
    public function setJuryStructDesc(array $juryStructDesc)
    {
        $this->juryStructDesc = $juryStructDesc;
        return $this;
    }

    /**
     * Adds as refPerson
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefPerson $refPerson
     */
    public function addToRefPerson(\CdmFr\Model\V1_1_1\CdmFr\RefPerson $refPerson)
    {
        $this->refPerson[] = $refPerson;
        return $this;
    }

    /**
     * isset refPerson
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefPerson($index)
    {
        return isset($this->refPerson[$index]);
    }

    /**
     * unset refPerson
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefPerson($index)
    {
        unset($this->refPerson[$index]);
    }

    /**
     * Gets as refPerson
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefPerson[]
     */
    public function getRefPerson()
    {
        return $this->refPerson;
    }

    /**
     * Sets a new refPerson
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefPerson[] $refPerson
     * @return self
     */
    public function setRefPerson(array $refPerson)
    {
        $this->refPerson = $refPerson;
        return $this;
    }


}

