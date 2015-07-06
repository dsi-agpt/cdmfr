<?php

namespace CdmFr\Model\V1_1_1\CdmFr\Affiliation;

/**
 * Class representing PublicationsAType
 */
class PublicationsAType
{

    /**
     * @property string $href
     */
    private $href = null;

    /**
     * Gets as href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Sets a new href
     *
     * @param string $href
     * @return self
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }


}

