<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing Qualification
 */
class Qualification
{

    /**
     * Full name of the qualification
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $qualificationName
     */
    private $qualificationName = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\InfoBlock[] $qualificationDescription
     */
    private $qualificationDescription = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Credits $credits
     */
    private $credits = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Degree $degree
     */
    private $degree = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Profession[] $profession
     */
    private $profession = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\StudyQualification[] $studyQualification
     */
    private $studyQualification = null;

    /**
     * Adds as text
     *
     * Full name of the qualification
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToQualificationName(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->qualificationName[] = $text;
        return $this;
    }

    /**
     * isset qualificationName
     *
     * Full name of the qualification
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQualificationName($index)
    {
        return isset($this->qualificationName[$index]);
    }

    /**
     * unset qualificationName
     *
     * Full name of the qualification
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQualificationName($index)
    {
        unset($this->qualificationName[$index]);
    }

    /**
     * Gets as qualificationName
     *
     * Full name of the qualification
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getQualificationName()
    {
        return $this->qualificationName;
    }

    /**
     * Sets a new qualificationName
     *
     * Full name of the qualification
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $qualificationName
     * @return self
     */
    public function setQualificationName(array $qualificationName)
    {
        $this->qualificationName = $qualificationName;
        return $this;
    }

    /**
     * Adds as infoBlock
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlock $infoBlock
     */
    public function addToQualificationDescription(\CdmFr\Model\V1_1_1\CdmFr\InfoBlock $infoBlock)
    {
        $this->qualificationDescription[] = $infoBlock;
        return $this;
    }

    /**
     * isset qualificationDescription
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQualificationDescription($index)
    {
        return isset($this->qualificationDescription[$index]);
    }

    /**
     * unset qualificationDescription
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQualificationDescription($index)
    {
        unset($this->qualificationDescription[$index]);
    }

    /**
     * Gets as qualificationDescription
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\InfoBlock[]
     */
    public function getQualificationDescription()
    {
        return $this->qualificationDescription;
    }

    /**
     * Sets a new qualificationDescription
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlock[] $qualificationDescription
     * @return self
     */
    public function setQualificationDescription(array $qualificationDescription)
    {
        $this->qualificationDescription = $qualificationDescription;
        return $this;
    }

    /**
     * Gets as credits
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Credits
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Sets a new credits
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Credits $credits
     * @return self
     */
    public function setCredits(\CdmFr\Model\V1_1_1\CdmFr\Credits $credits)
    {
        $this->credits = $credits;
        return $this;
    }

    /**
     * Gets as degree
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Degree
     */
    public function getDegree()
    {
        return $this->degree;
    }

    /**
     * Sets a new degree
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Degree $degree
     * @return self
     */
    public function setDegree(\CdmFr\Model\V1_1_1\CdmFr\Degree $degree)
    {
        $this->degree = $degree;
        return $this;
    }

    /**
     * Adds as profession
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Profession $profession
     */
    public function addToProfession(\CdmFr\Model\V1_1_1\CdmFr\Profession $profession)
    {
        $this->profession[] = $profession;
        return $this;
    }

    /**
     * isset profession
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfession($index)
    {
        return isset($this->profession[$index]);
    }

    /**
     * unset profession
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfession($index)
    {
        unset($this->profession[$index]);
    }

    /**
     * Gets as profession
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Profession[]
     */
    public function getProfession()
    {
        return $this->profession;
    }

    /**
     * Sets a new profession
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Profession[] $profession
     * @return self
     */
    public function setProfession(array $profession)
    {
        $this->profession = $profession;
        return $this;
    }

    /**
     * Adds as studyQualification
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\StudyQualification $studyQualification
     */
    public function addToStudyQualification(\CdmFr\Model\V1_1_1\CdmFr\StudyQualification $studyQualification)
    {
        $this->studyQualification[] = $studyQualification;
        return $this;
    }

    /**
     * isset studyQualification
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStudyQualification($index)
    {
        return isset($this->studyQualification[$index]);
    }

    /**
     * unset studyQualification
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStudyQualification($index)
    {
        unset($this->studyQualification[$index]);
    }

    /**
     * Gets as studyQualification
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\StudyQualification[]
     */
    public function getStudyQualification()
    {
        return $this->studyQualification;
    }

    /**
     * Sets a new studyQualification
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\StudyQualification[] $studyQualification
     * @return self
     */
    public function setStudyQualification(array $studyQualification)
    {
        $this->studyQualification = $studyQualification;
        return $this;
    }


}

