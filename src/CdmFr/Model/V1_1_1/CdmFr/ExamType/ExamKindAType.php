<?php

namespace CdmFr\Model\V1_1_1\CdmFr\ExamType;

use CdmFr\Model\V1_1_1\Cdm\InfoBlockType;

/**
 * Class representing ExamKindAType
 */
class ExamKindAType extends InfoBlockType
{

    /**
     * @property string $examKind
     */
    private $examKind = null;

    /**
     * @property string $examForm
     */
    private $examForm = null;

    /**
     * Gets as examKind
     *
     * @return string
     */
    public function getExamKind()
    {
        return $this->examKind;
    }

    /**
     * Sets a new examKind
     *
     * @param string $examKind
     * @return self
     */
    public function setExamKind($examKind)
    {
        $this->examKind = $examKind;
        return $this;
    }

    /**
     * Gets as examForm
     *
     * @return string
     */
    public function getExamForm()
    {
        return $this->examForm;
    }

    /**
     * Sets a new examForm
     *
     * @param string $examForm
     * @return self
     */
    public function setExamForm($examForm)
    {
        $this->examForm = $examForm;
        return $this;
    }


}

