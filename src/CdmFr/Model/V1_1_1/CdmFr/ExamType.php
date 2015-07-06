<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing ExamType
 *
 * Exam information
 * XSD Type: examType
 */
class ExamType
{

    /**
     * Name of the exam
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $examName
     */
    private $examName = null;

    /**
     * Type of assessment: e.g. oral examination, written examination, oral
     * presentation, test, paper, portfolio, thesis, report about an internship, report
     * on
     *  fieldwork, continuous assessment. Kind of exam: e.g. ordinary, extraordinary
     * examination.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamKindAType $examKind
     */
    private $examKind = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RegistrationDeadline $registrationDeadline
     */
    private $registrationDeadline = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\CancelDeadline $cancelDeadline
     */
    private $cancelDeadline = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\EvaluationDeadline $evaluationDeadline
     */
    private $evaluationDeadline = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\ExamStart $examStart
     */
    private $examStart = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\ExamEnd $examEnd
     */
    private $examEnd = null;

    /**
     * Duration of the exam.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamDurationAType $examDuration
     */
    private $examDuration = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\ExamLocation $examLocation
     */
    private $examLocation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Contacts $contacts
     */
    private $contacts = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * Exam part structure
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamStructureAType $examStructure
     */
    private $examStructure = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\ExamType\CertifCompetenceAType $certifCompetence
     */
    private $certifCompetence = null;

    /**
     * Adds as text
     *
     * Name of the exam
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text
     */
    public function addToExamName(\CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text)
    {
        $this->examName[] = $text;
        return $this;
    }

    /**
     * isset examName
     *
     * Name of the exam
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExamName($index)
    {
        return isset($this->examName[$index]);
    }

    /**
     * unset examName
     *
     * Name of the exam
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExamName($index)
    {
        unset($this->examName[$index]);
    }

    /**
     * Gets as examName
     *
     * Name of the exam
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[]
     */
    public function getExamName()
    {
        return $this->examName;
    }

    /**
     * Sets a new examName
     *
     * Name of the exam
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $examName
     * @return self
     */
    public function setExamName(array $examName)
    {
        $this->examName = $examName;
        return $this;
    }

    /**
     * Gets as examKind
     *
     * Type of assessment: e.g. oral examination, written examination, oral
     * presentation, test, paper, portfolio, thesis, report about an internship, report
     * on
     *  fieldwork, continuous assessment. Kind of exam: e.g. ordinary, extraordinary
     * examination.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamKindAType
     */
    public function getExamKind()
    {
        return $this->examKind;
    }

    /**
     * Sets a new examKind
     *
     * Type of assessment: e.g. oral examination, written examination, oral
     * presentation, test, paper, portfolio, thesis, report about an internship, report
     * on
     *  fieldwork, continuous assessment. Kind of exam: e.g. ordinary, extraordinary
     * examination.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamKindAType $examKind
     * @return self
     */
    public function setExamKind(\CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamKindAType $examKind)
    {
        $this->examKind = $examKind;
        return $this;
    }

    /**
     * Gets as registrationDeadline
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\RegistrationDeadline
     */
    public function getRegistrationDeadline()
    {
        return $this->registrationDeadline;
    }

    /**
     * Sets a new registrationDeadline
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\RegistrationDeadline $registrationDeadline
     * @return self
     */
    public function setRegistrationDeadline(\CdmFr\Model\V1_1_1\Cdm\RegistrationDeadline $registrationDeadline)
    {
        $this->registrationDeadline = $registrationDeadline;
        return $this;
    }

    /**
     * Gets as cancelDeadline
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CancelDeadline
     */
    public function getCancelDeadline()
    {
        return $this->cancelDeadline;
    }

    /**
     * Sets a new cancelDeadline
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CancelDeadline $cancelDeadline
     * @return self
     */
    public function setCancelDeadline(\CdmFr\Model\V1_1_1\Cdm\CancelDeadline $cancelDeadline)
    {
        $this->cancelDeadline = $cancelDeadline;
        return $this;
    }

    /**
     * Gets as evaluationDeadline
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\EvaluationDeadline
     */
    public function getEvaluationDeadline()
    {
        return $this->evaluationDeadline;
    }

    /**
     * Sets a new evaluationDeadline
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\EvaluationDeadline $evaluationDeadline
     * @return self
     */
    public function setEvaluationDeadline(\CdmFr\Model\V1_1_1\Cdm\EvaluationDeadline $evaluationDeadline)
    {
        $this->evaluationDeadline = $evaluationDeadline;
        return $this;
    }

    /**
     * Gets as examStart
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\ExamStart
     */
    public function getExamStart()
    {
        return $this->examStart;
    }

    /**
     * Sets a new examStart
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\ExamStart $examStart
     * @return self
     */
    public function setExamStart(\CdmFr\Model\V1_1_1\Cdm\ExamStart $examStart)
    {
        $this->examStart = $examStart;
        return $this;
    }

    /**
     * Gets as examEnd
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\ExamEnd
     */
    public function getExamEnd()
    {
        return $this->examEnd;
    }

    /**
     * Sets a new examEnd
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\ExamEnd $examEnd
     * @return self
     */
    public function setExamEnd(\CdmFr\Model\V1_1_1\Cdm\ExamEnd $examEnd)
    {
        $this->examEnd = $examEnd;
        return $this;
    }

    /**
     * Gets as examDuration
     *
     * Duration of the exam.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamDurationAType
     */
    public function getExamDuration()
    {
        return $this->examDuration;
    }

    /**
     * Sets a new examDuration
     *
     * Duration of the exam.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamDurationAType $examDuration
     * @return self
     */
    public function setExamDuration(\CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamDurationAType $examDuration)
    {
        $this->examDuration = $examDuration;
        return $this;
    }

    /**
     * Gets as examLocation
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\ExamLocation
     */
    public function getExamLocation()
    {
        return $this->examLocation;
    }

    /**
     * Sets a new examLocation
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\ExamLocation $examLocation
     * @return self
     */
    public function setExamLocation(\CdmFr\Model\V1_1_1\Cdm\ExamLocation $examLocation)
    {
        $this->examLocation = $examLocation;
        return $this;
    }

    /**
     * Gets as contacts
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Contacts
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Contacts $contacts
     * @return self
     */
    public function setContacts(\CdmFr\Model\V1_1_1\Cdm\Contacts $contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Gets as examStructure
     *
     * Exam part structure
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamStructureAType
     */
    public function getExamStructure()
    {
        return $this->examStructure;
    }

    /**
     * Sets a new examStructure
     *
     * Exam part structure
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamStructureAType $examStructure
     * @return self
     */
    public function setExamStructure(\CdmFr\Model\V1_1_1\CdmFr\ExamType\ExamStructureAType $examStructure)
    {
        $this->examStructure = $examStructure;
        return $this;
    }

    /**
     * Gets as certifCompetence
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ExamType\CertifCompetenceAType
     */
    public function getCertifCompetence()
    {
        return $this->certifCompetence;
    }

    /**
     * Sets a new certifCompetence
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ExamType\CertifCompetenceAType $certifCompetence
     * @return self
     */
    public function setCertifCompetence(\CdmFr\Model\V1_1_1\CdmFr\ExamType\CertifCompetenceAType $certifCompetence)
    {
        $this->certifCompetence = $certifCompetence;
        return $this;
    }


}

