<?php

namespace CdmFr\Model\V1_1_1\CdmFr\TimetableType\ReoccurringEventsAType;

use CdmFr\Model\V1_1_1\CdmFr\InfoBlockType;

/**
 * Class representing OccurrenceRuleAType
 */
class OccurrenceRuleAType extends InfoBlockType
{

    /**
     * @property string $weekday
     */
    private $weekday = null;

    /**
     * Gets as weekday
     *
     * @return string
     */
    public function getWeekday()
    {
        return $this->weekday;
    }

    /**
     * Sets a new weekday
     *
     * @param string $weekday
     * @return self
     */
    public function setWeekday($weekday)
    {
        $this->weekday = $weekday;
        return $this;
    }


}

