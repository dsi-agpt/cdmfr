<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing FormOfTeaching
 */
class FormOfTeaching extends InfoBlockType
{

    /**
     * @property string $org
     */
    private $org = null;

    /**
     * @property string $method
     */
    private $method = null;

    /**
     * @property integer $itpercentage
     */
    private $itpercentage = null;

    /**
     * Gets as org
     *
     * @return string
     */
    public function getOrg()
    {
        return $this->org;
    }

    /**
     * Sets a new org
     *
     * @param string $org
     * @return self
     */
    public function setOrg($org)
    {
        $this->org = $org;
        return $this;
    }

    /**
     * Gets as method
     *
     * @return string
     */
    public function getMethod()
    {
        return $this->method;
    }

    /**
     * Sets a new method
     *
     * @param string $method
     * @return self
     */
    public function setMethod($method)
    {
        $this->method = $method;
        return $this;
    }

    /**
     * Gets as itpercentage
     *
     * @return integer
     */
    public function getItpercentage()
    {
        return $this->itpercentage;
    }

    /**
     * Sets a new itpercentage
     *
     * @param integer $itpercentage
     * @return self
     */
    public function setItpercentage($itpercentage)
    {
        $this->itpercentage = $itpercentage;
        return $this;
    }


}

