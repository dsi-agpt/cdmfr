<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing LheoSubtypeType
 *
 *
 * XSD Type: lheo-subtype
 */
class LheoSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Offres $offres
     */
    private $offres = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as offres
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Offres
     */
    public function getOffres()
    {
        return $this->offres;
    }

    /**
     * Sets a new offres
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Offres $offres
     * @return self
     */
    public function setOffres(\CdmFr\Model\V1_1_1\Lheo\Offres $offres)
    {
        $this->offres = $offres;
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

