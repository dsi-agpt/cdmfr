<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing TextType
 *
 * Text
 *  expressed in one or more languages
 * XSD Type: textType
 */
class TextType
{

    /**
     * The information of this text expressed in a given
     *  languages
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $text
     */
    private $text = null;

    /**
     * Adds as text
     *
     * The information of this text expressed in a given
     *  languages
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text
     */
    public function addToText(\CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text)
    {
        $this->text[] = $text;
        return $this;
    }

    /**
     * isset text
     *
     * The information of this text expressed in a given
     *  languages
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetText($index)
    {
        return isset($this->text[$index]);
    }

    /**
     * unset text
     *
     * The information of this text expressed in a given
     *  languages
     *
     * @param scalar $index
     * @return void
     */
    public function unsetText($index)
    {
        unset($this->text[$index]);
    }

    /**
     * Gets as text
     *
     * The information of this text expressed in a given
     *  languages
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[]
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * Sets a new text
     *
     * The information of this text expressed in a given
     *  languages
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $text
     * @return self
     */
    public function setText(array $text)
    {
        $this->text = $text;
        return $this;
    }


}

