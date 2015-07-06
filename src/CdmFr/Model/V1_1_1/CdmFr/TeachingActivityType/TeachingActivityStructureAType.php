<?php

namespace CdmFr\Model\V1_1_1\CdmFr\TeachingActivityType;

/**
 * Class representing TeachingActivityStructureAType
 */
class TeachingActivityStructureAType
{

    /**
     * @property string $activityPartStructure
     */
    private $activityPartStructure = null;

    /**
     * Description of relationships between the
     *  activity
     *  parts
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType $partStructure
     */
    private $partStructure = null;

    /**
     * List of teaching activity parts
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\TeachingActivityType[] $activityParts
     */
    private $activityParts = null;

    /**
     * Gets as activityPartStructure
     *
     * @return string
     */
    public function getActivityPartStructure()
    {
        return $this->activityPartStructure;
    }

    /**
     * Sets a new activityPartStructure
     *
     * @param string $activityPartStructure
     * @return self
     */
    public function setActivityPartStructure($activityPartStructure)
    {
        $this->activityPartStructure = $activityPartStructure;
        return $this;
    }

    /**
     * Gets as partStructure
     *
     * Description of relationships between the
     *  activity
     *  parts
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType
     */
    public function getPartStructure()
    {
        return $this->partStructure;
    }

    /**
     * Sets a new partStructure
     *
     * Description of relationships between the
     *  activity
     *  parts
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType $partStructure
     * @return self
     */
    public function setPartStructure(\CdmFr\Model\V1_1_1\CdmFr\InfoBlockType $partStructure)
    {
        $this->partStructure = $partStructure;
        return $this;
    }

    /**
     * Adds as activityParts
     *
     * List of teaching activity parts
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TeachingActivityType $activityParts
     */
    public function addToActivityParts(\CdmFr\Model\V1_1_1\CdmFr\TeachingActivityType $activityParts)
    {
        $this->activityParts[] = $activityParts;
        return $this;
    }

    /**
     * isset activityParts
     *
     * List of teaching activity parts
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetActivityParts($index)
    {
        return isset($this->activityParts[$index]);
    }

    /**
     * unset activityParts
     *
     * List of teaching activity parts
     *
     * @param scalar $index
     * @return void
     */
    public function unsetActivityParts($index)
    {
        unset($this->activityParts[$index]);
    }

    /**
     * Gets as activityParts
     *
     * List of teaching activity parts
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TeachingActivityType[]
     */
    public function getActivityParts()
    {
        return $this->activityParts;
    }

    /**
     * Sets a new activityParts
     *
     * List of teaching activity parts
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TeachingActivityType[] $activityParts
     * @return self
     */
    public function setActivityParts(array $activityParts)
    {
        $this->activityParts = $activityParts;
        return $this;
    }


}

