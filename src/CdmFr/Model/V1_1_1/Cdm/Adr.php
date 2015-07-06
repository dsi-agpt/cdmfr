<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing Adr
 */
class Adr
{

    /**
     * The post office box number component of the
     *  address
     *
     * @property string $pobox
     */
    private $pobox = null;

    /**
     * Extra address space. Any non-street components
     *  of the
     *  address e.g., suite number, etc
     *
     * @property string $extadr
     */
    private $extadr = null;

    /**
     * The actual street address
     *
     * @property string $street
     */
    private $street = null;

    /**
     * The locality component of the address e.g., the
     *  City. Use
     *  attribute for County code.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\Adr\LocalityAType $locality
     */
    private $locality = null;

    /**
     * The region component of the address. State and
     *  Province
     *  are examples of Region
     *
     * @property string $region
     */
    private $region = null;

    /**
     * The postal code component of the address. This
     *  format
     *  varies from country to country.
     *
     * @property string $pcode
     */
    private $pcode = null;

    /**
     * he country component of the address. The format
     *  is based
     *  upon ISO3166.
     *
     * @property string $country
     */
    private $country = null;

    /**
     * Gets as pobox
     *
     * The post office box number component of the
     *  address
     *
     * @return string
     */
    public function getPobox()
    {
        return $this->pobox;
    }

    /**
     * Sets a new pobox
     *
     * The post office box number component of the
     *  address
     *
     * @param string $pobox
     * @return self
     */
    public function setPobox($pobox)
    {
        $this->pobox = $pobox;
        return $this;
    }

    /**
     * Gets as extadr
     *
     * Extra address space. Any non-street components
     *  of the
     *  address e.g., suite number, etc
     *
     * @return string
     */
    public function getExtadr()
    {
        return $this->extadr;
    }

    /**
     * Sets a new extadr
     *
     * Extra address space. Any non-street components
     *  of the
     *  address e.g., suite number, etc
     *
     * @param string $extadr
     * @return self
     */
    public function setExtadr($extadr)
    {
        $this->extadr = $extadr;
        return $this;
    }

    /**
     * Gets as street
     *
     * The actual street address
     *
     * @return string
     */
    public function getStreet()
    {
        return $this->street;
    }

    /**
     * Sets a new street
     *
     * The actual street address
     *
     * @param string $street
     * @return self
     */
    public function setStreet($street)
    {
        $this->street = $street;
        return $this;
    }

    /**
     * Gets as locality
     *
     * The locality component of the address e.g., the
     *  City. Use
     *  attribute for County code.
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Adr\LocalityAType
     */
    public function getLocality()
    {
        return $this->locality;
    }

    /**
     * Sets a new locality
     *
     * The locality component of the address e.g., the
     *  City. Use
     *  attribute for County code.
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Adr\LocalityAType $locality
     * @return self
     */
    public function setLocality(\CdmFr\Model\V1_1_1\Cdm\Adr\LocalityAType $locality)
    {
        $this->locality = $locality;
        return $this;
    }

    /**
     * Gets as region
     *
     * The region component of the address. State and
     *  Province
     *  are examples of Region
     *
     * @return string
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * The region component of the address. State and
     *  Province
     *  are examples of Region
     *
     * @param string $region
     * @return self
     */
    public function setRegion($region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as pcode
     *
     * The postal code component of the address. This
     *  format
     *  varies from country to country.
     *
     * @return string
     */
    public function getPcode()
    {
        return $this->pcode;
    }

    /**
     * Sets a new pcode
     *
     * The postal code component of the address. This
     *  format
     *  varies from country to country.
     *
     * @param string $pcode
     * @return self
     */
    public function setPcode($pcode)
    {
        $this->pcode = $pcode;
        return $this;
    }

    /**
     * Gets as country
     *
     * he country component of the address. The format
     *  is based
     *  upon ISO3166.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Sets a new country
     *
     * he country component of the address. The format
     *  is based
     *  upon ISO3166.
     *
     * @param string $country
     * @return self
     */
    public function setCountry($country)
    {
        $this->country = $country;
        return $this;
    }


}

