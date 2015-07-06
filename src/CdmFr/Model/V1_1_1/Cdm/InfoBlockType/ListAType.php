<?php

namespace CdmFr\Model\V1_1_1\Cdm\InfoBlockType;

/**
 * Class representing ListAType
 */
class ListAType
{

    /**
     * @property string $listType
     */
    private $listType = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $listItem
     */
    private $listItem = null;

    /**
     * Gets as listType
     *
     * @return string
     */
    public function getListType()
    {
        return $this->listType;
    }

    /**
     * Sets a new listType
     *
     * @param string $listType
     * @return self
     */
    public function setListType($listType)
    {
        $this->listType = $listType;
        return $this;
    }

    /**
     * Adds as listItem
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $listItem
     */
    public function addToListItem(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $listItem)
    {
        $this->listItem[] = $listItem;
        return $this;
    }

    /**
     * isset listItem
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetListItem($index)
    {
        return isset($this->listItem[$index]);
    }

    /**
     * unset listItem
     *
     * @param scalar $index
     * @return void
     */
    public function unsetListItem($index)
    {
        unset($this->listItem[$index]);
    }

    /**
     * Gets as listItem
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getListItem()
    {
        return $this->listItem;
    }

    /**
     * Sets a new listItem
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $listItem
     * @return self
     */
    public function setListItem(array $listItem)
    {
        $this->listItem = $listItem;
        return $this;
    }


}

