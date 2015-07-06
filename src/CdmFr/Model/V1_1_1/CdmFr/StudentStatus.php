<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

use CdmFr\Model\V1_1_1\Cdm\InfoBlockType;

/**
 * Class representing StudentStatus
 */
class StudentStatus extends InfoBlockType
{

    /**
     * @property string $studentStatusValueType
     */
    private $studentStatusValueType = null;

    /**
     * Gets as studentStatusValueType
     *
     * @return string
     */
    public function getStudentStatusValueType()
    {
        return $this->studentStatusValueType;
    }

    /**
     * Sets a new studentStatusValueType
     *
     * @param string $studentStatusValueType
     * @return self
     */
    public function setStudentStatusValueType($studentStatusValueType)
    {
        $this->studentStatusValueType = $studentStatusValueType;
        return $this;
    }


}

