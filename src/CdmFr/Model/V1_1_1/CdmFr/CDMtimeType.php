<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing CDMtimeType
 *
 * Moment of time given by time of day and/or text
 * XSD Type: CDMtime
 */
class CDMtimeType extends InfoBlockType
{

    /**
     * @property \DateTime $time
     */
    private $time = null;

    /**
     * Gets as time
     *
     * @return \DateTime
     */
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Sets a new time
     *
     * @param \DateTime $time
     * @return self
     */
    public function setTime(\DateTime $time)
    {
        $this->time = $time;
        return $this;
    }


}

