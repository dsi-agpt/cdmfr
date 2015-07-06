<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing PpalTeachingLanguage
 */
class PpalTeachingLanguage extends TextType
{

    /**
     * @property string $teachingLang
     */
    private $teachingLang = null;

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


}

