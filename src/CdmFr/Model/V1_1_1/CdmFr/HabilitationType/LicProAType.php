<?php

namespace CdmFr\Model\V1_1_1\CdmFr\HabilitationType;

/**
 * Class representing LicProAType
 */
class LicProAType
{

    /**
     * @property string $denominNat
     */
    private $denominNat = null;

    /**
     * @property string $sectAct
     */
    private $sectAct = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\LicProAType\ComposanteAType[]
     * $composante
     */
    private $composante = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $specialite
     */
    private $specialite = null;

    /**
     * @property string $licdiplomaType
     */
    private $licdiplomaType = null;

    /**
     * Gets as denominNat
     *
     * @return string
     */
    public function getDenominNat()
    {
        return $this->denominNat;
    }

    /**
     * Sets a new denominNat
     *
     * @param string $denominNat
     * @return self
     */
    public function setDenominNat($denominNat)
    {
        $this->denominNat = $denominNat;
        return $this;
    }

    /**
     * Gets as sectAct
     *
     * @return string
     */
    public function getSectAct()
    {
        return $this->sectAct;
    }

    /**
     * Sets a new sectAct
     *
     * @param string $sectAct
     * @return self
     */
    public function setSectAct($sectAct)
    {
        $this->sectAct = $sectAct;
        return $this;
    }

    /**
     * Adds as composante
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\LicProAType\ComposanteAType
     * $composante
     */
    public function addToComposante(\CdmFr\Model\V1_1_1\CdmFr\HabilitationType\LicProAType\ComposanteAType $composante)
    {
        $this->composante[] = $composante;
        return $this;
    }

    /**
     * isset composante
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetComposante($index)
    {
        return isset($this->composante[$index]);
    }

    /**
     * unset composante
     *
     * @param scalar $index
     * @return void
     */
    public function unsetComposante($index)
    {
        unset($this->composante[$index]);
    }

    /**
     * Gets as composante
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\LicProAType\ComposanteAType[]
     */
    public function getComposante()
    {
        return $this->composante;
    }

    /**
     * Sets a new composante
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\LicProAType\ComposanteAType[]
     * $composante
     * @return self
     */
    public function setComposante(array $composante)
    {
        $this->composante = $composante;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text
     */
    public function addToSpecialite(\CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text)
    {
        $this->specialite[] = $text;
        return $this;
    }

    /**
     * isset specialite
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpecialite($index)
    {
        return isset($this->specialite[$index]);
    }

    /**
     * unset specialite
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpecialite($index)
    {
        unset($this->specialite[$index]);
    }

    /**
     * Gets as specialite
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[]
     */
    public function getSpecialite()
    {
        return $this->specialite;
    }

    /**
     * Sets a new specialite
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $specialite
     * @return self
     */
    public function setSpecialite(array $specialite)
    {
        $this->specialite = $specialite;
        return $this;
    }

    /**
     * Gets as licdiplomaType
     *
     * @return string
     */
    public function getLicdiplomaType()
    {
        return $this->licdiplomaType;
    }

    /**
     * Sets a new licdiplomaType
     *
     * @param string $licdiplomaType
     * @return self
     */
    public function setLicdiplomaType($licdiplomaType)
    {
        $this->licdiplomaType = $licdiplomaType;
        return $this;
    }


}

