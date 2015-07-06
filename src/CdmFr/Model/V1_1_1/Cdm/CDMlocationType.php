<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing CDMlocationType
 *
 * Location given by room and/or building and/or text
 * XSD Type: CDMlocation
 */
class CDMlocationType
{

    /**
     * @property string $room
     */
    private $room = null;

    /**
     * @property string $building
     */
    private $building = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Adr $adr
     */
    private $adr = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * Gets as room
     *
     * @return string
     */
    public function getRoom()
    {
        return $this->room;
    }

    /**
     * Sets a new room
     *
     * @param string $room
     * @return self
     */
    public function setRoom($room)
    {
        $this->room = $room;
        return $this;
    }

    /**
     * Gets as building
     *
     * @return string
     */
    public function getBuilding()
    {
        return $this->building;
    }

    /**
     * Sets a new building
     *
     * @param string $building
     * @return self
     */
    public function setBuilding($building)
    {
        $this->building = $building;
        return $this;
    }

    /**
     * Gets as adr
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Adr
     */
    public function getAdr()
    {
        return $this->adr;
    }

    /**
     * Sets a new adr
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Adr $adr
     * @return self
     */
    public function setAdr(\CdmFr\Model\V1_1_1\Cdm\Adr $adr)
    {
        $this->adr = $adr;
        return $this;
    }

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


}

