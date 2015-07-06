<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing PeriodeSubtypeType
 *
 *
 * XSD Type: periode-subtype
 */
class PeriodeSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Debut $debut
     */
    private $debut = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Fin $fin
     */
    private $fin = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as debut
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Debut
     */
    public function getDebut()
    {
        return $this->debut;
    }

    /**
     * Sets a new debut
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Debut $debut
     * @return self
     */
    public function setDebut(\CdmFr\Model\V1_1_1\Lheo\Debut $debut)
    {
        $this->debut = $debut;
        return $this;
    }

    /**
     * Gets as fin
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Fin
     */
    public function getFin()
    {
        return $this->fin;
    }

    /**
     * Sets a new fin
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Fin $fin
     * @return self
     */
    public function setFin(\CdmFr\Model\V1_1_1\Lheo\Fin $fin)
    {
        $this->fin = $fin;
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

