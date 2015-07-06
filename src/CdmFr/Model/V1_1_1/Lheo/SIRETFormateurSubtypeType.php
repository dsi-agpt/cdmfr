<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing SIRETFormateurSubtypeType
 *
 *
 * XSD Type: SIRET-formateur-subtype
 */
class SIRETFormateurSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\SIRET $sIRET
     */
    private $sIRET = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as sIRET
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\SIRET
     */
    public function getSIRET()
    {
        return $this->sIRET;
    }

    /**
     * Sets a new sIRET
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\SIRET $sIRET
     * @return self
     */
    public function setSIRET(\CdmFr\Model\V1_1_1\Lheo\SIRET $sIRET)
    {
        $this->sIRET = $sIRET;
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

