<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing PotentielSubtypeType
 *
 *
 * XSD Type: potentiel-subtype
 */
class PotentielSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeFORMACODE[] $codeFORMACODE
     */
    private $codeFORMACODE = null;

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

