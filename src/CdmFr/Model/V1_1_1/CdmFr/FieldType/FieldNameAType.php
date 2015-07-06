<?php

namespace CdmFr\Model\V1_1_1\CdmFr\FieldType;

/**
 * Class representing FieldNameAType
 */
class FieldNameAType
{

    /**
     * Nom de la mention habilitée : ouvert
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $free
     */
    private $free = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\FieldType\FieldNameAType\ControlledAType
     * $controlled
     */
    private $controlled = null;

    /**
     * Adds as text
     *
     * Nom de la mention habilitée : ouvert
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToFree(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->free[] = $text;
        return $this;
    }

    /**
     * isset free
     *
     * Nom de la mention habilitée : ouvert
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFree($index)
    {
        return isset($this->free[$index]);
    }

    /**
     * unset free
     *
     * Nom de la mention habilitée : ouvert
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFree($index)
    {
        unset($this->free[$index]);
    }

    /**
     * Gets as free
     *
     * Nom de la mention habilitée : ouvert
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getFree()
    {
        return $this->free;
    }

    /**
     * Sets a new free
     *
     * Nom de la mention habilitée : ouvert
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $free
     * @return self
     */
    public function setFree(array $free)
    {
        $this->free = $free;
        return $this;
    }

    /**
     * Gets as controlled
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\FieldType\FieldNameAType\ControlledAType
     */
    public function getControlled()
    {
        return $this->controlled;
    }

    /**
     * Sets a new controlled
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\FieldType\FieldNameAType\ControlledAType $controlled
     * @return self
     */
    public function setControlled(\CdmFr\Model\V1_1_1\CdmFr\FieldType\FieldNameAType\ControlledAType $controlled)
    {
        $this->controlled = $controlled;
        return $this;
    }


}

