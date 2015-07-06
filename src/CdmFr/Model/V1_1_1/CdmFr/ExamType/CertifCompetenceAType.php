<?php

namespace CdmFr\Model\V1_1_1\CdmFr\ExamType;

/**
 * Class representing CertifCompetenceAType
 */
class CertifCompetenceAType
{

    /**
     * @property string $certifName
     */
    private $certifName = null;

    /**
     * @property boolean $compEval
     */
    private $compEval = null;

    /**
     * Gets as certifName
     *
     * @return string
     */
    public function getCertifName()
    {
        return $this->certifName;
    }

    /**
     * Sets a new certifName
     *
     * @param string $certifName
     * @return self
     */
    public function setCertifName($certifName)
    {
        $this->certifName = $certifName;
        return $this;
    }

    /**
     * Gets as compEval
     *
     * @return boolean
     */
    public function getCompEval()
    {
        return $this->compEval;
    }

    /**
     * Sets a new compEval
     *
     * @param boolean $compEval
     * @return self
     */
    public function setCompEval($compEval)
    {
        $this->compEval = $compEval;
        return $this;
    }


}

