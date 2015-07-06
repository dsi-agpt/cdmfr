<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing OffresSubtypeType
 *
 *
 * XSD Type: offres-subtype
 */
class OffresSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Formation[] $formation
     */
    private $formation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Adds as formation
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Formation $formation
     */
    public function addToFormation(\CdmFr\Model\V1_1_1\Lheo\Formation $formation)
    {
        $this->formation[] = $formation;
        return $this;
    }

    /**
     * isset formation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormation($index)
    {
        return isset($this->formation[$index]);
    }

    /**
     * unset formation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormation($index)
    {
        unset($this->formation[$index]);
    }

    /**
     * Gets as formation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Formation[]
     */
    public function getFormation()
    {
        return $this->formation;
    }

    /**
     * Sets a new formation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Formation[] $formation
     * @return self
     */
    public function setFormation(array $formation)
    {
        $this->formation = $formation;
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

