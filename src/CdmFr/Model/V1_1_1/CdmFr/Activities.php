<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing Activities
 */
class Activities
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $teachingMajor
     */
    private $teachingMajor = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $otherActivities
     */
    private $otherActivities = null;

    /**
     * Gets as teachingMajor
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getTeachingMajor()
    {
        return $this->teachingMajor;
    }

    /**
     * Sets a new teachingMajor
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $teachingMajor
     * @return self
     */
    public function setTeachingMajor(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $teachingMajor)
    {
        $this->teachingMajor = $teachingMajor;
        return $this;
    }

    /**
     * Gets as otherActivities
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getOtherActivities()
    {
        return $this->otherActivities;
    }

    /**
     * Sets a new otherActivities
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $otherActivities
     * @return self
     */
    public function setOtherActivities(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $otherActivities)
    {
        $this->otherActivities = $otherActivities;
        return $this;
    }


}

