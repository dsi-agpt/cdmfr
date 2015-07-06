<?php

namespace CdmFr\Model\V1_1_1\CdmFr\ProgramDescription;

/**
 * Class representing IndicatorsAType
 */
class IndicatorsAType
{

    /**
     * @property string $indicator
     */
    private $indicator = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock[] $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\WebLink[] $webLink
     */
    private $webLink = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $actions
     */
    private $actions = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $prospective
     */
    private $prospective = null;

    /**
     * @property
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType\FieldManagementAType[]
     * $fieldManagement
     */
    private $fieldManagement = null;

    /**
     * Gets as indicator
     *
     * @return string
     */
    public function getIndicator()
    {
        return $this->indicator;
    }

    /**
     * Sets a new indicator
     *
     * @param string $indicator
     * @return self
     */
    public function setIndicator($indicator)
    {
        $this->indicator = $indicator;
        return $this;
    }

    /**
     * Adds as infoBlock
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    public function addToInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
    {
        $this->infoBlock[] = $infoBlock;
        return $this;
    }

    /**
     * isset infoBlock
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInfoBlock($index)
    {
        return isset($this->infoBlock[$index]);
    }

    /**
     * unset infoBlock
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInfoBlock($index)
    {
        unset($this->infoBlock[$index]);
    }

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock[]
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock[] $infoBlock
     * @return self
     */
    public function setInfoBlock(array $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Adds as webLink
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\WebLink $webLink
     */
    public function addToWebLink(\CdmFr\Model\V1_1_1\CdmFr\WebLink $webLink)
    {
        $this->webLink[] = $webLink;
        return $this;
    }

    /**
     * isset webLink
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWebLink($index)
    {
        return isset($this->webLink[$index]);
    }

    /**
     * unset webLink
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWebLink($index)
    {
        unset($this->webLink[$index]);
    }

    /**
     * Gets as webLink
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\WebLink[]
     */
    public function getWebLink()
    {
        return $this->webLink;
    }

    /**
     * Sets a new webLink
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\WebLink[] $webLink
     * @return self
     */
    public function setWebLink(array $webLink)
    {
        $this->webLink = $webLink;
        return $this;
    }

    /**
     * Adds as actions
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $actions
     */
    public function addToActions(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $actions)
    {
        $this->actions[] = $actions;
        return $this;
    }

    /**
     * isset actions
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetActions($index)
    {
        return isset($this->actions[$index]);
    }

    /**
     * unset actions
     *
     * @param scalar $index
     * @return void
     */
    public function unsetActions($index)
    {
        unset($this->actions[$index]);
    }

    /**
     * Gets as actions
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getActions()
    {
        return $this->actions;
    }

    /**
     * Sets a new actions
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $actions
     * @return self
     */
    public function setActions(array $actions)
    {
        $this->actions = $actions;
        return $this;
    }

    /**
     * Adds as prospective
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $prospective
     */
    public function addToProspective(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $prospective)
    {
        $this->prospective[] = $prospective;
        return $this;
    }

    /**
     * isset prospective
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProspective($index)
    {
        return isset($this->prospective[$index]);
    }

    /**
     * unset prospective
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProspective($index)
    {
        unset($this->prospective[$index]);
    }

    /**
     * Gets as prospective
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getProspective()
    {
        return $this->prospective;
    }

    /**
     * Sets a new prospective
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $prospective
     * @return self
     */
    public function setProspective(array $prospective)
    {
        $this->prospective = $prospective;
        return $this;
    }

    /**
     * Adds as fieldManagement
     *
     * @return self
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType\FieldManagementAType
     * $fieldManagement
     */
    public function addToFieldManagement(\CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType\FieldManagementAType $fieldManagement)
    {
        $this->fieldManagement[] = $fieldManagement;
        return $this;
    }

    /**
     * isset fieldManagement
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFieldManagement($index)
    {
        return isset($this->fieldManagement[$index]);
    }

    /**
     * unset fieldManagement
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFieldManagement($index)
    {
        unset($this->fieldManagement[$index]);
    }

    /**
     * Gets as fieldManagement
     *
     * @return
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType\FieldManagementAType[]
     */
    public function getFieldManagement()
    {
        return $this->fieldManagement;
    }

    /**
     * Sets a new fieldManagement
     *
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType\FieldManagementAType[]
     * $fieldManagement
     * @return self
     */
    public function setFieldManagement(array $fieldManagement)
    {
        $this->fieldManagement = $fieldManagement;
        return $this;
    }


}

