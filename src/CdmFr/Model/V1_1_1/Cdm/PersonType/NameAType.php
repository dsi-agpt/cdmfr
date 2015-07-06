<?php

namespace CdmFr\Model\V1_1_1\Cdm\PersonType;

/**
 * Class representing NameAType
 */
class NameAType
{

    /**
     * Given name
     *
     * @property string $given
     */
    private $given = null;

    /**
     * Family name
     *
     * @property string $family
     */
    private $family = null;

    /**
     * Gets as given
     *
     * Given name
     *
     * @return string
     */
    public function getGiven()
    {
        return $this->given;
    }

    /**
     * Sets a new given
     *
     * Given name
     *
     * @param string $given
     * @return self
     */
    public function setGiven($given)
    {
        $this->given = $given;
        return $this;
    }

    /**
     * Gets as family
     *
     * Family name
     *
     * @return string
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Sets a new family
     *
     * Family name
     *
     * @param string $family
     * @return self
     */
    public function setFamily($family)
    {
        $this->family = $family;
        return $this;
    }


}

