<?php

namespace CdmFr\Model\V1_1_1\CdmFr\Profession;

use CdmFr\Model\V1_1_1\CdmFr\TextType;

/**
 * Class representing RomeDataAType
 */
class RomeDataAType extends TextType
{

    /**
     * @property string $romeCode
     */
    private $romeCode = null;

    /**
     * @property string $romeLibel
     */
    private $romeLibel = null;

    /**
     * @property string $sspCode
     */
    private $sspCode = null;

    /**
     * Gets as romeCode
     *
     * @return string
     */
    public function getRomeCode()
    {
        return $this->romeCode;
    }

    /**
     * Sets a new romeCode
     *
     * @param string $romeCode
     * @return self
     */
    public function setRomeCode($romeCode)
    {
        $this->romeCode = $romeCode;
        return $this;
    }

    /**
     * Gets as romeLibel
     *
     * @return string
     */
    public function getRomeLibel()
    {
        return $this->romeLibel;
    }

    /**
     * Sets a new romeLibel
     *
     * @param string $romeLibel
     * @return self
     */
    public function setRomeLibel($romeLibel)
    {
        $this->romeLibel = $romeLibel;
        return $this;
    }

    /**
     * Gets as sspCode
     *
     * @return string
     */
    public function getSspCode()
    {
        return $this->sspCode;
    }

    /**
     * Sets a new sspCode
     *
     * @param string $sspCode
     * @return self
     */
    public function setSspCode($sspCode)
    {
        $this->sspCode = $sspCode;
        return $this;
    }


}

