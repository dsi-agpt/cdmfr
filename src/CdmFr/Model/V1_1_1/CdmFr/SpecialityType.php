<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing SpecialityType
 *
 *
 * XSD Type: specialityType
 */
class SpecialityType
{

    /**
     * Finalité de la spécialité : * Recherche * Professionnel * Recherche et
     * Professionnel
     *
     * @property string $specialityPurpose
     */
    private $specialityPurpose = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $infoBlock
     */
    private $infoBlock = null;

    /**
     * Shorthand identification of the study speciality
     *
     * @property string $specialityId
     */
    private $specialityId = null;

    /**
     * @property string $specialityNum
     */
    private $specialityNum = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $specialityName
     */
    private $specialityName = null;

    /**
     * Date d'ouverture habilitée, ou date de renouvellement habilité pour la
     * spécialité
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\TimingInfoType $specialityTimingInfo
     */
    private $specialityTimingInfo = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType[] $cohabilitation
     */
    private $cohabilitation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType[] $partnership
     */
    private $partnership = null;

    /**
     * Références vers les programmes faisant l'objet de cette habilitation. Le lien
     * se fait vers l'identifiant unique de chacun des programmes. Plusieurs liens sont
     *  possibles pour lier l'ensemble des programmes inclus dans la même habilitation
     * et décrits dans la structure
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefProgram[] $refProgram
     */
    private $refProgram = null;

    /**
     * Gets as specialityPurpose
     *
     * Finalité de la spécialité : * Recherche * Professionnel * Recherche et
     * Professionnel
     *
     * @return string
     */
    public function getSpecialityPurpose()
    {
        return $this->specialityPurpose;
    }

    /**
     * Sets a new specialityPurpose
     *
     * Finalité de la spécialité : * Recherche * Professionnel * Recherche et
     * Professionnel
     *
     * @param string $specialityPurpose
     * @return self
     */
    public function setSpecialityPurpose($specialityPurpose)
    {
        $this->specialityPurpose = $specialityPurpose;
        return $this;
    }

    /**
     * Adds as infoBlock
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $infoBlock
     */
    public function addToInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $infoBlock)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $infoBlock
     * @return self
     */
    public function setInfoBlock(array $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Gets as specialityId
     *
     * Shorthand identification of the study speciality
     *
     * @return string
     */
    public function getSpecialityId()
    {
        return $this->specialityId;
    }

    /**
     * Sets a new specialityId
     *
     * Shorthand identification of the study speciality
     *
     * @param string $specialityId
     * @return self
     */
    public function setSpecialityId($specialityId)
    {
        $this->specialityId = $specialityId;
        return $this;
    }

    /**
     * Gets as specialityNum
     *
     * @return string
     */
    public function getSpecialityNum()
    {
        return $this->specialityNum;
    }

    /**
     * Sets a new specialityNum
     *
     * @param string $specialityNum
     * @return self
     */
    public function setSpecialityNum($specialityNum)
    {
        $this->specialityNum = $specialityNum;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToSpecialityName(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->specialityName[] = $text;
        return $this;
    }

    /**
     * isset specialityName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialityName($index)
    {
        return isset($this->specialityName[$index]);
    }

    /**
     * unset specialityName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialityName($index)
    {
        unset($this->specialityName[$index]);
    }

    /**
     * Gets as specialityName
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getSpecialityName()
    {
        return $this->specialityName;
    }

    /**
     * Sets a new specialityName
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $specialityName
     * @return self
     */
    public function setSpecialityName(array $specialityName)
    {
        $this->specialityName = $specialityName;
        return $this;
    }

    /**
     * Gets as specialityTimingInfo
     *
     * Date d'ouverture habilitée, ou date de renouvellement habilité pour la
     * spécialité
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TimingInfoType
     */
    public function getSpecialityTimingInfo()
    {
        return $this->specialityTimingInfo;
    }

    /**
     * Sets a new specialityTimingInfo
     *
     * Date d'ouverture habilitée, ou date de renouvellement habilité pour la
     * spécialité
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TimingInfoType $specialityTimingInfo
     * @return self
     */
    public function setSpecialityTimingInfo(\CdmFr\Model\V1_1_1\CdmFr\TimingInfoType $specialityTimingInfo)
    {
        $this->specialityTimingInfo = $specialityTimingInfo;
        return $this;
    }

    /**
     * Adds as cohabilitation
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType $cohabilitation
     */
    public function addToCohabilitation(\CdmFr\Model\V1_1_1\CdmFr\CohabilitationType $cohabilitation)
    {
        $this->cohabilitation[] = $cohabilitation;
        return $this;
    }

    /**
     * isset cohabilitation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCohabilitation($index)
    {
        return isset($this->cohabilitation[$index]);
    }

    /**
     * unset cohabilitation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCohabilitation($index)
    {
        unset($this->cohabilitation[$index]);
    }

    /**
     * Gets as cohabilitation
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType[]
     */
    public function getCohabilitation()
    {
        return $this->cohabilitation;
    }

    /**
     * Sets a new cohabilitation
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType[] $cohabilitation
     * @return self
     */
    public function setCohabilitation(array $cohabilitation)
    {
        $this->cohabilitation = $cohabilitation;
        return $this;
    }

    /**
     * Adds as partnership
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType $partnership
     */
    public function addToPartnership(\CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType $partnership)
    {
        $this->partnership[] = $partnership;
        return $this;
    }

    /**
     * isset partnership
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPartnership($index)
    {
        return isset($this->partnership[$index]);
    }

    /**
     * unset partnership
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPartnership($index)
    {
        unset($this->partnership[$index]);
    }

    /**
     * Gets as partnership
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType[]
     */
    public function getPartnership()
    {
        return $this->partnership;
    }

    /**
     * Sets a new partnership
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType[] $partnership
     * @return self
     */
    public function setPartnership(array $partnership)
    {
        $this->partnership = $partnership;
        return $this;
    }

    /**
     * Adds as refProgram
     *
     * Références vers les programmes faisant l'objet de cette habilitation. Le lien
     * se fait vers l'identifiant unique de chacun des programmes. Plusieurs liens sont
     *  possibles pour lier l'ensemble des programmes inclus dans la même habilitation
     * et décrits dans la structure
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefProgram $refProgram
     */
    public function addToRefProgram(\CdmFr\Model\V1_1_1\CdmFr\RefProgram $refProgram)
    {
        $this->refProgram[] = $refProgram;
        return $this;
    }

    /**
     * isset refProgram
     *
     * Références vers les programmes faisant l'objet de cette habilitation. Le lien
     * se fait vers l'identifiant unique de chacun des programmes. Plusieurs liens sont
     *  possibles pour lier l'ensemble des programmes inclus dans la même habilitation
     * et décrits dans la structure
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefProgram($index)
    {
        return isset($this->refProgram[$index]);
    }

    /**
     * unset refProgram
     *
     * Références vers les programmes faisant l'objet de cette habilitation. Le lien
     * se fait vers l'identifiant unique de chacun des programmes. Plusieurs liens sont
     *  possibles pour lier l'ensemble des programmes inclus dans la même habilitation
     * et décrits dans la structure
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefProgram($index)
    {
        unset($this->refProgram[$index]);
    }

    /**
     * Gets as refProgram
     *
     * Références vers les programmes faisant l'objet de cette habilitation. Le lien
     * se fait vers l'identifiant unique de chacun des programmes. Plusieurs liens sont
     *  possibles pour lier l'ensemble des programmes inclus dans la même habilitation
     * et décrits dans la structure
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefProgram[]
     */
    public function getRefProgram()
    {
        return $this->refProgram;
    }

    /**
     * Sets a new refProgram
     *
     * Références vers les programmes faisant l'objet de cette habilitation. Le lien
     * se fait vers l'identifiant unique de chacun des programmes. Plusieurs liens sont
     *  possibles pour lier l'ensemble des programmes inclus dans la même habilitation
     * et décrits dans la structure
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefProgram[] $refProgram
     * @return self
     */
    public function setRefProgram(array $refProgram)
    {
        $this->refProgram = $refProgram;
        return $this;
    }


}

