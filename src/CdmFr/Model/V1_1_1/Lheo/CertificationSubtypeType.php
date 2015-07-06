<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing CertificationSubtypeType
 *
 *
 * XSD Type: certification-subtype
 */
class CertificationSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeRNCP $codeRNCP
     */
    private $codeRNCP = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeCERTIFINFO $codeCERTIFINFO
     */
    private $codeCERTIFINFO = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as codeRNCP
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeRNCP
     */
    public function getCodeRNCP()
    {
        return $this->codeRNCP;
    }

    /**
     * Sets a new codeRNCP
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeRNCP $codeRNCP
     * @return self
     */
    public function setCodeRNCP(\CdmFr\Model\V1_1_1\Lheo\CodeRNCP $codeRNCP)
    {
        $this->codeRNCP = $codeRNCP;
        return $this;
    }

    /**
     * Gets as codeCERTIFINFO
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeCERTIFINFO
     */
    public function getCodeCERTIFINFO()
    {
        return $this->codeCERTIFINFO;
    }

    /**
     * Sets a new codeCERTIFINFO
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeCERTIFINFO $codeCERTIFINFO
     * @return self
     */
    public function setCodeCERTIFINFO(\CdmFr\Model\V1_1_1\Lheo\CodeCERTIFINFO $codeCERTIFINFO)
    {
        $this->codeCERTIFINFO = $codeCERTIFINFO;
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

