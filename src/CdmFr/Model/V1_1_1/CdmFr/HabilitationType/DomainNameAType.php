<?php

namespace CdmFr\Model\V1_1_1\CdmFr\HabilitationType;

/**
 * Class representing DomainNameAType
 */
class DomainNameAType
{

    /**
     * @property string $fixedDomain
     */
    private $fixedDomain = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $openDomain
     */
    private $openDomain = null;

    /**
     * Gets as fixedDomain
     *
     * @return string
     */
    public function getFixedDomain()
    {
        return $this->fixedDomain;
    }

    /**
     * Sets a new fixedDomain
     *
     * @param string $fixedDomain
     * @return self
     */
    public function setFixedDomain($fixedDomain)
    {
        $this->fixedDomain = $fixedDomain;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToOpenDomain(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->openDomain[] = $text;
        return $this;
    }

    /**
     * isset openDomain
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOpenDomain($index)
    {
        return isset($this->openDomain[$index]);
    }

    /**
     * unset openDomain
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOpenDomain($index)
    {
        unset($this->openDomain[$index]);
    }

    /**
     * Gets as openDomain
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getOpenDomain()
    {
        return $this->openDomain;
    }

    /**
     * Sets a new openDomain
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $openDomain
     * @return self
     */
    public function setOpenDomain(array $openDomain)
    {
        $this->openDomain = $openDomain;
        return $this;
    }


}

