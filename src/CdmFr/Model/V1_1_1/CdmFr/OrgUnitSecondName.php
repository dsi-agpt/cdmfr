<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing OrgUnitSecondName
 */
class OrgUnitSecondName
{

    /**
     * @property string $secondNameNature
     */
    private $secondNameNature = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $secondName
     */
    private $secondName = null;

    /**
     * Gets as secondNameNature
     *
     * @return string
     */
    public function getSecondNameNature()
    {
        return $this->secondNameNature;
    }

    /**
     * Sets a new secondNameNature
     *
     * @param string $secondNameNature
     * @return self
     */
    public function setSecondNameNature($secondNameNature)
    {
        $this->secondNameNature = $secondNameNature;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToSecondName(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->secondName[] = $text;
        return $this;
    }

    /**
     * isset secondName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSecondName($index)
    {
        return isset($this->secondName[$index]);
    }

    /**
     * unset secondName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSecondName($index)
    {
        unset($this->secondName[$index]);
    }

    /**
     * Gets as secondName
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getSecondName()
    {
        return $this->secondName;
    }

    /**
     * Sets a new secondName
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $secondName
     * @return self
     */
    public function setSecondName(array $secondName)
    {
        $this->secondName = $secondName;
        return $this;
    }


}

