<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing CDMdateTimeType
 *
 * Moment of time given by date and/or time of day
 *  and/or
 *  text
 * XSD Type: CDMdateTime
 */
class CDMdateTimeType extends InfoBlockType
{

    /**
     * @property \DateTime $date
     */
    private $date = null;

    /**
     * @property \DateTime $time
     */
    private $time = null;

    /**
     * Gets as date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \DateTime $date
     * @return self
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
        return $this;
    }

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

