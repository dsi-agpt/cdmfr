<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing TimingInfoType
 *
 *
 * XSD Type: timingInfoType
 */
class TimingInfoType
{

    /**
     * @property \DateInterval $duration
     */
    private $duration = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateType $openingDate
     */
    private $openingDate = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateType $renewalDate
     */
    private $renewalDate = null;

    /**
     * Gets as duration
     *
     * @return \DateInterval
     */
    public function getDuration()
    {
        return $this->duration;
    }

    /**
     * Sets a new duration
     *
     * @param \DateInterval $duration
     * @return self
     */
    public function setDuration(\DateInterval $duration)
    {
        $this->duration = $duration;
        return $this;
    }

    /**
     * Gets as openingDate
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateType
     */
    public function getOpeningDate()
    {
        return $this->openingDate;
    }

    /**
     * Sets a new openingDate
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateType $openingDate
     * @return self
     */
    public function setOpeningDate(\CdmFr\Model\V1_1_1\Cdm\CDMdateType $openingDate)
    {
        $this->openingDate = $openingDate;
        return $this;
    }

    /**
     * Gets as renewalDate
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateType
     */
    public function getRenewalDate()
    {
        return $this->renewalDate;
    }

    /**
     * Sets a new renewalDate
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateType $renewalDate
     * @return self
     */
    public function setRenewalDate(\CdmFr\Model\V1_1_1\Cdm\CDMdateType $renewalDate)
    {
        $this->renewalDate = $renewalDate;
        return $this;
    }


}

