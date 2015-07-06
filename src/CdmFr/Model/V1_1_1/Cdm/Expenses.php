<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing Expenses
 */
class Expenses extends InfoBlockType
{

    /**
     * @property integer $price
     */
    private $price = null;

    /**
     * @property string $currency
     */
    private $currency = null;

    /**
     * Gets as price
     *
     * @return integer
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Sets a new price
     *
     * @param integer $price
     * @return self
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * Gets as currency
     *
     * @return string
     */
    public function getCurrency()
    {
        return $this->currency;
    }

    /**
     * Sets a new currency
     *
     * @param string $currency
     * @return self
     */
    public function setCurrency($currency)
    {
        $this->currency = $currency;
        return $this;
    }


}

