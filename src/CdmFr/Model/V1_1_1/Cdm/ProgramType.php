<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing ProgramType
 *
 * Description of a program. ECTS: An approved set of
 *  course units or
 *  modules recognised for the award of a specific degree
 *  form a study programme and can
 *  be defined through the set of learning
 *  outcomes to be achieved for the award of a
 *  specified number of
 *  credits. (I Norge: på univ. og høgskolenivå tilsvarer det
 *  studieprogram og studieretninger. I vgs tilsvarer det løp eller
 *  deler av løp i vgs.
 *  (GK, VK1 eller VK2).
 * XSD Type: programType
 */
class ProgramType
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
     * Shorthand identification of the study
     *  program
     *
     * @property string[] $programID
     */
    private $programID = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\ProgramName[] $programName
     */
    private $programName = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\ProgramCode[] $programCode
     */
    private $programCode = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\WebLink[] $webLink
     */
    private $webLink = null;

    /**
     * A (short) general introduction of the study
     *  program
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $programIntroduction
     */
    private $programIntroduction = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription[] $programDescription
     */
    private $programDescription = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Aip[] $aip
     */
    private $aip = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Qualification[] $qualification
     */
    private $qualification = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\PpalTeachingLanguage[] $ppalTeachingLanguage
     */
    private $ppalTeachingLanguage = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Level[] $level
     */
    private $level = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\LevelCode[] $levelCode
     */
    private $levelCode = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\LearningObjectives[] $learningObjectives
     */
    private $learningObjectives = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\AdmissionInfo[] $admissionInfo
     */
    private $admissionInfo = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RecommendedPrerequisites[] $recommendedPrerequisites
     */
    private $recommendedPrerequisites = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\FormalPrerequisites[] $formalPrerequisites
     */
    private $formalPrerequisites = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\TeachingPlace[] $teachingPlace
     */
    private $teachingPlace = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\TargetGroup[] $targetGroup
     */
    private $targetGroup = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\FormOfTeaching[] $formOfTeaching
     */
    private $formOfTeaching = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\FormOfAssessment[] $formOfAssessment
     */
    private $formOfAssessment = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InstructionLanguage[] $instructionLanguage
     */
    private $instructionLanguage = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\ProgramDuration[] $programDuration
     */
    private $programDuration = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\ProgramStructure[] $programStructure
     */
    private $programStructure = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Regulations[] $regulations
     */
    private $regulations = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\StudyAbroad[] $studyAbroad
     */
    private $studyAbroad = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Expenses[] $expenses
     */
    private $expenses = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\UniversalAdjustment[] $universalAdjustment
     */
    private $universalAdjustment = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Contacts[] $contacts
     */
    private $contacts = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock[] $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\SubProgram[] $subProgram
     */
    private $subProgram = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefProgram[] $refProgram
     */
    private $refProgram = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefHabilitation[] $refHabilitation
     */
    private $refHabilitation = null;

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
     * Adds as programID
     *
     * Shorthand identification of the study
     *  program
     *
     * @return self
     * @param string $programID
     */
    public function addToProgramID($programID)
    {
        $this->programID[] = $programID;
        return $this;
    }

    /**
     * isset programID
     *
     * Shorthand identification of the study
     *  program
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProgramID($index)
    {
        return isset($this->programID[$index]);
    }

    /**
     * unset programID
     *
     * Shorthand identification of the study
     *  program
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProgramID($index)
    {
        unset($this->programID[$index]);
    }

    /**
     * Gets as programID
     *
     * Shorthand identification of the study
     *  program
     *
     * @return string[]
     */
    public function getProgramID()
    {
        return $this->programID;
    }

    /**
     * Sets a new programID
     *
     * Shorthand identification of the study
     *  program
     *
     * @param string[] $programID
     * @return self
     */
    public function setProgramID(array $programID)
    {
        $this->programID = $programID;
        return $this;
    }

    /**
     * Adds as programName
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramName $programName
     */
    public function addToProgramName(\CdmFr\Model\V1_1_1\CdmFr\ProgramName $programName)
    {
        $this->programName[] = $programName;
        return $this;
    }

    /**
     * isset programName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProgramName($index)
    {
        return isset($this->programName[$index]);
    }

    /**
     * unset programName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProgramName($index)
    {
        unset($this->programName[$index]);
    }

    /**
     * Gets as programName
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ProgramName[]
     */
    public function getProgramName()
    {
        return $this->programName;
    }

    /**
     * Sets a new programName
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramName[] $programName
     * @return self
     */
    public function setProgramName(array $programName)
    {
        $this->programName = $programName;
        return $this;
    }

    /**
     * Adds as programCode
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramCode $programCode
     */
    public function addToProgramCode(\CdmFr\Model\V1_1_1\CdmFr\ProgramCode $programCode)
    {
        $this->programCode[] = $programCode;
        return $this;
    }

    /**
     * isset programCode
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProgramCode($index)
    {
        return isset($this->programCode[$index]);
    }

    /**
     * unset programCode
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProgramCode($index)
    {
        unset($this->programCode[$index]);
    }

    /**
     * Gets as programCode
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ProgramCode[]
     */
    public function getProgramCode()
    {
        return $this->programCode;
    }

    /**
     * Sets a new programCode
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramCode[] $programCode
     * @return self
     */
    public function setProgramCode(array $programCode)
    {
        $this->programCode = $programCode;
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
     * Adds as programIntroduction
     *
     * A (short) general introduction of the study
     *  program
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $programIntroduction
     */
    public function addToProgramIntroduction(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $programIntroduction)
    {
        $this->programIntroduction[] = $programIntroduction;
        return $this;
    }

    /**
     * isset programIntroduction
     *
     * A (short) general introduction of the study
     *  program
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProgramIntroduction($index)
    {
        return isset($this->programIntroduction[$index]);
    }

    /**
     * unset programIntroduction
     *
     * A (short) general introduction of the study
     *  program
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProgramIntroduction($index)
    {
        unset($this->programIntroduction[$index]);
    }

    /**
     * Gets as programIntroduction
     *
     * A (short) general introduction of the study
     *  program
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getProgramIntroduction()
    {
        return $this->programIntroduction;
    }

    /**
     * Sets a new programIntroduction
     *
     * A (short) general introduction of the study
     *  program
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $programIntroduction
     * @return self
     */
    public function setProgramIntroduction(array $programIntroduction)
    {
        $this->programIntroduction = $programIntroduction;
        return $this;
    }

    /**
     * Adds as programDescription
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription $programDescription
     */
    public function addToProgramDescription(\CdmFr\Model\V1_1_1\CdmFr\ProgramDescription $programDescription)
    {
        $this->programDescription[] = $programDescription;
        return $this;
    }

    /**
     * isset programDescription
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProgramDescription($index)
    {
        return isset($this->programDescription[$index]);
    }

    /**
     * unset programDescription
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProgramDescription($index)
    {
        unset($this->programDescription[$index]);
    }

    /**
     * Gets as programDescription
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription[]
     */
    public function getProgramDescription()
    {
        return $this->programDescription;
    }

    /**
     * Sets a new programDescription
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramDescription[] $programDescription
     * @return self
     */
    public function setProgramDescription(array $programDescription)
    {
        $this->programDescription = $programDescription;
        return $this;
    }

    /**
     * Adds as aip
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Aip $aip
     */
    public function addToAip(\CdmFr\Model\V1_1_1\CdmFr\Aip $aip)
    {
        $this->aip[] = $aip;
        return $this;
    }

    /**
     * isset aip
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAip($index)
    {
        return isset($this->aip[$index]);
    }

    /**
     * unset aip
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAip($index)
    {
        unset($this->aip[$index]);
    }

    /**
     * Gets as aip
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Aip[]
     */
    public function getAip()
    {
        return $this->aip;
    }

    /**
     * Sets a new aip
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Aip[] $aip
     * @return self
     */
    public function setAip(array $aip)
    {
        $this->aip = $aip;
        return $this;
    }

    /**
     * Adds as qualification
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\Qualification $qualification
     */
    public function addToQualification(\CdmFr\Model\V1_1_1\Cdm\Qualification $qualification)
    {
        $this->qualification[] = $qualification;
        return $this;
    }

    /**
     * isset qualification
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetQualification($index)
    {
        return isset($this->qualification[$index]);
    }

    /**
     * unset qualification
     *
     * @param scalar $index
     * @return void
     */
    public function unsetQualification($index)
    {
        unset($this->qualification[$index]);
    }

    /**
     * Gets as qualification
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Qualification[]
     */
    public function getQualification()
    {
        return $this->qualification;
    }

    /**
     * Sets a new qualification
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Qualification[] $qualification
     * @return self
     */
    public function setQualification(array $qualification)
    {
        $this->qualification = $qualification;
        return $this;
    }

    /**
     * Adds as ppalTeachingLanguage
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\PpalTeachingLanguage $ppalTeachingLanguage
     */
    public function addToPpalTeachingLanguage(\CdmFr\Model\V1_1_1\CdmFr\PpalTeachingLanguage $ppalTeachingLanguage)
    {
        $this->ppalTeachingLanguage[] = $ppalTeachingLanguage;
        return $this;
    }

    /**
     * isset ppalTeachingLanguage
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPpalTeachingLanguage($index)
    {
        return isset($this->ppalTeachingLanguage[$index]);
    }

    /**
     * unset ppalTeachingLanguage
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPpalTeachingLanguage($index)
    {
        unset($this->ppalTeachingLanguage[$index]);
    }

    /**
     * Gets as ppalTeachingLanguage
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\PpalTeachingLanguage[]
     */
    public function getPpalTeachingLanguage()
    {
        return $this->ppalTeachingLanguage;
    }

    /**
     * Sets a new ppalTeachingLanguage
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\PpalTeachingLanguage[] $ppalTeachingLanguage
     * @return self
     */
    public function setPpalTeachingLanguage(array $ppalTeachingLanguage)
    {
        $this->ppalTeachingLanguage = $ppalTeachingLanguage;
        return $this;
    }

    /**
     * Adds as level
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\Level $level
     */
    public function addToLevel(\CdmFr\Model\V1_1_1\Cdm\Level $level)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\Level[]
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Level[] $level
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
     * @param \CdmFr\Model\V1_1_1\Cdm\LevelCode $levelCode
     */
    public function addToLevelCode(\CdmFr\Model\V1_1_1\Cdm\LevelCode $levelCode)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\LevelCode[]
     */
    public function getLevelCode()
    {
        return $this->levelCode;
    }

    /**
     * Sets a new levelCode
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\LevelCode[] $levelCode
     * @return self
     */
    public function setLevelCode(array $levelCode)
    {
        $this->levelCode = $levelCode;
        return $this;
    }

    /**
     * Adds as learningObjectives
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\LearningObjectives $learningObjectives
     */
    public function addToLearningObjectives(\CdmFr\Model\V1_1_1\Cdm\LearningObjectives $learningObjectives)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\LearningObjectives[]
     */
    public function getLearningObjectives()
    {
        return $this->learningObjectives;
    }

    /**
     * Sets a new learningObjectives
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\LearningObjectives[] $learningObjectives
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
     * @param \CdmFr\Model\V1_1_1\Cdm\AdmissionInfo $admissionInfo
     */
    public function addToAdmissionInfo(\CdmFr\Model\V1_1_1\Cdm\AdmissionInfo $admissionInfo)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\AdmissionInfo[]
     */
    public function getAdmissionInfo()
    {
        return $this->admissionInfo;
    }

    /**
     * Sets a new admissionInfo
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\AdmissionInfo[] $admissionInfo
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
     * @param \CdmFr\Model\V1_1_1\Cdm\RecommendedPrerequisites $recommendedPrerequisites
     */
    public function addToRecommendedPrerequisites(\CdmFr\Model\V1_1_1\Cdm\RecommendedPrerequisites $recommendedPrerequisites)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\RecommendedPrerequisites[]
     */
    public function getRecommendedPrerequisites()
    {
        return $this->recommendedPrerequisites;
    }

    /**
     * Sets a new recommendedPrerequisites
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\RecommendedPrerequisites[] $recommendedPrerequisites
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
     * @param \CdmFr\Model\V1_1_1\Cdm\FormalPrerequisites $formalPrerequisites
     */
    public function addToFormalPrerequisites(\CdmFr\Model\V1_1_1\Cdm\FormalPrerequisites $formalPrerequisites)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\FormalPrerequisites[]
     */
    public function getFormalPrerequisites()
    {
        return $this->formalPrerequisites;
    }

    /**
     * Sets a new formalPrerequisites
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\FormalPrerequisites[] $formalPrerequisites
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
     * @param \CdmFr\Model\V1_1_1\Cdm\TeachingPlace $teachingPlace
     */
    public function addToTeachingPlace(\CdmFr\Model\V1_1_1\Cdm\TeachingPlace $teachingPlace)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\TeachingPlace[]
     */
    public function getTeachingPlace()
    {
        return $this->teachingPlace;
    }

    /**
     * Sets a new teachingPlace
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TeachingPlace[] $teachingPlace
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
     * @param \CdmFr\Model\V1_1_1\Cdm\TargetGroup $targetGroup
     */
    public function addToTargetGroup(\CdmFr\Model\V1_1_1\Cdm\TargetGroup $targetGroup)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\TargetGroup[]
     */
    public function getTargetGroup()
    {
        return $this->targetGroup;
    }

    /**
     * Sets a new targetGroup
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TargetGroup[] $targetGroup
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
     * @param \CdmFr\Model\V1_1_1\Cdm\FormOfTeaching $formOfTeaching
     */
    public function addToFormOfTeaching(\CdmFr\Model\V1_1_1\Cdm\FormOfTeaching $formOfTeaching)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\FormOfTeaching[]
     */
    public function getFormOfTeaching()
    {
        return $this->formOfTeaching;
    }

    /**
     * Sets a new formOfTeaching
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\FormOfTeaching[] $formOfTeaching
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
     * Adds as instructionLanguage
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InstructionLanguage $instructionLanguage
     */
    public function addToInstructionLanguage(\CdmFr\Model\V1_1_1\Cdm\InstructionLanguage $instructionLanguage)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\InstructionLanguage[]
     */
    public function getInstructionLanguage()
    {
        return $this->instructionLanguage;
    }

    /**
     * Sets a new instructionLanguage
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InstructionLanguage[] $instructionLanguage
     * @return self
     */
    public function setInstructionLanguage(array $instructionLanguage)
    {
        $this->instructionLanguage = $instructionLanguage;
        return $this;
    }

    /**
     * Adds as programDuration
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\ProgramDuration $programDuration
     */
    public function addToProgramDuration(\CdmFr\Model\V1_1_1\Cdm\ProgramDuration $programDuration)
    {
        $this->programDuration[] = $programDuration;
        return $this;
    }

    /**
     * isset programDuration
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProgramDuration($index)
    {
        return isset($this->programDuration[$index]);
    }

    /**
     * unset programDuration
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProgramDuration($index)
    {
        unset($this->programDuration[$index]);
    }

    /**
     * Gets as programDuration
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\ProgramDuration[]
     */
    public function getProgramDuration()
    {
        return $this->programDuration;
    }

    /**
     * Sets a new programDuration
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\ProgramDuration[] $programDuration
     * @return self
     */
    public function setProgramDuration(array $programDuration)
    {
        $this->programDuration = $programDuration;
        return $this;
    }

    /**
     * Adds as programStructure
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramStructure $programStructure
     */
    public function addToProgramStructure(\CdmFr\Model\V1_1_1\CdmFr\ProgramStructure $programStructure)
    {
        $this->programStructure[] = $programStructure;
        return $this;
    }

    /**
     * isset programStructure
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProgramStructure($index)
    {
        return isset($this->programStructure[$index]);
    }

    /**
     * unset programStructure
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProgramStructure($index)
    {
        unset($this->programStructure[$index]);
    }

    /**
     * Gets as programStructure
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ProgramStructure[]
     */
    public function getProgramStructure()
    {
        return $this->programStructure;
    }

    /**
     * Sets a new programStructure
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ProgramStructure[] $programStructure
     * @return self
     */
    public function setProgramStructure(array $programStructure)
    {
        $this->programStructure = $programStructure;
        return $this;
    }

    /**
     * Adds as regulations
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\Regulations $regulations
     */
    public function addToRegulations(\CdmFr\Model\V1_1_1\Cdm\Regulations $regulations)
    {
        $this->regulations[] = $regulations;
        return $this;
    }

    /**
     * isset regulations
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRegulations($index)
    {
        return isset($this->regulations[$index]);
    }

    /**
     * unset regulations
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRegulations($index)
    {
        unset($this->regulations[$index]);
    }

    /**
     * Gets as regulations
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Regulations[]
     */
    public function getRegulations()
    {
        return $this->regulations;
    }

    /**
     * Sets a new regulations
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Regulations[] $regulations
     * @return self
     */
    public function setRegulations(array $regulations)
    {
        $this->regulations = $regulations;
        return $this;
    }

    /**
     * Adds as studyAbroad
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\StudyAbroad $studyAbroad
     */
    public function addToStudyAbroad(\CdmFr\Model\V1_1_1\Cdm\StudyAbroad $studyAbroad)
    {
        $this->studyAbroad[] = $studyAbroad;
        return $this;
    }

    /**
     * isset studyAbroad
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStudyAbroad($index)
    {
        return isset($this->studyAbroad[$index]);
    }

    /**
     * unset studyAbroad
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStudyAbroad($index)
    {
        unset($this->studyAbroad[$index]);
    }

    /**
     * Gets as studyAbroad
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\StudyAbroad[]
     */
    public function getStudyAbroad()
    {
        return $this->studyAbroad;
    }

    /**
     * Sets a new studyAbroad
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\StudyAbroad[] $studyAbroad
     * @return self
     */
    public function setStudyAbroad(array $studyAbroad)
    {
        $this->studyAbroad = $studyAbroad;
        return $this;
    }

    /**
     * Adds as expenses
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\Expenses $expenses
     */
    public function addToExpenses(\CdmFr\Model\V1_1_1\Cdm\Expenses $expenses)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\Expenses[]
     */
    public function getExpenses()
    {
        return $this->expenses;
    }

    /**
     * Sets a new expenses
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Expenses[] $expenses
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
     * @param \CdmFr\Model\V1_1_1\Cdm\UniversalAdjustment $universalAdjustment
     */
    public function addToUniversalAdjustment(\CdmFr\Model\V1_1_1\Cdm\UniversalAdjustment $universalAdjustment)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\UniversalAdjustment[]
     */
    public function getUniversalAdjustment()
    {
        return $this->universalAdjustment;
    }

    /**
     * Sets a new universalAdjustment
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\UniversalAdjustment[] $universalAdjustment
     * @return self
     */
    public function setUniversalAdjustment(array $universalAdjustment)
    {
        $this->universalAdjustment = $universalAdjustment;
        return $this;
    }

    /**
     * Adds as contacts
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\Contacts $contacts
     */
    public function addToContacts(\CdmFr\Model\V1_1_1\Cdm\Contacts $contacts)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\Contacts[]
     */
    public function getContacts()
    {
        return $this->contacts;
    }

    /**
     * Sets a new contacts
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Contacts[] $contacts
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
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    public function addToInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock[]
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock[] $infoBlock
     * @return self
     */
    public function setInfoBlock(array $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Adds as subProgram
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\SubProgram $subProgram
     */
    public function addToSubProgram(\CdmFr\Model\V1_1_1\Cdm\SubProgram $subProgram)
    {
        $this->subProgram[] = $subProgram;
        return $this;
    }

    /**
     * isset subProgram
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubProgram($index)
    {
        return isset($this->subProgram[$index]);
    }

    /**
     * unset subProgram
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubProgram($index)
    {
        unset($this->subProgram[$index]);
    }

    /**
     * Gets as subProgram
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\SubProgram[]
     */
    public function getSubProgram()
    {
        return $this->subProgram;
    }

    /**
     * Sets a new subProgram
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\SubProgram[] $subProgram
     * @return self
     */
    public function setSubProgram(array $subProgram)
    {
        $this->subProgram = $subProgram;
        return $this;
    }

    /**
     * Adds as refProgram
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\RefProgram $refProgram
     */
    public function addToRefProgram(\CdmFr\Model\V1_1_1\Cdm\RefProgram $refProgram)
    {
        $this->refProgram[] = $refProgram;
        return $this;
    }

    /**
     * isset refProgram
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefProgram($index)
    {
        return isset($this->refProgram[$index]);
    }

    /**
     * unset refProgram
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefProgram($index)
    {
        unset($this->refProgram[$index]);
    }

    /**
     * Gets as refProgram
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\RefProgram[]
     */
    public function getRefProgram()
    {
        return $this->refProgram;
    }

    /**
     * Sets a new refProgram
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\RefProgram[] $refProgram
     * @return self
     */
    public function setRefProgram(array $refProgram)
    {
        $this->refProgram = $refProgram;
        return $this;
    }

    /**
     * Adds as refHabilitation
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefHabilitation $refHabilitation
     */
    public function addToRefHabilitation(\CdmFr\Model\V1_1_1\CdmFr\RefHabilitation $refHabilitation)
    {
        $this->refHabilitation[] = $refHabilitation;
        return $this;
    }

    /**
     * isset refHabilitation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefHabilitation($index)
    {
        return isset($this->refHabilitation[$index]);
    }

    /**
     * unset refHabilitation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefHabilitation($index)
    {
        unset($this->refHabilitation[$index]);
    }

    /**
     * Gets as refHabilitation
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefHabilitation[]
     */
    public function getRefHabilitation()
    {
        return $this->refHabilitation;
    }

    /**
     * Sets a new refHabilitation
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefHabilitation[] $refHabilitation
     * @return self
     */
    public function setRefHabilitation(array $refHabilitation)
    {
        $this->refHabilitation = $refHabilitation;
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

