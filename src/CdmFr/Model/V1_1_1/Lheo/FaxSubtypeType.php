<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing FaxSubtypeType
 *
 *
 * XSD Type: fax-subtype
 */
class FaxSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Numtel[] $numtel
     */
    private $numtel = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Adds as numtel
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Numtel $numtel
     */
    public function addToNumtel(\CdmFr\Model\V1_1_1\Lheo\Numtel $numtel)
    {
        $this->numtel[] = $numtel;
        return $this;
    }

    /**
     * isset numtel
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetNumtel($index)
    {
        return isset($this->numtel[$index]);
    }

    /**
     * unset numtel
     *
     * @param scalar $index
     * @return void
     */
    public function unsetNumtel($index)
    {
        unset($this->numtel[$index]);
    }

    /**
     * Gets as numtel
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Numtel[]
     */
    public function getNumtel()
    {
        return $this->numtel;
    }

    /**
     * Sets a new numtel
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Numtel[] $numtel
     * @return self
     */
    public function setNumtel(array $numtel)
    {
        $this->numtel = $numtel;
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

