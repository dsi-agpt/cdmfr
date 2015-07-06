<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing I13nProgType
 *
 * Identifier ici les établissements étrangers associés à la formation
 * habilitée. Dans la description le pays doit être renseigné
 * XSD Type: i13nProgType
 */
class I13nProgType
{

    /**
     * Précisions sur le partenaire international : nom, description ...
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType[] $i13ProgPartner
     */
    private $i13ProgPartner = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $i13ProgName
     */
    private $i13ProgName = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $i13ProgInfo
     */
    private $i13ProgInfo = null;

    /**
     * Adds as i13ProgPartner
     *
     * Précisions sur le partenaire international : nom, description ...
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType $i13ProgPartner
     */
    public function addToI13ProgPartner(\CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType $i13ProgPartner)
    {
        $this->i13ProgPartner[] = $i13ProgPartner;
        return $this;
    }

    /**
     * isset i13ProgPartner
     *
     * Précisions sur le partenaire international : nom, description ...
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetI13ProgPartner($index)
    {
        return isset($this->i13ProgPartner[$index]);
    }

    /**
     * unset i13ProgPartner
     *
     * Précisions sur le partenaire international : nom, description ...
     *
     * @param scalar $index
     * @return void
     */
    public function unsetI13ProgPartner($index)
    {
        unset($this->i13ProgPartner[$index]);
    }

    /**
     * Gets as i13ProgPartner
     *
     * Précisions sur le partenaire international : nom, description ...
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType[]
     */
    public function getI13ProgPartner()
    {
        return $this->i13ProgPartner;
    }

    /**
     * Sets a new i13ProgPartner
     *
     * Précisions sur le partenaire international : nom, description ...
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType[] $i13ProgPartner
     * @return self
     */
    public function setI13ProgPartner(array $i13ProgPartner)
    {
        $this->i13ProgPartner = $i13ProgPartner;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text
     */
    public function addToI13ProgName(\CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text)
    {
        $this->i13ProgName[] = $text;
        return $this;
    }

    /**
     * isset i13ProgName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetI13ProgName($index)
    {
        return isset($this->i13ProgName[$index]);
    }

    /**
     * unset i13ProgName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetI13ProgName($index)
    {
        unset($this->i13ProgName[$index]);
    }

    /**
     * Gets as i13ProgName
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[]
     */
    public function getI13ProgName()
    {
        return $this->i13ProgName;
    }

    /**
     * Sets a new i13ProgName
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $i13ProgName
     * @return self
     */
    public function setI13ProgName(array $i13ProgName)
    {
        $this->i13ProgName = $i13ProgName;
        return $this;
    }

    /**
     * Adds as i13ProgInfo
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $i13ProgInfo
     */
    public function addToI13ProgInfo(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $i13ProgInfo)
    {
        $this->i13ProgInfo[] = $i13ProgInfo;
        return $this;
    }

    /**
     * isset i13ProgInfo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetI13ProgInfo($index)
    {
        return isset($this->i13ProgInfo[$index]);
    }

    /**
     * unset i13ProgInfo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetI13ProgInfo($index)
    {
        unset($this->i13ProgInfo[$index]);
    }

    /**
     * Gets as i13ProgInfo
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getI13ProgInfo()
    {
        return $this->i13ProgInfo;
    }

    /**
     * Sets a new i13ProgInfo
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $i13ProgInfo
     * @return self
     */
    public function setI13ProgInfo(array $i13ProgInfo)
    {
        $this->i13ProgInfo = $i13ProgInfo;
        return $this;
    }


}

