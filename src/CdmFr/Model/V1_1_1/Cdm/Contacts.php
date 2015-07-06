<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing Contacts
 */
class Contacts
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\ContactData[] $contactData
     */
    private $contactData = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Person[] $person
     */
    private $person = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefPerson[] $refPerson
     */
    private $refPerson = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefOrgUnit[] $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock[] $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgResp[] $refOrgResp
     */
    private $refOrgResp = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TeachingTeam[] $teachingTeam
     */
    private $teachingTeam = null;

    /**
     * Adds as contactData
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\ContactData $contactData
     */
    public function addToContactData(\CdmFr\Model\V1_1_1\Cdm\ContactData $contactData)
    {
        $this->contactData[] = $contactData;
        return $this;
    }

    /**
     * isset contactData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactData($index)
    {
        return isset($this->contactData[$index]);
    }

    /**
     * unset contactData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactData($index)
    {
        unset($this->contactData[$index]);
    }

    /**
     * Gets as contactData
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\ContactData[]
     */
    public function getContactData()
    {
        return $this->contactData;
    }

    /**
     * Sets a new contactData
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\ContactData[] $contactData
     * @return self
     */
    public function setContactData(array $contactData)
    {
        $this->contactData = $contactData;
        return $this;
    }

    /**
     * Adds as person
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\Person $person
     */
    public function addToPerson(\CdmFr\Model\V1_1_1\Cdm\Person $person)
    {
        $this->person[] = $person;
        return $this;
    }

    /**
     * isset person
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPerson($index)
    {
        return isset($this->person[$index]);
    }

    /**
     * unset person
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPerson($index)
    {
        unset($this->person[$index]);
    }

    /**
     * Gets as person
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Person[]
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Person[] $person
     * @return self
     */
    public function setPerson(array $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Adds as refPerson
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\RefPerson $refPerson
     */
    public function addToRefPerson(\CdmFr\Model\V1_1_1\Cdm\RefPerson $refPerson)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\RefPerson[]
     */
    public function getRefPerson()
    {
        return $this->refPerson;
    }

    /**
     * Sets a new refPerson
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\RefPerson[] $refPerson
     * @return self
     */
    public function setRefPerson(array $refPerson)
    {
        $this->refPerson = $refPerson;
        return $this;
    }

    /**
     * Adds as refOrgUnit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\RefOrgUnit $refOrgUnit
     */
    public function addToRefOrgUnit(\CdmFr\Model\V1_1_1\Cdm\RefOrgUnit $refOrgUnit)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\RefOrgUnit[]
     */
    public function getRefOrgUnit()
    {
        return $this->refOrgUnit;
    }

    /**
     * Sets a new refOrgUnit
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\RefOrgUnit[] $refOrgUnit
     * @return self
     */
    public function setRefOrgUnit(array $refOrgUnit)
    {
        $this->refOrgUnit = $refOrgUnit;
        return $this;
    }

    /**
     * Adds as infoBlock
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    public function addToInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
    {
        $this->infoBlock[] = $infoBlock;
        return $this;
    }

    /**
     * isset infoBlock
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInfoBlock($index)
    {
        return isset($this->infoBlock[$index]);
    }

    /**
     * unset infoBlock
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInfoBlock($index)
    {
        unset($this->infoBlock[$index]);
    }

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock[]
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock[] $infoBlock
     * @return self
     */
    public function setInfoBlock(array $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Adds as refOrgResp
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgResp $refOrgResp
     */
    public function addToRefOrgResp(\CdmFr\Model\V1_1_1\CdmFr\RefOrgResp $refOrgResp)
    {
        $this->refOrgResp[] = $refOrgResp;
        return $this;
    }

    /**
     * isset refOrgResp
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefOrgResp($index)
    {
        return isset($this->refOrgResp[$index]);
    }

    /**
     * unset refOrgResp
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefOrgResp($index)
    {
        unset($this->refOrgResp[$index]);
    }

    /**
     * Gets as refOrgResp
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefOrgResp[]
     */
    public function getRefOrgResp()
    {
        return $this->refOrgResp;
    }

    /**
     * Sets a new refOrgResp
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgResp[] $refOrgResp
     * @return self
     */
    public function setRefOrgResp(array $refOrgResp)
    {
        $this->refOrgResp = $refOrgResp;
        return $this;
    }

    /**
     * Adds as teachingTeam
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TeachingTeam $teachingTeam
     */
    public function addToTeachingTeam(\CdmFr\Model\V1_1_1\CdmFr\TeachingTeam $teachingTeam)
    {
        $this->teachingTeam[] = $teachingTeam;
        return $this;
    }

    /**
     * isset teachingTeam
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTeachingTeam($index)
    {
        return isset($this->teachingTeam[$index]);
    }

    /**
     * unset teachingTeam
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTeachingTeam($index)
    {
        unset($this->teachingTeam[$index]);
    }

    /**
     * Gets as teachingTeam
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TeachingTeam[]
     */
    public function getTeachingTeam()
    {
        return $this->teachingTeam;
    }

    /**
     * Sets a new teachingTeam
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TeachingTeam[] $teachingTeam
     * @return self
     */
    public function setTeachingTeam(array $teachingTeam)
    {
        $this->teachingTeam = $teachingTeam;
        return $this;
    }


}

