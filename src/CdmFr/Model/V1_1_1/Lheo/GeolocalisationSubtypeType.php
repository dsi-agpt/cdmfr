<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing GeolocalisationSubtypeType
 *
 *
 * XSD Type: geolocalisation-subtype
 */
class GeolocalisationSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Latitude $latitude
     */
    private $latitude = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Longitude $longitude
     */
    private $longitude = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as latitude
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Latitude
     */
    public function getLatitude()
    {
        return $this->latitude;
    }

    /**
     * Sets a new latitude
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Latitude $latitude
     * @return self
     */
    public function setLatitude(\CdmFr\Model\V1_1_1\Lheo\Latitude $latitude)
    {
        $this->latitude = $latitude;
        return $this;
    }

    /**
     * Gets as longitude
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Longitude
     */
    public function getLongitude()
    {
        return $this->longitude;
    }

    /**
     * Sets a new longitude
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Longitude $longitude
     * @return self
     */
    public function setLongitude(\CdmFr\Model\V1_1_1\Lheo\Longitude $longitude)
    {
        $this->longitude = $longitude;
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

