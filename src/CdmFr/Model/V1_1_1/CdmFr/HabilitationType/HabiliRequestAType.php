<?php

namespace CdmFr\Model\V1_1_1\CdmFr\HabilitationType;

/**
 * Class representing HabiliRequestAType
 */
class HabiliRequestAType
{

    /**
     * Dates des étapes de l'habilitation
     *
     * @property
     * \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType\HabiliTimingAType
     * $habiliTiming
     */
    private $habiliTiming = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\HabiliStatusValueType $habilistatus
     */
    private $habilistatus = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\HabiliReqTypeValueType $habiliReqType
     */
    private $habiliReqType = null;

    /**
     * @property
     * \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType\HabiliReqDatesAType
     * $habiliReqDates
     */
    private $habiliReqDates = null;

    /**
     * Gets as habiliTiming
     *
     * Dates des étapes de l'habilitation
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType\HabiliTimingAType
     */
    public function getHabiliTiming()
    {
        return $this->habiliTiming;
    }

    /**
     * Sets a new habiliTiming
     *
     * Dates des étapes de l'habilitation
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType\HabiliTimingAType
     * $habiliTiming
     * @return self
     */
    public function setHabiliTiming(\CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType\HabiliTimingAType $habiliTiming)
    {
        $this->habiliTiming = $habiliTiming;
        return $this;
    }

    /**
     * Gets as habilistatus
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabiliStatusValueType
     */
    public function getHabilistatus()
    {
        return $this->habilistatus;
    }

    /**
     * Sets a new habilistatus
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabiliStatusValueType $habilistatus
     * @return self
     */
    public function setHabilistatus(\CdmFr\Model\V1_1_1\CdmFr\HabiliStatusValueType $habilistatus)
    {
        $this->habilistatus = $habilistatus;
        return $this;
    }

    /**
     * Gets as habiliReqType
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabiliReqTypeValueType
     */
    public function getHabiliReqType()
    {
        return $this->habiliReqType;
    }

    /**
     * Sets a new habiliReqType
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabiliReqTypeValueType $habiliReqType
     * @return self
     */
    public function setHabiliReqType(\CdmFr\Model\V1_1_1\CdmFr\HabiliReqTypeValueType $habiliReqType)
    {
        $this->habiliReqType = $habiliReqType;
        return $this;
    }

    /**
     * Gets as habiliReqDates
     *
     * @return
     * \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType\HabiliReqDatesAType
     */
    public function getHabiliReqDates()
    {
        return $this->habiliReqDates;
    }

    /**
     * Sets a new habiliReqDates
     *
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType\HabiliReqDatesAType
     * $habiliReqDates
     * @return self
     */
    public function setHabiliReqDates(\CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType\HabiliReqDatesAType $habiliReqDates)
    {
        $this->habiliReqDates = $habiliReqDates;
        return $this;
    }


}

