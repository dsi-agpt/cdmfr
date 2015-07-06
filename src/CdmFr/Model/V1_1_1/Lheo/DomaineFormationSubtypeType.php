<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing DomaineFormationSubtypeType
 *
 *
 * XSD Type: domaine-formation-subtype
 */
class DomaineFormationSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeFORMACODE[] $codeFORMACODE
     */
    private $codeFORMACODE = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeNSF[] $codeNSF
     */
    private $codeNSF = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeROME[] $codeROME
     */
    private $codeROME = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Adds as code-FORMACODE
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeFORMACODE $code-FORMACODE
     */
    public function addToCodeFORMACODE(\CdmFr\Model\V1_1_1\Lheo\CodeFORMACODE $code-FORMACODE)
    {
        $this->codeFORMACODE[] = $code-FORMACODE;
        return $this;
    }

    /**
     * isset codeFORMACODE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeFORMACODE($index)
    {
        return isset($this->codeFORMACODE[$index]);
    }

    /**
     * unset codeFORMACODE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeFORMACODE($index)
    {
        unset($this->codeFORMACODE[$index]);
    }

    /**
     * Gets as codeFORMACODE
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeFORMACODE[]
     */
    public function getCodeFORMACODE()
    {
        return $this->codeFORMACODE;
    }

    /**
     * Sets a new codeFORMACODE
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeFORMACODE[] $codeFORMACODE
     * @return self
     */
    public function setCodeFORMACODE(array $codeFORMACODE)
    {
        $this->codeFORMACODE = $codeFORMACODE;
        return $this;
    }

    /**
     * Adds as code-NSF
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeNSF $code-NSF
     */
    public function addToCodeNSF(\CdmFr\Model\V1_1_1\Lheo\CodeNSF $code-NSF)
    {
        $this->codeNSF[] = $code-NSF;
        return $this;
    }

    /**
     * isset codeNSF
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeNSF($index)
    {
        return isset($this->codeNSF[$index]);
    }

    /**
     * unset codeNSF
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeNSF($index)
    {
        unset($this->codeNSF[$index]);
    }

    /**
     * Gets as codeNSF
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeNSF[]
     */
    public function getCodeNSF()
    {
        return $this->codeNSF;
    }

    /**
     * Sets a new codeNSF
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeNSF[] $codeNSF
     * @return self
     */
    public function setCodeNSF(array $codeNSF)
    {
        $this->codeNSF = $codeNSF;
        return $this;
    }

    /**
     * Adds as code-ROME
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeROME $code-ROME
     */
    public function addToCodeROME(\CdmFr\Model\V1_1_1\Lheo\CodeROME $code-ROME)
    {
        $this->codeROME[] = $code-ROME;
        return $this;
    }

    /**
     * isset codeROME
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeROME($index)
    {
        return isset($this->codeROME[$index]);
    }

    /**
     * unset codeROME
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeROME($index)
    {
        unset($this->codeROME[$index]);
    }

    /**
     * Gets as codeROME
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeROME[]
     */
    public function getCodeROME()
    {
        return $this->codeROME;
    }

    /**
     * Sets a new codeROME
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeROME[] $codeROME
     * @return self
     */
    public function setCodeROME(array $codeROME)
    {
        $this->codeROME = $codeROME;
        return $this;
    }

    /**
     * Adds as extras
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Extras $extras
     */
    public function addToExtras(\CdmFr\Model\V1_1_1\Lheo\Extras $extras)
    {
        $this->extras[] = $extras;
        return $this;
    }

    /**
     * isset extras
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtras($index)
    {
        return isset($this->extras[$index]);
    }

    /**
     * unset extras
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtras($index)
    {
        unset($this->extras[$index]);
    }

    /**
     * Gets as extras
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Extras[]
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Sets a new extras
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     * @return self
     */
    public function setExtras(array $extras)
    {
        $this->extras = $extras;
        return $this;
    }


}

