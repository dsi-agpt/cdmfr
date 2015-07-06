<?php

namespace CdmFr\Model\V1_1_1\CdmFr\ExamType;

use CdmFr\Model\V1_1_1\Cdm\InfoBlockType;

/**
 * Class representing ExamDurationAType
 */
class ExamDurationAType extends InfoBlockType
{

    /**
     * @property \DateInterval $duration
     */
    private $duration = null;

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


}

