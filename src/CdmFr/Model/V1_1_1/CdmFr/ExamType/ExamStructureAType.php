<?php

namespace CdmFr\Model\V1_1_1\CdmFr\ExamType;

/**
 * Class representing ExamStructureAType
 */
class ExamStructureAType
{

    /**
     * @property string $examPartStructure
     */
    private $examPartStructure = null;

    /**
     * Description of relationships between the exam parts
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $partStructure
     */
    private $partStructure = null;

    /**
     * List of exam parts
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\ExamType[] $examParts
     */
    private $examParts = null;

    /**
     * Gets as examPartStructure
     *
     * @return string
     */
    public function getExamPartStructure()
    {
        return $this->examPartStructure;
    }

    /**
     * Sets a new examPartStructure
     *
     * @param string $examPartStructure
     * @return self
     */
    public function setExamPartStructure($examPartStructure)
    {
        $this->examPartStructure = $examPartStructure;
        return $this;
    }

    /**
     * Gets as partStructure
     *
     * Description of relationships between the exam parts
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getPartStructure()
    {
        return $this->partStructure;
    }

    /**
     * Sets a new partStructure
     *
     * Description of relationships between the exam parts
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $partStructure
     * @return self
     */
    public function setPartStructure(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $partStructure)
    {
        $this->partStructure = $partStructure;
        return $this;
    }

    /**
     * Adds as examParts
     *
     * List of exam parts
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\ExamType $examParts
     */
    public function addToExamParts(\CdmFr\Model\V1_1_1\CdmFr\ExamType $examParts)
    {
        $this->examParts[] = $examParts;
        return $this;
    }

    /**
     * isset examParts
     *
     * List of exam parts
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExamParts($index)
    {
        return isset($this->examParts[$index]);
    }

    /**
     * unset examParts
     *
     * List of exam parts
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExamParts($index)
    {
        unset($this->examParts[$index]);
    }

    /**
     * Gets as examParts
     *
     * List of exam parts
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ExamType[]
     */
    public function getExamParts()
    {
        return $this->examParts;
    }

    /**
     * Sets a new examParts
     *
     * List of exam parts
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ExamType[] $examParts
     * @return self
     */
    public function setExamParts(array $examParts)
    {
        $this->examParts = $examParts;
        return $this;
    }


}

