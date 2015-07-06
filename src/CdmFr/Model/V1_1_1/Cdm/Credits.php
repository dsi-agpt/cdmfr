<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing Credits
 */
class Credits extends InfoBlockType
{

    /**
     * @property float $eCTScredits
     */
    private $eCTScredits = null;

    /**
     * @property float $hoursPerWeek
     */
    private $hoursPerWeek = null;

    /**
     * @property float $totalWorkLoad
     */
    private $totalWorkLoad = null;

    /**
     * Gets as eCTScredits
     *
     * @return float
     */
    public function getECTScredits()
    {
        return $this->eCTScredits;
    }

    /**
     * Sets a new eCTScredits
     *
     * @param float $eCTScredits
     * @return self
     */
    public function setECTScredits($eCTScredits)
    {
        $this->eCTScredits = $eCTScredits;
        return $this;
    }

    /**
     * Gets as hoursPerWeek
     *
     * @return float
     */
    public function getHoursPerWeek()
    {
        return $this->hoursPerWeek;
    }

    /**
     * Sets a new hoursPerWeek
     *
     * @param float $hoursPerWeek
     * @return self
     */
    public function setHoursPerWeek($hoursPerWeek)
    {
        $this->hoursPerWeek = $hoursPerWeek;
        return $this;
    }

    /**
     * Gets as totalWorkLoad
     *
     * @return float
     */
    public function getTotalWorkLoad()
    {
        return $this->totalWorkLoad;
    }

    /**
     * Sets a new totalWorkLoad
     *
     * @param float $totalWorkLoad
     * @return self
     */
    public function setTotalWorkLoad($totalWorkLoad)
    {
        $this->totalWorkLoad = $totalWorkLoad;
        return $this;
    }


}

