<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing CourseType
 *
 * Description of a course unit with curriculum, time
 *  schedule, teaching
 *  activities and exam.
 * XSD Type: courseType
 */
class CourseType
{

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $ident
     */
    private $ident = null;

    /**
     * @property string $language
     */
    private $language = null;

    /**
     * Shorthand identification of the course unit
     *
     * @property string[] $courseID
     */
    private $courseID = null;

    /**
     * Full name of the course unit
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $courseName
     */
    private $courseName = null;

    /**
     * A course unit code according to a codification
     *  scheme. The
     *  choice of codification rule can be given by the
     *  attribute codeSet.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\CourseType\CourseCodeAType[] $courseCode
     */
    private $courseCode = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\WebLink[] $webLink
     */
    private $webLink = null;

    /**
     * A (short) general introduction of the course
     *  unit
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType[] $courseIntroduction
     */
    private $courseIntroduction = null;

    /**
     * A (short) general description of the course
     *  unit
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType[] $courseDescription
     */
    private $courseDescription = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Level[] $level
     */
    private $level = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\LevelCode[] $levelCode
     */
    private $levelCode = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TeachingTerm[] $teachingTerm
     */
    private $teachingTerm = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Credits[] $credits
     */
    private $credits = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\LearningObjectives[] $learningObjectives
     */
    private $learningObjectives = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\AdmissionInfo[] $admissionInfo
     */
    private $admissionInfo = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RecommendedPrerequisites[]
     * $recommendedPrerequisites
     */
    private $recommendedPrerequisites = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\FormalPrerequisites[] $formalPrerequisites
     */
    private $formalPrerequisites = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TeachingPlace[] $teachingPlace
     */
    private $teachingPlace = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TargetGroup[] $targetGroup
     */
    private $targetGroup = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\FormOfTeaching[] $formOfTeaching
     */
    private $formOfTeaching = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment[] $formOfAssessment
     */
    private $formOfAssessment = null;

    /**
     * Description of benefits, e.g. grants, available
     *  for students
     *  attending the course.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType[] $benefits
     */
    private $benefits = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\InstructionLanguage[] $instructionLanguage
     */
    private $instructionLanguage = null;

    /**
     * Overlap, ex between courses.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType[] $overlap
     */
    private $overlap = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Syllabus[] $syllabus
     */
    private $syllabus = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Expenses[] $expenses
     */
    private $expenses = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\UniversalAdjustment[] $universalAdjustment
     */
    private $universalAdjustment = null;

    /**
     * Description of the exam of the course
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\ExamType[] $exam
     */
    private $exam = null;

    /**
     * Description of the teaching activities of the
     *  course
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\CourseType\TeachingActivityAType[]
     * $teachingActivity
     */
    private $teachingActivity = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Contacts[] $contacts
     */
    private $contacts = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\InfoBlock[] $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property string[] $searchword
     */
    private $searchword = null;

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as ident
     *
     * @return string
     */
    public function getIdent()
    {
        return $this->ident;
    }

    /**
     * Sets a new ident
     *
     * @param string $ident
     * @return self
     */
    public function setIdent($ident)
    {
        $this->ident = $ident;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Adds as courseID
     *
     * Shorthand identification of the course unit
     *
     * @return self
     * @param string $courseID
     */
    public function addToCourseID($courseID)
    {
        $this->courseID[] = $courseID;
        return $this;
    }

    /**
     * isset courseID
     *
     * Shorthand identification of the course unit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourseID($index)
    {
        return isset($this->courseID[$index]);
    }

    /**
     * unset courseID
     *
     * Shorthand identification of the course unit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourseID($index)
    {
        unset($this->courseID[$index]);
    }

    /**
     * Gets as courseID
     *
     * Shorthand identification of the course unit
     *
     * @return string[]
     */
    public function getCourseID()
    {
        return $this->courseID;
    }

    /**
     * Sets a new courseID
     *
     * Shorthand identification of the course unit
     *
     * @param string[] $courseID
     * @return self
     */
    public function setCourseID(array $courseID)
    {
        $this->courseID = $courseID;
        return $this;
    }

    /**
     * Adds as text
     *
     * Full name of the course unit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToCourseName(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->courseName[] = $text;
        return $this;
    }

    /**
     * isset courseName
     *
     * Full name of the course unit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourseName($index)
    {
        return isset($this->courseName[$index]);
    }

    /**
     * unset courseName
     *
     * Full name of the course unit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourseName($index)
    {
        unset($this->courseName[$index]);
    }

    /**
     * Gets as courseName
     *
     * Full name of the course unit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getCourseName()
    {
        return $this->courseName;
    }

    /**
     * Sets a new courseName
     *
     * Full name of the course unit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $courseName
     * @return self
     */
    public function setCourseName(array $courseName)
    {
        $this->courseName = $courseName;
        return $this;
    }

    /**
     * Adds as courseCode
     *
     * A course unit code according to a codification
     *  scheme. The
     *  choice of codification rule can be given by the
     *  attribute codeSet.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\CourseType\CourseCodeAType $courseCode
     */
    public function addToCourseCode(\CdmFr\Model\V1_1_1\CdmFr\CourseType\CourseCodeAType $courseCode)
    {
        $this->courseCode[] = $courseCode;
        return $this;
    }

    /**
     * isset courseCode
     *
     * A course unit code according to a codification
     *  scheme. The
     *  choice of codification rule can be given by the
     *  attribute codeSet.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourseCode($index)
    {
        return isset($this->courseCode[$index]);
    }

    /**
     * unset courseCode
     *
     * A course unit code according to a codification
     *  scheme. The
     *  choice of codification rule can be given by the
     *  attribute codeSet.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourseCode($index)
    {
        unset($this->courseCode[$index]);
    }

    /**
     * Gets as courseCode
     *
     * A course unit code according to a codification
     *  scheme. The
     *  choice of codification rule can be given by the
     *  attribute codeSet.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CourseType\CourseCodeAType[]
     */
    public function getCourseCode()
    {
        return $this->courseCode;
    }

    /**
     * Sets a new courseCode
     *
     * A course unit code according to a codification
     *  scheme. The
     *  choice of codification rule can be given by the
     *  attribute codeSet.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CourseType\CourseCodeAType[] $courseCode
     * @return self
     */
    public function setCourseCode(array $courseCode)
    {
        $this->courseCode = $courseCode;
        return $this;
    }

    /**
     * Adds as webLink
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\WebLink $webLink
     */
    public function addToWebLink(\CdmFr\Model\V1_1_1\CdmFr\WebLink $webLink)
    {
        $this->webLink[] = $webLink;
        return $this;
    }

    /**
     * isset webLink
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetWebLink($index)
    {
        return isset($this->webLink[$index]);
    }

    /**
     * unset webLink
     *
     * @param scalar $index
     * @return void
     */
    public function unsetWebLink($index)
    {
        unset($this->webLink[$index]);
    }

    /**
     * Gets as webLink
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\WebLink[]
     */
    public function getWebLink()
    {
        return $this->webLink;
    }

    /**
     * Sets a new webLink
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\WebLink[] $webLink
     * @return self
     */
    public function setWebLink(array $webLink)
    {
        $this->webLink = $webLink;
        return $this;
    }

    /**
     * Adds as courseIntroduction
     *
     * A (short) general introduction of the course
     *  unit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType $courseIntroduction
     */
    public function addToCourseIntroduction(\CdmFr\Model\V1_1_1\CdmFr\InfoBlockType $courseIntroduction)
    {
        $this->courseIntroduction[] = $courseIntroduction;
        return $this;
    }

    /**
     * isset courseIntroduction
     *
     * A (short) general introduction of the course
     *  unit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourseIntroduction($index)
    {
        return isset($this->courseIntroduction[$index]);
    }

    /**
     * unset courseIntroduction
     *
     * A (short) general introduction of the course
     *  unit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourseIntroduction($index)
    {
        unset($this->courseIntroduction[$index]);
    }

    /**
     * Gets as courseIntroduction
     *
     * A (short) general introduction of the course
     *  unit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType[]
     */
    public function getCourseIntroduction()
    {
        return $this->courseIntroduction;
    }

    /**
     * Sets a new courseIntroduction
     *
     * A (short) general introduction of the course
     *  unit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType[] $courseIntroduction
     * @return self
     */
    public function setCourseIntroduction(array $courseIntroduction)
    {
        $this->courseIntroduction = $courseIntroduction;
        return $this;
    }

    /**
     * Adds as courseDescription
     *
     * A (short) general description of the course
     *  unit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType $courseDescription
     */
    public function addToCourseDescription(\CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType $courseDescription)
    {
        $this->courseDescription[] = $courseDescription;
        return $this;
    }

    /**
     * isset courseDescription
     *
     * A (short) general description of the course
     *  unit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourseDescription($index)
    {
        return isset($this->courseDescription[$index]);
    }

    /**
     * unset courseDescription
     *
     * A (short) general description of the course
     *  unit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourseDescription($index)
    {
        unset($this->courseDescription[$index]);
    }

    /**
     * Gets as courseDescription
     *
     * A (short) general description of the course
     *  unit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType[]
     */
    public function getCourseDescription()
    {
        return $this->courseDescription;
    }

    /**
     * Sets a new courseDescription
     *
     * A (short) general description of the course
     *  unit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CourseDescriptionType[] $courseDescription
     * @return self
     */
    public function setCourseDescription(array $courseDescription)
    {
        $this->courseDescription = $courseDescription;
        return $this;
    }

    /**
     * Adds as level
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Level $level
     */
    public function addToLevel(\CdmFr\Model\V1_1_1\CdmFr\Level $level)
    {
        $this->level[] = $level;
        return $this;
    }

    /**
     * isset level
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLevel($index)
    {
        return isset($this->level[$index]);
    }

    /**
     * unset level
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLevel($index)
    {
        unset($this->level[$index]);
    }

    /**
     * Gets as level
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Level[]
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Level[] $level
     * @return self
     */
    public function setLevel(array $level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Adds as levelCode
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\LevelCode $levelCode
     */
    public function addToLevelCode(\CdmFr\Model\V1_1_1\CdmFr\LevelCode $levelCode)
    {
        $this->levelCode[] = $levelCode;
        return $this;
    }

    /**
     * isset levelCode
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLevelCode($index)
    {
        return isset($this->levelCode[$index]);
    }

    /**
     * unset levelCode
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLevelCode($index)
    {
        unset($this->levelCode[$index]);
    }

    /**
     * Gets as levelCode
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\LevelCode[]
     */
    public function getLevelCode()
    {
        return $this->levelCode;
    }

    /**
     * Sets a new levelCode
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\LevelCode[] $levelCode
     * @return self
     */
    public function setLevelCode(array $levelCode)
    {
        $this->levelCode = $levelCode;
        return $this;
    }

    /**
     * Adds as teachingTerm
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TeachingTerm $teachingTerm
     */
    public function addToTeachingTerm(\CdmFr\Model\V1_1_1\CdmFr\TeachingTerm $teachingTerm)
    {
        $this->teachingTerm[] = $teachingTerm;
        return $this;
    }

    /**
     * isset teachingTerm
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTeachingTerm($index)
    {
        return isset($this->teachingTerm[$index]);
    }

    /**
     * unset teachingTerm
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTeachingTerm($index)
    {
        unset($this->teachingTerm[$index]);
    }

    /**
     * Gets as teachingTerm
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TeachingTerm[]
     */
    public function getTeachingTerm()
    {
        return $this->teachingTerm;
    }

    /**
     * Sets a new teachingTerm
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TeachingTerm[] $teachingTerm
     * @return self
     */
    public function setTeachingTerm(array $teachingTerm)
    {
        $this->teachingTerm = $teachingTerm;
        return $this;
    }

    /**
     * Adds as credits
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Credits $credits
     */
    public function addToCredits(\CdmFr\Model\V1_1_1\CdmFr\Credits $credits)
    {
        $this->credits[] = $credits;
        return $this;
    }

    /**
     * isset credits
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCredits($index)
    {
        return isset($this->credits[$index]);
    }

    /**
     * unset credits
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCredits($index)
    {
        unset($this->credits[$index]);
    }

    /**
     * Gets as credits
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Credits[]
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * Sets a new credits
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Credits[] $credits
     * @return self
     */
    public function setCredits(array $credits)
    {
        $this->credits = $credits;
        return $this;
    }

    /**
     * Adds as learningObjectives
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\LearningObjectives $learningObjectives
     */
    public function addToLearningObjectives(\CdmFr\Model\V1_1_1\CdmFr\LearningObjectives $learningObjectives)
    {
        $this->learningObjectives[] = $learningObjectives;
        return $this;
    }

    /**
     * isset learningObjectives
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLearningObjectives($index)
    {
        return isset($this->learningObjectives[$index]);
    }

    /**
     * unset learningObjectives
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLearningObjectives($index)
    {
        unset($this->learningObjectives[$index]);
    }

    /**
     * Gets as learningObjectives
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\LearningObjectives[]
     */
    public function getLearningObjectives()
    {
        return $this->learningObjectives;
    }

    /**
     * Sets a new learningObjectives
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\LearningObjectives[] $learningObjectives
     * @return self
     */
    public function setLearningObjectives(array $learningObjectives)
    {
        $this->learningObjectives = $learningObjectives;
        return $this;
    }

    /**
     * Adds as admissionInfo
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\AdmissionInfo $admissionInfo
     */
    public function addToAdmissionInfo(\CdmFr\Model\V1_1_1\CdmFr\AdmissionInfo $admissionInfo)
    {
        $this->admissionInfo[] = $admissionInfo;
        return $this;
    }

    /**
     * isset admissionInfo
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdmissionInfo($index)
    {
        return isset($this->admissionInfo[$index]);
    }

    /**
     * unset admissionInfo
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdmissionInfo($index)
    {
        unset($this->admissionInfo[$index]);
    }

    /**
     * Gets as admissionInfo
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\AdmissionInfo[]
     */
    public function getAdmissionInfo()
    {
        return $this->admissionInfo;
    }

    /**
     * Sets a new admissionInfo
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\AdmissionInfo[] $admissionInfo
     * @return self
     */
    public function setAdmissionInfo(array $admissionInfo)
    {
        $this->admissionInfo = $admissionInfo;
        return $this;
    }

    /**
     * Adds as recommendedPrerequisites
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RecommendedPrerequisites $recommendedPrerequisites
     */
    public function addToRecommendedPrerequisites(\CdmFr\Model\V1_1_1\CdmFr\RecommendedPrerequisites $recommendedPrerequisites)
    {
        $this->recommendedPrerequisites[] = $recommendedPrerequisites;
        return $this;
    }

    /**
     * isset recommendedPrerequisites
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRecommendedPrerequisites($index)
    {
        return isset($this->recommendedPrerequisites[$index]);
    }

    /**
     * unset recommendedPrerequisites
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRecommendedPrerequisites($index)
    {
        unset($this->recommendedPrerequisites[$index]);
    }

    /**
     * Gets as recommendedPrerequisites
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RecommendedPrerequisites[]
     */
    public function getRecommendedPrerequisites()
    {
        return $this->recommendedPrerequisites;
    }

    /**
     * Sets a new recommendedPrerequisites
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RecommendedPrerequisites[] $recommendedPrerequisites
     * @return self
     */
    public function setRecommendedPrerequisites(array $recommendedPrerequisites)
    {
        $this->recommendedPrerequisites = $recommendedPrerequisites;
        return $this;
    }

    /**
     * Adds as formalPrerequisites
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\FormalPrerequisites $formalPrerequisites
     */
    public function addToFormalPrerequisites(\CdmFr\Model\V1_1_1\CdmFr\FormalPrerequisites $formalPrerequisites)
    {
        $this->formalPrerequisites[] = $formalPrerequisites;
        return $this;
    }

    /**
     * isset formalPrerequisites
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormalPrerequisites($index)
    {
        return isset($this->formalPrerequisites[$index]);
    }

    /**
     * unset formalPrerequisites
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormalPrerequisites($index)
    {
        unset($this->formalPrerequisites[$index]);
    }

    /**
     * Gets as formalPrerequisites
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\FormalPrerequisites[]
     */
    public function getFormalPrerequisites()
    {
        return $this->formalPrerequisites;
    }

    /**
     * Sets a new formalPrerequisites
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\FormalPrerequisites[] $formalPrerequisites
     * @return self
     */
    public function setFormalPrerequisites(array $formalPrerequisites)
    {
        $this->formalPrerequisites = $formalPrerequisites;
        return $this;
    }

    /**
     * Adds as teachingPlace
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TeachingPlace $teachingPlace
     */
    public function addToTeachingPlace(\CdmFr\Model\V1_1_1\CdmFr\TeachingPlace $teachingPlace)
    {
        $this->teachingPlace[] = $teachingPlace;
        return $this;
    }

    /**
     * isset teachingPlace
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTeachingPlace($index)
    {
        return isset($this->teachingPlace[$index]);
    }

    /**
     * unset teachingPlace
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTeachingPlace($index)
    {
        unset($this->teachingPlace[$index]);
    }

    /**
     * Gets as teachingPlace
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TeachingPlace[]
     */
    public function getTeachingPlace()
    {
        return $this->teachingPlace;
    }

    /**
     * Sets a new teachingPlace
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TeachingPlace[] $teachingPlace
     * @return self
     */
    public function setTeachingPlace(array $teachingPlace)
    {
        $this->teachingPlace = $teachingPlace;
        return $this;
    }

    /**
     * Adds as targetGroup
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TargetGroup $targetGroup
     */
    public function addToTargetGroup(\CdmFr\Model\V1_1_1\CdmFr\TargetGroup $targetGroup)
    {
        $this->targetGroup[] = $targetGroup;
        return $this;
    }

    /**
     * isset targetGroup
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTargetGroup($index)
    {
        return isset($this->targetGroup[$index]);
    }

    /**
     * unset targetGroup
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTargetGroup($index)
    {
        unset($this->targetGroup[$index]);
    }

    /**
     * Gets as targetGroup
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TargetGroup[]
     */
    public function getTargetGroup()
    {
        return $this->targetGroup;
    }

    /**
     * Sets a new targetGroup
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TargetGroup[] $targetGroup
     * @return self
     */
    public function setTargetGroup(array $targetGroup)
    {
        $this->targetGroup = $targetGroup;
        return $this;
    }

    /**
     * Adds as formOfTeaching
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\FormOfTeaching $formOfTeaching
     */
    public function addToFormOfTeaching(\CdmFr\Model\V1_1_1\CdmFr\FormOfTeaching $formOfTeaching)
    {
        $this->formOfTeaching[] = $formOfTeaching;
        return $this;
    }

    /**
     * isset formOfTeaching
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormOfTeaching($index)
    {
        return isset($this->formOfTeaching[$index]);
    }

    /**
     * unset formOfTeaching
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormOfTeaching($index)
    {
        unset($this->formOfTeaching[$index]);
    }

    /**
     * Gets as formOfTeaching
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\FormOfTeaching[]
     */
    public function getFormOfTeaching()
    {
        return $this->formOfTeaching;
    }

    /**
     * Sets a new formOfTeaching
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\FormOfTeaching[] $formOfTeaching
     * @return self
     */
    public function setFormOfTeaching(array $formOfTeaching)
    {
        $this->formOfTeaching = $formOfTeaching;
        return $this;
    }

    /**
     * Adds as formOfAssessment
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment $formOfAssessment
     */
    public function addToFormOfAssessment(\CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment $formOfAssessment)
    {
        $this->formOfAssessment[] = $formOfAssessment;
        return $this;
    }

    /**
     * isset formOfAssessment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetFormOfAssessment($index)
    {
        return isset($this->formOfAssessment[$index]);
    }

    /**
     * unset formOfAssessment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetFormOfAssessment($index)
    {
        unset($this->formOfAssessment[$index]);
    }

    /**
     * Gets as formOfAssessment
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment[]
     */
    public function getFormOfAssessment()
    {
        return $this->formOfAssessment;
    }

    /**
     * Sets a new formOfAssessment
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment[] $formOfAssessment
     * @return self
     */
    public function setFormOfAssessment(array $formOfAssessment)
    {
        $this->formOfAssessment = $formOfAssessment;
        return $this;
    }

    /**
     * Adds as benefits
     *
     * Description of benefits, e.g. grants, available
     *  for students
     *  attending the course.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType $benefits
     */
    public function addToBenefits(\CdmFr\Model\V1_1_1\CdmFr\InfoBlockType $benefits)
    {
        $this->benefits[] = $benefits;
        return $this;
    }

    /**
     * isset benefits
     *
     * Description of benefits, e.g. grants, available
     *  for students
     *  attending the course.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBenefits($index)
    {
        return isset($this->benefits[$index]);
    }

    /**
     * unset benefits
     *
     * Description of benefits, e.g. grants, available
     *  for students
     *  attending the course.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBenefits($index)
    {
        unset($this->benefits[$index]);
    }

    /**
     * Gets as benefits
     *
     * Description of benefits, e.g. grants, available
     *  for students
     *  attending the course.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType[]
     */
    public function getBenefits()
    {
        return $this->benefits;
    }

    /**
     * Sets a new benefits
     *
     * Description of benefits, e.g. grants, available
     *  for students
     *  attending the course.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType[] $benefits
     * @return self
     */
    public function setBenefits(array $benefits)
    {
        $this->benefits = $benefits;
        return $this;
    }

    /**
     * Adds as instructionLanguage
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\InstructionLanguage $instructionLanguage
     */
    public function addToInstructionLanguage(\CdmFr\Model\V1_1_1\CdmFr\InstructionLanguage $instructionLanguage)
    {
        $this->instructionLanguage[] = $instructionLanguage;
        return $this;
    }

    /**
     * isset instructionLanguage
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInstructionLanguage($index)
    {
        return isset($this->instructionLanguage[$index]);
    }

    /**
     * unset instructionLanguage
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInstructionLanguage($index)
    {
        unset($this->instructionLanguage[$index]);
    }

    /**
     * Gets as instructionLanguage
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\InstructionLanguage[]
     */
    public function getInstructionLanguage()
    {
        return $this->instructionLanguage;
    }

    /**
     * Sets a new instructionLanguage
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\InstructionLanguage[] $instructionLanguage
     * @return self
     */
    public function setInstructionLanguage(array $instructionLanguage)
    {
        $this->instructionLanguage = $instructionLanguage;
        return $this;
    }

    /**
     * Adds as overlap
     *
     * Overlap, ex between courses.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType $overlap
     */
    public function addToOverlap(\CdmFr\Model\V1_1_1\CdmFr\InfoBlockType $overlap)
    {
        $this->overlap[] = $overlap;
        return $this;
    }

    /**
     * isset overlap
     *
     * Overlap, ex between courses.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOverlap($index)
    {
        return isset($this->overlap[$index]);
    }

    /**
     * unset overlap
     *
     * Overlap, ex between courses.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOverlap($index)
    {
        unset($this->overlap[$index]);
    }

    /**
     * Gets as overlap
     *
     * Overlap, ex between courses.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType[]
     */
    public function getOverlap()
    {
        return $this->overlap;
    }

    /**
     * Sets a new overlap
     *
     * Overlap, ex between courses.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlockType[] $overlap
     * @return self
     */
    public function setOverlap(array $overlap)
    {
        $this->overlap = $overlap;
        return $this;
    }

    /**
     * Adds as syllabus
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Syllabus $syllabus
     */
    public function addToSyllabus(\CdmFr\Model\V1_1_1\CdmFr\Syllabus $syllabus)
    {
        $this->syllabus[] = $syllabus;
        return $this;
    }

    /**
     * isset syllabus
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSyllabus($index)
    {
        return isset($this->syllabus[$index]);
    }

    /**
     * unset syllabus
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSyllabus($index)
    {
        unset($this->syllabus[$index]);
    }

    /**
     * Gets as syllabus
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Syllabus[]
     */
    public function getSyllabus()
    {
        return $this->syllabus;
    }

    /**
     * Sets a new syllabus
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Syllabus[] $syllabus
     * @return self
     */
    public function setSyllabus(array $syllabus)
    {
        $this->syllabus = $syllabus;
        return $this;
    }

    /**
     * Adds as expenses
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Expenses $expenses
     */
    public function addToExpenses(\CdmFr\Model\V1_1_1\CdmFr\Expenses $expenses)
    {
        $this->expenses[] = $expenses;
        return $this;
    }

    /**
     * isset expenses
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExpenses($index)
    {
        return isset($this->expenses[$index]);
    }

    /**
     * unset expenses
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExpenses($index)
    {
        unset($this->expenses[$index]);
    }

    /**
     * Gets as expenses
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Expenses[]
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * Sets a new expenses
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Expenses[] $expenses
     * @return self
     */
    public function setExpenses(array $expenses)
    {
        $this->expenses = $expenses;
        return $this;
    }

    /**
     * Adds as universalAdjustment
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\UniversalAdjustment $universalAdjustment
     */
    public function addToUniversalAdjustment(\CdmFr\Model\V1_1_1\CdmFr\UniversalAdjustment $universalAdjustment)
    {
        $this->universalAdjustment[] = $universalAdjustment;
        return $this;
    }

    /**
     * isset universalAdjustment
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetUniversalAdjustment($index)
    {
        return isset($this->universalAdjustment[$index]);
    }

    /**
     * unset universalAdjustment
     *
     * @param scalar $index
     * @return void
     */
    public function unsetUniversalAdjustment($index)
    {
        unset($this->universalAdjustment[$index]);
    }

    /**
     * Gets as universalAdjustment
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\UniversalAdjustment[]
     */
    public function getUniversalAdjustment()
    {
        return $this->universalAdjustment;
    }

    /**
     * Sets a new universalAdjustment
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\UniversalAdjustment[] $universalAdjustment
     * @return self
     */
    public function setUniversalAdjustment(array $universalAdjustment)
    {
        $this->universalAdjustment = $universalAdjustment;
        return $this;
    }

    /**
     * Adds as exam
     *
     * Description of the exam of the course
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\ExamType $exam
     */
    public function addToExam(\CdmFr\Model\V1_1_1\CdmFr\ExamType $exam)
    {
        $this->exam[] = $exam;
        return $this;
    }

    /**
     * isset exam
     *
     * Description of the exam of the course
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExam($index)
    {
        return isset($this->exam[$index]);
    }

    /**
     * unset exam
     *
     * Description of the exam of the course
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExam($index)
    {
        unset($this->exam[$index]);
    }

    /**
     * Gets as exam
     *
     * Description of the exam of the course
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ExamType[]
     */
    public function getExam()
    {
        return $this->exam;
    }

    /**
     * Sets a new exam
     *
     * Description of the exam of the course
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ExamType[] $exam
     * @return self
     */
    public function setExam(array $exam)
    {
        $this->exam = $exam;
        return $this;
    }

    /**
     * Adds as teachingActivity
     *
     * Description of the teaching activities of the
     *  course
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\CourseType\TeachingActivityAType $teachingActivity
     */
    public function addToTeachingActivity(\CdmFr\Model\V1_1_1\CdmFr\CourseType\TeachingActivityAType $teachingActivity)
    {
        $this->teachingActivity[] = $teachingActivity;
        return $this;
    }

    /**
     * isset teachingActivity
     *
     * Description of the teaching activities of the
     *  course
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTeachingActivity($index)
    {
        return isset($this->teachingActivity[$index]);
    }

    /**
     * unset teachingActivity
     *
     * Description of the teaching activities of the
     *  course
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTeachingActivity($index)
    {
        unset($this->teachingActivity[$index]);
    }

    /**
     * Gets as teachingActivity
     *
     * Description of the teaching activities of the
     *  course
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CourseType\TeachingActivityAType[]
     */
    public function getTeachingActivity()
    {
        return $this->teachingActivity;
    }

    /**
     * Sets a new teachingActivity
     *
     * Description of the teaching activities of the
     *  course
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CourseType\TeachingActivityAType[] $teachingActivity
     * @return self
     */
    public function setTeachingActivity(array $teachingActivity)
    {
        $this->teachingActivity = $teachingActivity;
        return $this;
    }

    /**
     * Adds as contacts
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Contacts $contacts
     */
    public function addToContacts(\CdmFr\Model\V1_1_1\CdmFr\Contacts $contacts)
    {
        $this->contacts[] = $contacts;
        return $this;
    }

    /**
     * isset contacts
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContacts($index)
    {
        return isset($this->contacts[$index]);
    }

    /**
     * unset contacts
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContacts($index)
    {
        unset($this->contacts[$index]);
    }

    /**
     * Gets as contacts
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Contacts[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Contacts[] $contacts
     * @return self
     */
    public function setContacts(array $contacts)
    {
        $this->contacts = $contacts;
        return $this;
    }

    /**
     * Adds as infoBlock
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlock $infoBlock
     */
    public function addToInfoBlock(\CdmFr\Model\V1_1_1\CdmFr\InfoBlock $infoBlock)
    {
        $this->infoBlock[] = $infoBlock;
        return $this;
    }

    /**
     * isset infoBlock
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetInfoBlock($index)
    {
        return isset($this->infoBlock[$index]);
    }

    /**
     * unset infoBlock
     *
     * @param scalar $index
     * @return void
     */
    public function unsetInfoBlock($index)
    {
        unset($this->infoBlock[$index]);
    }

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\InfoBlock[]
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlock[] $infoBlock
     * @return self
     */
    public function setInfoBlock(array $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Adds as searchword
     *
     * @return self
     * @param string $searchword
     */
    public function addToSearchword($searchword)
    {
        $this->searchword[] = $searchword;
        return $this;
    }

    /**
     * isset searchword
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSearchword($index)
    {
        return isset($this->searchword[$index]);
    }

    /**
     * unset searchword
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSearchword($index)
    {
        unset($this->searchword[$index]);
    }

    /**
     * Gets as searchword
     *
     * @return string[]
     */
    public function getSearchword()
    {
        return $this->searchword;
    }

    /**
     * Sets a new searchword
     *
     * @param string $searchword
     * @return self
     */
    public function setSearchword(array $searchword)
    {
        $this->searchword = $searchword;
        return $this;
    }


}

