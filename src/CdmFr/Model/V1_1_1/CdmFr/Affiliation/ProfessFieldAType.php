<?php

namespace CdmFr\Model\V1_1_1\CdmFr\Affiliation;

use CdmFr\Model\V1_1_1\CdmFr\TextType;

/**
 * Class representing ProfessFieldAType
 */
class ProfessFieldAType extends TextType
{

    /**
     * @property string $employerRomeCode
     */
    private $employerRomeCode = null;

    /**
     * @property string $employerSiretIdRef
     */
    private $employerSiretIdRef = null;

    /**
     * @property string $ref
     */
    private $ref = null;

    /**
     * @property string $employerName
     */
    private $employerName = null;

    /**
     * Gets as employerRomeCode
     *
     * @return string
     */
    public function getEmployerRomeCode()
    {
        return $this->employerRomeCode;
    }

    /**
     * Sets a new employerRomeCode
     *
     * @param string $employerRomeCode
     * @return self
     */
    public function setEmployerRomeCode($employerRomeCode)
    {
        $this->employerRomeCode = $employerRomeCode;
        return $this;
    }

    /**
     * Gets as employerSiretIdRef
     *
     * @return string
     */
    public function getEmployerSiretIdRef()
    {
        return $this->employerSiretIdRef;
    }

    /**
     * Sets a new employerSiretIdRef
     *
     * @param string $employerSiretIdRef
     * @return self
     */
    public function setEmployerSiretIdRef($employerSiretIdRef)
    {
        $this->employerSiretIdRef = $employerSiretIdRef;
        return $this;
    }

    /**
     * Gets as ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Sets a new ref
     *
     * @param string $ref
     * @return self
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

    /**
     * Gets as employerName
     *
     * @return string
     */
    public function getEmployerName()
    {
        return $this->employerName;
    }

    /**
     * Sets a new employerName
     *
     * @param string $employerName
     * @return self
     */
    public function setEmployerName($employerName)
    {
        $this->employerName = $employerName;
        return $this;
    }


}

