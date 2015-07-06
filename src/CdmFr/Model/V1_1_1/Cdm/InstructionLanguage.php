<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing InstructionLanguage
 */
class InstructionLanguage extends InfoBlockType
{

    /**
     * @property string $teachingLang
     */
    private $teachingLang = null;

    /**
     * @property integer $percentage
     */
    private $percentage = null;

    /**
     * Gets as teachingLang
     *
     * @return string
     */
    public function getTeachingLang()
    {
        return $this->teachingLang;
    }

    /**
     * Sets a new teachingLang
     *
     * @param string $teachingLang
     * @return self
     */
    public function setTeachingLang($teachingLang)
    {
        $this->teachingLang = $teachingLang;
        return $this;
    }

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


}

