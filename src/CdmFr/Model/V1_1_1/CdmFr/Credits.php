<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing Credits
 */
class Credits
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
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\GlobalVolumeType[] $globalVolume
     */
    private $globalVolume = null;

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

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Adds as globalVolume
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\GlobalVolumeType $globalVolume
     */
    public function addToGlobalVolume(\CdmFr\Model\V1_1_1\CdmFr\GlobalVolumeType $globalVolume)
    {
        $this->globalVolume[] = $globalVolume;
        return $this;
    }

    /**
     * isset globalVolume
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGlobalVolume($index)
    {
        return isset($this->globalVolume[$index]);
    }

    /**
     * unset globalVolume
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGlobalVolume($index)
    {
        unset($this->globalVolume[$index]);
    }

    /**
     * Gets as globalVolume
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\GlobalVolumeType[]
     */
    public function getGlobalVolume()
    {
        return $this->globalVolume;
    }

    /**
     * Sets a new globalVolume
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\GlobalVolumeType[] $globalVolume
     * @return self
     */
    public function setGlobalVolume(array $globalVolume)
    {
        $this->globalVolume = $globalVolume;
        return $this;
    }


}

