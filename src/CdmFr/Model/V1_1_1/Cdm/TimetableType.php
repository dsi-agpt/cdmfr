<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing TimetableType
 *
 * Description of an entry in a time table
 * XSD Type: timetableType
 */
class TimetableType
{

    /**
     * Events occurring many times in a period
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\TimetableType\ReoccurringEventsAType
     * $reoccurringEvents
     */
    private $reoccurringEvents = null;

    /**
     * Start and end of a single event
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\TimetableType\SingleEventAType $singleEvent
     */
    private $singleEvent = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\TeachingPlace $teachingPlace
     */
    private $teachingPlace = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Contacts $contacts
     */
    private $contacts = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * Gets as reoccurringEvents
     *
     * Events occurring many times in a period
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TimetableType\ReoccurringEventsAType
     */
    public function getReoccurringEvents()
    {
        return $this->reoccurringEvents;
    }

    /**
     * Sets a new reoccurringEvents
     *
     * Events occurring many times in a period
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TimetableType\ReoccurringEventsAType $reoccurringEvents
     * @return self
     */
    public function setReoccurringEvents(\CdmFr\Model\V1_1_1\Cdm\TimetableType\ReoccurringEventsAType $reoccurringEvents)
    {
        $this->reoccurringEvents = $reoccurringEvents;
        return $this;
    }

    /**
     * Gets as singleEvent
     *
     * Start and end of a single event
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TimetableType\SingleEventAType
     */
    public function getSingleEvent()
    {
        return $this->singleEvent;
    }

    /**
     * Sets a new singleEvent
     *
     * Start and end of a single event
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TimetableType\SingleEventAType $singleEvent
     * @return self
     */
    public function setSingleEvent(\CdmFr\Model\V1_1_1\Cdm\TimetableType\SingleEventAType $singleEvent)
    {
        $this->singleEvent = $singleEvent;
        return $this;
    }

    /**
     * Gets as teachingPlace
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TeachingPlace
     */
    public function getTeachingPlace()
    {
        return $this->teachingPlace;
    }

    /**
     * Sets a new teachingPlace
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TeachingPlace $teachingPlace
     * @return self
     */
    public function setTeachingPlace(\CdmFr\Model\V1_1_1\Cdm\TeachingPlace $teachingPlace)
    {
        $this->teachingPlace = $teachingPlace;
        return $this;
    }

    /**
     * Gets as contacts
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Contacts
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Contacts $contacts
     * @return self
     */
    public function setContacts(\CdmFr\Model\V1_1_1\Cdm\Contacts $contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }

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


}

