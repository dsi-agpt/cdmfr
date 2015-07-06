<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing OrgUnitAip
 */
class OrgUnitAip
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $alumni
     */
    private $alumni = null;

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Gets as alumni
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getAlumni()
    {
        return $this->alumni;
    }

    /**
     * Sets a new alumni
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $alumni
     * @return self
     */
    public function setAlumni(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $alumni)
    {
        $this->alumni = $alumni;
        return $this;
    }


}

