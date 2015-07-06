<?php

namespace CdmFr\Model\V1_1_1\CdmFr\TimetableType;

/**
 * Class representing ReoccurringEventsAType
 */
class ReoccurringEventsAType
{

    /**
     * Rule of the occurrences, e.g. each
     *  Monday
     *
     * @property
     * \CdmFr\Model\V1_1_1\CdmFr\TimetableType\ReoccurringEventsAType\OccurrenceRuleAType
     * $occurrenceRule
     */
    private $occurrenceRule = null;

    /**
     * Start of period
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\CDMdateType $dateFrom
     */
    private $dateFrom = null;

    /**
     * End of period
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\CDMdateType $dateTo
     */
    private $dateTo = null;

    /**
     * Time of the start of each event in the
     *  period
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\CDMtimeType $timeFrom
     */
    private $timeFrom = null;

    /**
     * Time of the end of each event in the
     *  period
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\CDMtimeType $timeTo
     */
    private $timeTo = null;

    /**
     * Gets as occurrenceRule
     *
     * Rule of the occurrences, e.g. each
     *  Monday
     *
     * @return
     * \CdmFr\Model\V1_1_1\CdmFr\TimetableType\ReoccurringEventsAType\OccurrenceRuleAType
     */
    public function getOccurrenceRule()
    {
        return $this->occurrenceRule;
    }

    /**
     * Sets a new occurrenceRule
     *
     * Rule of the occurrences, e.g. each
     *  Monday
     *
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\TimetableType\ReoccurringEventsAType\OccurrenceRuleAType
     * $occurrenceRule
     * @return self
     */
    public function setOccurrenceRule(\CdmFr\Model\V1_1_1\CdmFr\TimetableType\ReoccurringEventsAType\OccurrenceRuleAType $occurrenceRule)
    {
        $this->occurrenceRule = $occurrenceRule;
        return $this;
    }

    /**
     * Gets as dateFrom
     *
     * Start of period
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CDMdateType
     */
    public function getDateFrom()
    {
        return $this->dateFrom;
    }

    /**
     * Sets a new dateFrom
     *
     * Start of period
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CDMdateType $dateFrom
     * @return self
     */
    public function setDateFrom(\CdmFr\Model\V1_1_1\CdmFr\CDMdateType $dateFrom)
    {
        $this->dateFrom = $dateFrom;
        return $this;
    }

    /**
     * Gets as dateTo
     *
     * End of period
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CDMdateType
     */
    public function getDateTo()
    {
        return $this->dateTo;
    }

    /**
     * Sets a new dateTo
     *
     * End of period
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CDMdateType $dateTo
     * @return self
     */
    public function setDateTo(\CdmFr\Model\V1_1_1\CdmFr\CDMdateType $dateTo)
    {
        $this->dateTo = $dateTo;
        return $this;
    }

    /**
     * Gets as timeFrom
     *
     * Time of the start of each event in the
     *  period
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CDMtimeType
     */
    public function getTimeFrom()
    {
        return $this->timeFrom;
    }

    /**
     * Sets a new timeFrom
     *
     * Time of the start of each event in the
     *  period
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CDMtimeType $timeFrom
     * @return self
     */
    public function setTimeFrom(\CdmFr\Model\V1_1_1\CdmFr\CDMtimeType $timeFrom)
    {
        $this->timeFrom = $timeFrom;
        return $this;
    }

    /**
     * Gets as timeTo
     *
     * Time of the end of each event in the
     *  period
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CDMtimeType
     */
    public function getTimeTo()
    {
        return $this->timeTo;
    }

    /**
     * Sets a new timeTo
     *
     * Time of the end of each event in the
     *  period
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CDMtimeType $timeTo
     * @return self
     */
    public function setTimeTo(\CdmFr\Model\V1_1_1\CdmFr\CDMtimeType $timeTo)
    {
        $this->timeTo = $timeTo;
        return $this;
    }


}

