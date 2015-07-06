<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing CDMdateType
 *
 * Period of time given by date and/or text
 * XSD Type: CDMdate
 */
class CDMdateType extends InfoBlockType
{

    /**
     * @property \DateTime $date
     */
    private $date = null;

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


}

