<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing StudentPlaces
 */
class StudentPlaces extends InfoBlockType
{

    /**
     * @property integer $places
     */
    private $places = null;

    /**
     * Gets as places
     *
     * @return integer
     */
    public function getPlaces()
    {
        return $this->places;
    }

    /**
     * Sets a new places
     *
     * @param integer $places
     * @return self
     */
    public function setPlaces($places)
    {
        $this->places = $places;
        return $this;
    }


}

