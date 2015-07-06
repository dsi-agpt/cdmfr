<?php

namespace CdmFr\Model\V1_1_1\Cdm\TimetableType;

/**
 * Class representing SingleEventAType
 */
class SingleEventAType
{

    /**
     * Time of the start of the
     *  event
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType $start
     */
    private $start = null;

    /**
     * Time of the end of the
     *  event
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType $end
     */
    private $end = null;

    /**
     * Gets as start
     *
     * Time of the start of the
     *  event
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * Time of the start of the
     *  event
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType $start
     * @return self
     */
    public function setStart(\CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as end
     *
     * Time of the end of the
     *  event
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType
     */
    public function getEnd()
    {
        return $this->end;
    }

    /**
     * Sets a new end
     *
     * Time of the end of the
     *  event
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType $end
     * @return self
     */
    public function setEnd(\CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType $end)
    {
        $this->end = $end;
        return $this;
    }


}

