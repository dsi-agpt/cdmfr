<?php

namespace CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType;

/**
 * Class representing DigitalUseAType
 */
class DigitalUseAType
{

    /**
     * @property integer $percentage
     */
    private $percentage = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\LcmsType $lcms
     */
    private $lcms = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\ActivitiesType[] $activities
     */
    private $activities = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\DigitalUseAType\ProdPedaAType
     * $prodPeda
     */
    private $prodPeda = null;

    /**
     * Gets as percentage
     *
     * @return integer
     */
    public function getPercentage()
    {
        return $this->percentage;
    }

    /**
     * Sets a new percentage
     *
     * @param integer $percentage
     * @return self
     */
    public function setPercentage($percentage)
    {
        $this->percentage = $percentage;
        return $this;
    }

    /**
     * Gets as lcms
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\LcmsType
     */
    public function getLcms()
    {
        return $this->lcms;
    }

    /**
     * Sets a new lcms
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\LcmsType $lcms
     * @return self
     */
    public function setLcms(\CdmFr\Model\V1_1_1\CdmFr\LcmsType $lcms)
    {
        $this->lcms = $lcms;
        return $this;
    }

    /**
     * Adds as activities
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\ActivitiesType $activities
     */
    public function addToActivities(\CdmFr\Model\V1_1_1\CdmFr\ActivitiesType $activities)
    {
        $this->activities[] = $activities;
        return $this;
    }

    /**
     * isset activities
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetActivities($index)
    {
        return isset($this->activities[$index]);
    }

    /**
     * unset activities
     *
     * @param scalar $index
     * @return void
     */
    public function unsetActivities($index)
    {
        unset($this->activities[$index]);
    }

    /**
     * Gets as activities
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ActivitiesType[]
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * Sets a new activities
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ActivitiesType[] $activities
     * @return self
     */
    public function setActivities(array $activities)
    {
        $this->activities = $activities;
        return $this;
    }

    /**
     * Gets as prodPeda
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\DigitalUseAType\ProdPedaAType
     */
    public function getProdPeda()
    {
        return $this->prodPeda;
    }

    /**
     * Sets a new prodPeda
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\DigitalUseAType\ProdPedaAType
     * $prodPeda
     * @return self
     */
    public function setProdPeda(\CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\DigitalUseAType\ProdPedaAType $prodPeda)
    {
        $this->prodPeda = $prodPeda;
        return $this;
    }


}

