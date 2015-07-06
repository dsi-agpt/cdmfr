<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing CourseDescriptionType
 *
 * .
 * XSD Type: courseDescriptionType
 */
class CourseDescriptionType
{

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\DigitalUseAType $digitalUse
     */
    private $digitalUse = null;

    /**
     * @property string $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\CourseContentsECAType
     * $courseContentsEC
     */
    private $courseContentsEC = null;

    /**
     * Gets as digitalUse
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\DigitalUseAType
     */
    public function getDigitalUse()
    {
        return $this->digitalUse;
    }

    /**
     * Sets a new digitalUse
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\DigitalUseAType $digitalUse
     * @return self
     */
    public function setDigitalUse(\CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\DigitalUseAType $digitalUse)
    {
        $this->digitalUse = $digitalUse;
        return $this;
    }

    /**
     * Gets as infoBlock
     *
     * @return string
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param string $infoBlock
     * @return self
     */
    public function setInfoBlock($infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Gets as courseContentsEC
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\CourseContentsECAType
     */
    public function getCourseContentsEC()
    {
        return $this->courseContentsEC;
    }

    /**
     * Sets a new courseContentsEC
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\CourseContentsECAType
     * $courseContentsEC
     * @return self
     */
    public function setCourseContentsEC(\CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\CourseContentsECAType $courseContentsEC)
    {
        $this->courseContentsEC = $courseContentsEC;
        return $this;
    }


}

