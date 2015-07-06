<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing ProgramDescription
 */
class ProgramDescription
{

    /**
     * @property string $nature
     */
    private $nature = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock[] $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType[] $indicators
     */
    private $indicators = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\LifelongLearningAType[]
     * $lifelongLearning
     */
    private $lifelongLearning = null;

    /**
     * @property
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType\RelatedOrgUnitAType[]
     * $researchLink
     */
    private $researchLink = null;

    /**
     * Précisions sur les volumes d'enseignement suivis par l'étudiant par type
     * d'enseignement précisé dans l'attribut (TP, TD, CM, …). Il peut y avoir des
     *  variations d'horaires en fonction des UE optionnelles choisies dans un parcours
     * ou un semestre donné, les valeurs minimale et maximales pour le parcours ou le
     * semestre
     *  concerné sont fournies et caractérisées avec l'attribut minMax
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\GlobalVolumeType[] $globalVolume
     */
    private $globalVolume = null;

    /**
     * Gets as nature
     *
     * @return string
     */
    public function getNature()
    {
        return $this->nature;
    }

    /**
     * Sets a new nature
     *
     * @param string $nature
     * @return self
     */
    public function setNature($nature)
    {
        $this->nature = $nature;
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
     * Adds as indicators
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType $indicators
     */
    public function addToIndicators(\CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType $indicators)
    {
        $this->indicators[] = $indicators;
        return $this;
    }

    /**
     * isset indicators
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetIndicators($index)
    {
        return isset($this->indicators[$index]);
    }

    /**
     * unset indicators
     *
     * @param scalar $index
     * @return void
     */
    public function unsetIndicators($index)
    {
        unset($this->indicators[$index]);
    }

    /**
     * Gets as indicators
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType[]
     */
    public function getIndicators()
    {
        return $this->indicators;
    }

    /**
     * Sets a new indicators
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType[] $indicators
     * @return self
     */
    public function setIndicators(array $indicators)
    {
        $this->indicators = $indicators;
        return $this;
    }

    /**
     * Adds as lifelongLearning
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\LifelongLearningAType
     * $lifelongLearning
     */
    public function addToLifelongLearning(\CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\LifelongLearningAType $lifelongLearning)
    {
        $this->lifelongLearning[] = $lifelongLearning;
        return $this;
    }

    /**
     * isset lifelongLearning
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLifelongLearning($index)
    {
        return isset($this->lifelongLearning[$index]);
    }

    /**
     * unset lifelongLearning
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLifelongLearning($index)
    {
        unset($this->lifelongLearning[$index]);
    }

    /**
     * Gets as lifelongLearning
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\LifelongLearningAType[]
     */
    public function getLifelongLearning()
    {
        return $this->lifelongLearning;
    }

    /**
     * Sets a new lifelongLearning
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\LifelongLearningAType[]
     * $lifelongLearning
     * @return self
     */
    public function setLifelongLearning(array $lifelongLearning)
    {
        $this->lifelongLearning = $lifelongLearning;
        return $this;
    }

    /**
     * Adds as relatedOrgUnit
     *
     * @return self
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType\RelatedOrgUnitAType
     * $relatedOrgUnit
     */
    public function addToResearchLink(\CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType\RelatedOrgUnitAType $relatedOrgUnit)
    {
        $this->researchLink[] = $relatedOrgUnit;
        return $this;
    }

    /**
     * isset researchLink
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResearchLink($index)
    {
        return isset($this->researchLink[$index]);
    }

    /**
     * unset researchLink
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResearchLink($index)
    {
        unset($this->researchLink[$index]);
    }

    /**
     * Gets as researchLink
     *
     * @return
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType\RelatedOrgUnitAType[]
     */
    public function getResearchLink()
    {
        return $this->researchLink;
    }

    /**
     * Sets a new researchLink
     *
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\ResearchLinkAType\RelatedOrgUnitAType[]
     * $researchLink
     * @return self
     */
    public function setResearchLink(array $researchLink)
    {
        $this->researchLink = $researchLink;
        return $this;
    }

    /**
     * Adds as globalVolume
     *
     * Précisions sur les volumes d'enseignement suivis par l'étudiant par type
     * d'enseignement précisé dans l'attribut (TP, TD, CM, …). Il peut y avoir des
     *  variations d'horaires en fonction des UE optionnelles choisies dans un parcours
     * ou un semestre donné, les valeurs minimale et maximales pour le parcours ou le
     * semestre
     *  concerné sont fournies et caractérisées avec l'attribut minMax
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\GlobalVolumeType $globalVolume
     */
    public function addToGlobalVolume(\CdmFr\Model\V1_1_1\CdmFr\GlobalVolumeType $globalVolume)
    {
        $this->globalVolume[] = $globalVolume;
        return $this;
    }

    /**
     * isset globalVolume
     *
     * Précisions sur les volumes d'enseignement suivis par l'étudiant par type
     * d'enseignement précisé dans l'attribut (TP, TD, CM, …). Il peut y avoir des
     *  variations d'horaires en fonction des UE optionnelles choisies dans un parcours
     * ou un semestre donné, les valeurs minimale et maximales pour le parcours ou le
     * semestre
     *  concerné sont fournies et caractérisées avec l'attribut minMax
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetGlobalVolume($index)
    {
        return isset($this->globalVolume[$index]);
    }

    /**
     * unset globalVolume
     *
     * Précisions sur les volumes d'enseignement suivis par l'étudiant par type
     * d'enseignement précisé dans l'attribut (TP, TD, CM, …). Il peut y avoir des
     *  variations d'horaires en fonction des UE optionnelles choisies dans un parcours
     * ou un semestre donné, les valeurs minimale et maximales pour le parcours ou le
     * semestre
     *  concerné sont fournies et caractérisées avec l'attribut minMax
     *
     * @param scalar $index
     * @return void
     */
    public function unsetGlobalVolume($index)
    {
        unset($this->globalVolume[$index]);
    }

    /**
     * Gets as globalVolume
     *
     * Précisions sur les volumes d'enseignement suivis par l'étudiant par type
     * d'enseignement précisé dans l'attribut (TP, TD, CM, …). Il peut y avoir des
     *  variations d'horaires en fonction des UE optionnelles choisies dans un parcours
     * ou un semestre donné, les valeurs minimale et maximales pour le parcours ou le
     * semestre
     *  concerné sont fournies et caractérisées avec l'attribut minMax
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\GlobalVolumeType[]
     */
    public function getGlobalVolume()
    {
        return $this->globalVolume;
    }

    /**
     * Sets a new globalVolume
     *
     * Précisions sur les volumes d'enseignement suivis par l'étudiant par type
     * d'enseignement précisé dans l'attribut (TP, TD, CM, …). Il peut y avoir des
     *  variations d'horaires en fonction des UE optionnelles choisies dans un parcours
     * ou un semestre donné, les valeurs minimale et maximales pour le parcours ou le
     * semestre
     *  concerné sont fournies et caractérisées avec l'attribut minMax
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\GlobalVolumeType[] $globalVolume
     * @return self
     */
    public function setGlobalVolume(array $globalVolume)
    {
        $this->globalVolume = $globalVolume;
        return $this;
    }


}

