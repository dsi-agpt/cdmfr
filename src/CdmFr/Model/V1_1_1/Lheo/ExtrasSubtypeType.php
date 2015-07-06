<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing ExtrasSubtypeType
 *
 *
 * XSD Type: extras-subtype
 */
class ExtrasSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extra[] $extra
     */
    private $extra = null;

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

    /**
     * Adds as extra
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Extra $extra
     */
    public function addToExtra(\CdmFr\Model\V1_1_1\Lheo\Extra $extra)
    {
        $this->extra[] = $extra;
        return $this;
    }

    /**
     * isset extra
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtra($index)
    {
        return isset($this->extra[$index]);
    }

    /**
     * unset extra
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtra($index)
    {
        unset($this->extra[$index]);
    }

    /**
     * Gets as extra
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Extra[]
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * Sets a new extra
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Extra[] $extra
     * @return self
     */
    public function setExtra(array $extra)
    {
        $this->extra = $extra;
        return $this;
    }


}

