<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing DateInscriptionSubtypeType
 *
 *
 * XSD Type: date-inscription-subtype
 */
class DateInscriptionSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Date $date
     */
    private $date = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as date
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets a new date
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Date $date
     * @return self
     */
    public function setDate(\CdmFr\Model\V1_1_1\Lheo\Date $date)
    {
        $this->date = $date;
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

