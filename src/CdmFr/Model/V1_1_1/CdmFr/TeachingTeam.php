<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing TeachingTeam
 */
class TeachingTeam
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefPerson[] $refPerson
     */
    private $refPerson = null;

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
    {
        $this->infoBlock = $infoBlock;
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

