<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing AdresseInscriptionSubtypeType
 *
 *
 * XSD Type: adresse-inscription-subtype
 */
class AdresseInscriptionSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Adresse $adresse
     */
    private $adresse = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as adresse
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets a new adresse
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Adresse $adresse
     * @return self
     */
    public function setAdresse(\CdmFr\Model\V1_1_1\Lheo\Adresse $adresse)
    {
        $this->adresse = $adresse;
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

