<?php

namespace CdmFr\Model\V1_1_1\CdmFr\StudyQualification;

use CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType;

/**
 * Class representing CompetenceValidityAType
 */
class CompetenceValidityAType extends CDMdateTimeType
{

    /**
     * @property boolean $limited
     */
    private $limited = null;

    /**
     * Gets as limited
     *
     * @return boolean
     */
    public function getLimited()
    {
        return $this->limited;
    }

    /**
     * Sets a new limited
     *
     * @param boolean $limited
     * @return self
     */
    public function setLimited($limited)
    {
        $this->limited = $limited;
        return $this;
    }


}

