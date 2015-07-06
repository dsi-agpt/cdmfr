<?php

namespace CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType;

/**
 * Class representing CountryAType
 */
class CountryAType
{

    /**
     * @property string $countryCode
     */
    private $countryCode = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $alternative
     */
    private $alternative = null;

    /**
     * @property string $countryName
     */
    private $countryName = null;

    /**
     * Gets as countryCode
     *
     * @return string
     */
    public function getCountryCode()
    {
        return $this->countryCode;
    }

    /**
     * Sets a new countryCode
     *
     * @param string $countryCode
     * @return self
     */
    public function setCountryCode($countryCode)
    {
        $this->countryCode = $countryCode;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToAlternative(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->alternative[] = $text;
        return $this;
    }

    /**
     * isset alternative
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAlternative($index)
    {
        return isset($this->alternative[$index]);
    }

    /**
     * unset alternative
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAlternative($index)
    {
        unset($this->alternative[$index]);
    }

    /**
     * Gets as alternative
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getAlternative()
    {
        return $this->alternative;
    }

    /**
     * Sets a new alternative
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $alternative
     * @return self
     */
    public function setAlternative(array $alternative)
    {
        $this->alternative = $alternative;
        return $this;
    }

    /**
     * Gets as countryName
     *
     * @return string
     */
    public function getCountryName()
    {
        return $this->countryName;
    }

    /**
     * Sets a new countryName
     *
     * @param string $countryName
     * @return self
     */
    public function setCountryName($countryName)
    {
        $this->countryName = $countryName;
        return $this;
    }


}

