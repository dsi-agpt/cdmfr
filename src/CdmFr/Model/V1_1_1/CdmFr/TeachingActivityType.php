<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing TeachingActivityType
 *
 * Information on how the teaching activity is
 *  organised, ex lecture,
 *  seminar, research seminar, exercise course,
 *  practical, laboratory work, guided
 *  personal study, tutorial,
 *  independent studies, internship, placement or ‘stage’,
 *  fieldwork,
 *  project work etc.
 * XSD Type: teachingActivityType
 */
class TeachingActivityType
{

    /**
     * @property string $method
     */
    private $method = null;

    /**
     * @property string $org
     */
    private $org = null;

    /**
     * @property string $timeOfDay
     */
    private $timeOfDay = null;

    /**
     * @property string $userDefined
     */
    private $userDefined = null;

    /**
     * @property boolean $ePortfolio
     */
    private $ePortfolio = null;

    /**
     * Shorthand identification of the teaching
     *  activity
     *
     * @property string $teachingActivityID
     */
    private $teachingActivityID = null;

    /**
     * Full name of the teaching activity
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $teachingActivityName
     */
    private $teachingActivityName = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\AdmissionInfo $admissionInfo
     */
    private $admissionInfo = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TimetableElement[] $timetableElement
     */
    private $timetableElement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\InstructionLanguage $instructionLanguage
     */
    private $instructionLanguage = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Contacts $contacts
     */
    private $contacts = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * Teaching activity part structure
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\TeachingActivityType\TeachingActivityStructureAType
     * $teachingActivityStructure
     */
    private $teachingActivityStructure = null;

    /**
     * Gets as method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * @param string $method
     * @return self
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as org
     *
     * @return string
     */
    public function getOrg()
    {
        return $this->org;
    }

    /**
     * Sets a new org
     *
     * @param string $org
     * @return self
     */
    public function setOrg($org)
    {
        $this->org = $org;
        return $this;
    }

    /**
     * Gets as timeOfDay
     *
     * @return string
     */
    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    /**
     * Sets a new timeOfDay
     *
     * @param string $timeOfDay
     * @return self
     */
    public function setTimeOfDay($timeOfDay)
    {
        $this->timeOfDay = $timeOfDay;
        return $this;
    }

    /**
     * Gets as userDefined
     *
     * @return string
     */
    public function getUserDefined()
    {
        return $this->userDefined;
    }

    /**
     * Sets a new userDefined
     *
     * @param string $userDefined
     * @return self
     */
    public function setUserDefined($userDefined)
    {
        $this->userDefined = $userDefined;
        return $this;
    }

    /**
     * Gets as ePortfolio
     *
     * @return boolean
     */
    public function getEPortfolio()
    {
        return $this->ePortfolio;
    }

    /**
     * Sets a new ePortfolio
     *
     * @param boolean $ePortfolio
     * @return self
     */
    public function setEPortfolio($ePortfolio)
    {
        $this->ePortfolio = $ePortfolio;
        return $this;
    }

    /**
     * Gets as teachingActivityID
     *
     * Shorthand identification of the teaching
     *  activity
     *
     * @return string
     */
    public function getTeachingActivityID()
    {
        return $this->teachingActivityID;
    }

    /**
     * Sets a new teachingActivityID
     *
     * Shorthand identification of the teaching
     *  activity
     *
     * @param string $teachingActivityID
     * @return self
     */
    public function setTeachingActivityID($teachingActivityID)
    {
        $this->teachingActivityID = $teachingActivityID;
        return $this;
    }

    /**
     * Adds as text
     *
     * Full name of the teaching activity
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToTeachingActivityName(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->teachingActivityName[] = $text;
        return $this;
    }

    /**
     * isset teachingActivityName
     *
     * Full name of the teaching activity
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTeachingActivityName($index)
    {
        return isset($this->teachingActivityName[$index]);
    }

    /**
     * unset teachingActivityName
     *
     * Full name of the teaching activity
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTeachingActivityName($index)
    {
        unset($this->teachingActivityName[$index]);
    }

    /**
     * Gets as teachingActivityName
     *
     * Full name of the teaching activity
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getTeachingActivityName()
    {
        return $this->teachingActivityName;
    }

    /**
     * Sets a new teachingActivityName
     *
     * Full name of the teaching activity
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $teachingActivityName
     * @return self
     */
    public function setTeachingActivityName(array $teachingActivityName)
    {
        $this->teachingActivityName = $teachingActivityName;
        return $this;
    }

    /**
     * Gets as admissionInfo
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\AdmissionInfo
     */
    public function getAdmissionInfo()
    {
        return $this->admissionInfo;
    }

    /**
     * Sets a new admissionInfo
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\AdmissionInfo $admissionInfo
     * @return self
     */
    public function setAdmissionInfo(\CdmFr\Model\V1_1_1\CdmFr\AdmissionInfo $admissionInfo)
    {
        $this->admissionInfo = $admissionInfo;
        return $this;
    }

    /**
     * Adds as timetableElement
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TimetableElement $timetableElement
     */
    public function addToTimetableElement(\CdmFr\Model\V1_1_1\CdmFr\TimetableElement $timetableElement)
    {
        $this->timetableElement[] = $timetableElement;
        return $this;
    }

    /**
     * isset timetableElement
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTimetableElement($index)
    {
        return isset($this->timetableElement[$index]);
    }

    /**
     * unset timetableElement
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTimetableElement($index)
    {
        unset($this->timetableElement[$index]);
    }

    /**
     * Gets as timetableElement
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TimetableElement[]
     */
    public function getTimetableElement()
    {
        return $this->timetableElement;
    }

    /**
     * Sets a new timetableElement
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TimetableElement[] $timetableElement
     * @return self
     */
    public function setTimetableElement(array $timetableElement)
    {
        $this->timetableElement = $timetableElement;
        return $this;
    }

    /**
     * Gets as instructionLanguage
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\InstructionLanguage
     */
    public function getInstructionLanguage()
    {
        return $this->instructionLanguage;
    }

    /**
     * Sets a new instructionLanguage
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\InstructionLanguage $instructionLanguage
     * @return self
     */
    public function setInstructionLanguage(\CdmFr\Model\V1_1_1\CdmFr\InstructionLanguage $instructionLanguage)
    {
        $this->instructionLanguage = $instructionLanguage;
        return $this;
    }

    /**
     * Gets as contacts
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Contacts
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Contacts $contacts
     * @return self
     */
    public function setContacts(\CdmFr\Model\V1_1_1\CdmFr\Contacts $contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\InfoBlock
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlock $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\CdmFr\InfoBlock $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Gets as teachingActivityStructure
     *
     * Teaching activity part structure
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TeachingActivityType\TeachingActivityStructureAType
     */
    public function getTeachingActivityStructure()
    {
        return $this->teachingActivityStructure;
    }

    /**
     * Sets a new teachingActivityStructure
     *
     * Teaching activity part structure
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TeachingActivityType\TeachingActivityStructureAType
     * $teachingActivityStructure
     * @return self
     */
    public function setTeachingActivityStructure(\CdmFr\Model\V1_1_1\CdmFr\TeachingActivityType\TeachingActivityStructureAType $teachingActivityStructure)
    {
        $this->teachingActivityStructure = $teachingActivityStructure;
        return $this;
    }


}

