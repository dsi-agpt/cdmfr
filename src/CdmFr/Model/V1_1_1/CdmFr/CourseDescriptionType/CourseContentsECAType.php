<?php

namespace CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType;

/**
 * Class representing CourseContentsECAType
 */
class CourseContentsECAType
{

    /**
     * @property string $nature
     */
    private $nature = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefCourse[] $refCourse
     */
    private $refCourse = null;

    /**
     * Gets as nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Sets a new nature
     *
     * @param string $nature
     * @return self
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
        return $this;
    }

    /**
     * Adds as refCourse
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefCourse $refCourse
     */
    public function addToRefCourse(\CdmFr\Model\V1_1_1\CdmFr\RefCourse $refCourse)
    {
        $this->refCourse[] = $refCourse;
        return $this;
    }

    /**
     * isset refCourse
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefCourse($index)
    {
        return isset($this->refCourse[$index]);
    }

    /**
     * unset refCourse
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefCourse($index)
    {
        unset($this->refCourse[$index]);
    }

    /**
     * Gets as refCourse
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefCourse[]
     */
    public function getRefCourse()
    {
        return $this->refCourse;
    }

    /**
     * Sets a new refCourse
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefCourse[] $refCourse
     * @return self
     */
    public function setRefCourse(array $refCourse)
    {
        $this->refCourse = $refCourse;
        return $this;
    }


}

