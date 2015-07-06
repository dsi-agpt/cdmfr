<?php

namespace CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType\DigitalUseAType;

/**
 * Class representing ProdPedaAType
 */
class ProdPedaAType
{

    /**
     * @property integer $digitProdPercentage
     */
    private $digitProdPercentage = null;

    /**
     * @property integer $digitProdUNTPercentage
     */
    private $digitProdUNTPercentage = null;

    /**
     * Gets as digitProdPercentage
     *
     * @return integer
     */
    public function getDigitProdPercentage()
    {
        return $this->digitProdPercentage;
    }

    /**
     * Sets a new digitProdPercentage
     *
     * @param integer $digitProdPercentage
     * @return self
     */
    public function setDigitProdPercentage($digitProdPercentage)
    {
        $this->digitProdPercentage = $digitProdPercentage;
        return $this;
    }

    /**
     * Gets as digitProdUNTPercentage
     *
     * @return integer
     */
    public function getDigitProdUNTPercentage()
    {
        return $this->digitProdUNTPercentage;
    }

    /**
     * Sets a new digitProdUNTPercentage
     *
     * @param integer $digitProdUNTPercentage
     * @return self
     */
    public function setDigitProdUNTPercentage($digitProdUNTPercentage)
    {
        $this->digitProdUNTPercentage = $digitProdUNTPercentage;
        return $this;
    }


}

