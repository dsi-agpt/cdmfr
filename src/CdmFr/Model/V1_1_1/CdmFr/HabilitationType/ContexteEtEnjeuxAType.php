<?php

namespace CdmFr\Model\V1_1_1\CdmFr\HabilitationType;

/**
 * Class representing ContexteEtEnjeuxAType
 */
class ContexteEtEnjeuxAType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $contexteEtEnjeuxInfo
     */
    private $contexteEtEnjeuxInfo = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\WebLink $webLink
     */
    private $webLink = null;

    /**
     * Gets as contexteEtEnjeuxInfo
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getContexteEtEnjeuxInfo()
    {
        return $this->contexteEtEnjeuxInfo;
    }

    /**
     * Sets a new contexteEtEnjeuxInfo
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $contexteEtEnjeuxInfo
     * @return self
     */
    public function setContexteEtEnjeuxInfo(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $contexteEtEnjeuxInfo)
    {
        $this->contexteEtEnjeuxInfo = $contexteEtEnjeuxInfo;
        return $this;
    }

    /**
     * Gets as webLink
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\WebLink
     */
    public function getWebLink()
    {
        return $this->webLink;
    }

    /**
     * Sets a new webLink
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\WebLink $webLink
     * @return self
     */
    public function setWebLink(\CdmFr\Model\V1_1_1\CdmFr\WebLink $webLink)
    {
        $this->webLink = $webLink;
        return $this;
    }


}

