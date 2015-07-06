<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing SessionSubtypeType
 *
 *
 * XSD Type: session-subtype
 */
class SessionSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Periode $periode
     */
    private $periode = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as periode
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Periode
     */
    public function getPeriode()
    {
        return $this->periode;
    }

    /**
     * Sets a new periode
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Periode $periode
     * @return self
     */
    public function setPeriode(\CdmFr\Model\V1_1_1\Lheo\Periode $periode)
    {
        $this->periode = $periode;
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

