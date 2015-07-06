<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing AdmDescType
 *
 *
 * XSD Type: admDescType
 */
class AdmDescType
{

    /**
     * @property string $equiv
     */
    private $equiv = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $infoBlock
     */
    private $infoBlock = null;

    /**
     * Gets as equiv
     *
     * @return string
     */
    public function getEquiv()
    {
        return $this->equiv;
    }

    /**
     * Sets a new equiv
     *
     * @param string $equiv
     * @return self
     */
    public function setEquiv($equiv)
    {
        $this->equiv = $equiv;
        return $this;
    }

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }


}

