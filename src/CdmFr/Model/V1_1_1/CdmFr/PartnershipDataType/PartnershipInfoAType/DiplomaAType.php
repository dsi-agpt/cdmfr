<?php

namespace CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType;

/**
 * Class representing DiplomaAType
 */
class DiplomaAType
{

    /**
     * @property string $agreement
     */
    private $agreement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $description
     */
    private $description = null;

    /**
     * Gets as agreement
     *
     * @return string
     */
    public function getAgreement()
    {
        return $this->agreement;
    }

    /**
     * Sets a new agreement
     *
     * @param string $agreement
     * @return self
     */
    public function setAgreement($agreement)
    {
        $this->agreement = $agreement;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToDescription(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->description[] = $text;
        return $this;
    }

    /**
     * isset description
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDescription($index)
    {
        return isset($this->description[$index]);
    }

    /**
     * unset description
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDescription($index)
    {
        unset($this->description[$index]);
    }

    /**
     * Gets as description
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets a new description
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $description
     * @return self
     */
    public function setDescription(array $description)
    {
        $this->description = $description;
        return $this;
    }


}

