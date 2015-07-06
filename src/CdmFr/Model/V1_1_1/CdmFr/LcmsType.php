<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing LcmsType
 *
 *
 * XSD Type: lcmsType
 */
class LcmsType
{

    /**
     * @property boolean $exists
     */
    private $exists = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $resourceManagement
     */
    private $resourceManagement = null;

    /**
     * @property integer $percentageOfUse
     */
    private $percentageOfUse = null;

    /**
     * Gets as exists
     *
     * @return boolean
     */
    public function getExists()
    {
        return $this->exists;
    }

    /**
     * Sets a new exists
     *
     * @param boolean $exists
     * @return self
     */
    public function setExists($exists)
    {
        $this->exists = $exists;
        return $this;
    }

    /**
     * Gets as resourceManagement
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getResourceManagement()
    {
        return $this->resourceManagement;
    }

    /**
     * Sets a new resourceManagement
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $resourceManagement
     * @return self
     */
    public function setResourceManagement(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $resourceManagement)
    {
        $this->resourceManagement = $resourceManagement;
        return $this;
    }

    /**
     * Gets as percentageOfUse
     *
     * @return integer
     */
    public function getPercentageOfUse()
    {
        return $this->percentageOfUse;
    }

    /**
     * Sets a new percentageOfUse
     *
     * @param integer $percentageOfUse
     * @return self
     */
    public function setPercentageOfUse($percentageOfUse)
    {
        $this->percentageOfUse = $percentageOfUse;
        return $this;
    }


}

