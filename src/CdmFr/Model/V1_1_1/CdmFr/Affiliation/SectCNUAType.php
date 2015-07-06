<?php

namespace CdmFr\Model\V1_1_1\CdmFr\Affiliation;

/**
 * Class representing SectCNUAType
 */
class SectCNUAType
{

    /**
     * @property string $sectionCNUCodeValue
     */
    private $sectionCNUCodeValue = null;

    /**
     * @property string[] $sectionCNULibelValue
     */
    private $sectionCNULibelValue = null;

    /**
     * Gets as sectionCNUCodeValue
     *
     * @return string
     */
    public function getSectionCNUCodeValue()
    {
        return $this->sectionCNUCodeValue;
    }

    /**
     * Sets a new sectionCNUCodeValue
     *
     * @param string $sectionCNUCodeValue
     * @return self
     */
    public function setSectionCNUCodeValue($sectionCNUCodeValue)
    {
        $this->sectionCNUCodeValue = $sectionCNUCodeValue;
        return $this;
    }

    /**
     * Adds as sectionCNULibelValue
     *
     * @return self
     * @param string $sectionCNULibelValue
     */
    public function addToSectionCNULibelValue($sectionCNULibelValue)
    {
        $this->sectionCNULibelValue[] = $sectionCNULibelValue;
        return $this;
    }

    /**
     * isset sectionCNULibelValue
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSectionCNULibelValue($index)
    {
        return isset($this->sectionCNULibelValue[$index]);
    }

    /**
     * unset sectionCNULibelValue
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSectionCNULibelValue($index)
    {
        unset($this->sectionCNULibelValue[$index]);
    }

    /**
     * Gets as sectionCNULibelValue
     *
     * @return string[]
     */
    public function getSectionCNULibelValue()
    {
        return $this->sectionCNULibelValue;
    }

    /**
     * Sets a new sectionCNULibelValue
     *
     * @param string $sectionCNULibelValue
     * @return self
     */
    public function setSectionCNULibelValue(array $sectionCNULibelValue)
    {
        $this->sectionCNULibelValue = $sectionCNULibelValue;
        return $this;
    }


}

