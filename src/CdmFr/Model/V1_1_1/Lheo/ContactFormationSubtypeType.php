<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing ContactFormationSubtypeType
 *
 *
 * XSD Type: contact-formation-subtype
 */
class ContactFormationSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Coordonnees $coordonnees
     */
    private $coordonnees = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as coordonnees
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Coordonnees
     */
    public function getCoordonnees()
    {
        return $this->coordonnees;
    }

    /**
     * Sets a new coordonnees
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Coordonnees $coordonnees
     * @return self
     */
    public function setCoordonnees(\CdmFr\Model\V1_1_1\Lheo\Coordonnees $coordonnees)
    {
        $this->coordonnees = $coordonnees;
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

