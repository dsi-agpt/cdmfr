<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing WebSubtypeType
 *
 *
 * XSD Type: web-subtype
 */
class WebSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Urlweb[] $urlweb
     */
    private $urlweb = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Adds as urlweb
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Urlweb $urlweb
     */
    public function addToUrlweb(\CdmFr\Model\V1_1_1\Lheo\Urlweb $urlweb)
    {
        $this->urlweb[] = $urlweb;
        return $this;
    }

    /**
     * isset urlweb
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUrlweb($index)
    {
        return isset($this->urlweb[$index]);
    }

    /**
     * unset urlweb
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUrlweb($index)
    {
        unset($this->urlweb[$index]);
    }

    /**
     * Gets as urlweb
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Urlweb[]
     */
    public function getUrlweb()
    {
        return $this->urlweb;
    }

    /**
     * Sets a new urlweb
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Urlweb[] $urlweb
     * @return self
     */
    public function setUrlweb(array $urlweb)
    {
        $this->urlweb = $urlweb;
        return $this;
    }

    /**
     * Adds as extras
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Extras $extras
     */
    public function addToExtras(\CdmFr\Model\V1_1_1\Lheo\Extras $extras)
    {
        $this->extras[] = $extras;
        return $this;
    }

    /**
     * isset extras
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtras($index)
    {
        return isset($this->extras[$index]);
    }

    /**
     * unset extras
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtras($index)
    {
        unset($this->extras[$index]);
    }

    /**
     * Gets as extras
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Extras[]
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Sets a new extras
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     * @return self
     */
    public function setExtras(array $extras)
    {
        $this->extras = $extras;
        return $this;
    }


}

