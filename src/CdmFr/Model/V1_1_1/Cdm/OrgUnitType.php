<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing OrgUnitType
 *
 * An element of type orgUnitType represents an
 *  organisational unit that
 *  organises or provides study programs and
 *  courses. In general, a given program or
 *  course may be
 *  organised/provided by multiple organisational units. An
 *  organisational
 *  unit can have a hierarchical structure with
 *  subordinate organisational units (e.g.
 *  university, faculty,
 *  institute). The concept of organisational unit is supposed to
 *  encompass all organisational structures with educational offerings
 *  from a
 *  traditional university to a loosely defined consortium.
 *  .
 * XSD Type: orgUnitType
 */
class OrgUnitType
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
     * Shorthand identification of the organisation
     *  unit
     *
     * @property string[] $orgUnitID
     */
    private $orgUnitID = null;

    /**
     * Full name of the organisation unit
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $orgUnitName
     */
    private $orgUnitName = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\OrgUnitSecondName[] $orgUnitSecondName
     */
    private $orgUnitSecondName = null;

    /**
     * Acronym for the organisation unit
     *
     * @property string[] $orgUnitAcronym
     */
    private $orgUnitAcronym = null;

    /**
     * An organisation unit code according to a
     *  codification scheme.
     *  The choice of codification rule can be given
     *  by the attribute codeSet.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\OrgUnitType\OrgUnitCodeAType[] $orgUnitCode
     */
    private $orgUnitCode = null;

    /**
     * Kind of organisation unit, ex university, high
     *  school and
     *  responsible body such as public or privat.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\OrgUnitType\OrgUnitKindAType[] $orgUnitKind
     */
    private $orgUnitKind = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\WebLink[] $webLink
     */
    private $webLink = null;

    /**
     * A general introduction of the organisational
     *  unit
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $orgUnitIntroduction
     */
    private $orgUnitIntroduction = null;

    /**
     * A general description of the organisational
     *  unit
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $orgUnitDescription
     */
    private $orgUnitDescription = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\AdmissionInfo[] $admissionInfo
     */
    private $admissionInfo = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Regulations[] $regulations
     */
    private $regulations = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Expenses[] $expenses
     */
    private $expenses = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\StudentFacilities[] $studentFacilities
     */
    private $studentFacilities = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\UniversalAdjustment[] $universalAdjustment
     */
    private $universalAdjustment = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Contacts[] $contacts
     */
    private $contacts = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\OrgUnitAip[] $orgUnitAip
     */
    private $orgUnitAip = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock[] $infoBlock
     */
    private $infoBlock = null;

    /**
     * programme de formation porté par cette
     *  entité
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\Program[] $program
     */
    private $program = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefProgram[] $refProgram
     */
    private $refProgram = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Course[] $course
     */
    private $course = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefCourse[] $refCourse
     */
    private $refCourse = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Person[] $person
     */
    private $person = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefPerson[] $refPerson
     */
    private $refPerson = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\OrgUnit[] $orgUnit
     */
    private $orgUnit = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefOrgUnit[] $refOrgUnit
     */
    private $refOrgUnit = null;

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
     * Adds as orgUnitID
     *
     * Shorthand identification of the organisation
     *  unit
     *
     * @return self
     * @param string $orgUnitID
     */
    public function addToOrgUnitID($orgUnitID)
    {
        $this->orgUnitID[] = $orgUnitID;
        return $this;
    }

    /**
     * isset orgUnitID
     *
     * Shorthand identification of the organisation
     *  unit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrgUnitID($index)
    {
        return isset($this->orgUnitID[$index]);
    }

    /**
     * unset orgUnitID
     *
     * Shorthand identification of the organisation
     *  unit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrgUnitID($index)
    {
        unset($this->orgUnitID[$index]);
    }

    /**
     * Gets as orgUnitID
     *
     * Shorthand identification of the organisation
     *  unit
     *
     * @return string[]
     */
    public function getOrgUnitID()
    {
        return $this->orgUnitID;
    }

    /**
     * Sets a new orgUnitID
     *
     * Shorthand identification of the organisation
     *  unit
     *
     * @param string[] $orgUnitID
     * @return self
     */
    public function setOrgUnitID(array $orgUnitID)
    {
        $this->orgUnitID = $orgUnitID;
        return $this;
    }

    /**
     * Adds as text
     *
     * Full name of the organisation unit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToOrgUnitName(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->orgUnitName[] = $text;
        return $this;
    }

    /**
     * isset orgUnitName
     *
     * Full name of the organisation unit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrgUnitName($index)
    {
        return isset($this->orgUnitName[$index]);
    }

    /**
     * unset orgUnitName
     *
     * Full name of the organisation unit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrgUnitName($index)
    {
        unset($this->orgUnitName[$index]);
    }

    /**
     * Gets as orgUnitName
     *
     * Full name of the organisation unit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getOrgUnitName()
    {
        return $this->orgUnitName;
    }

    /**
     * Sets a new orgUnitName
     *
     * Full name of the organisation unit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $orgUnitName
     * @return self
     */
    public function setOrgUnitName(array $orgUnitName)
    {
        $this->orgUnitName = $orgUnitName;
        return $this;
    }

    /**
     * Adds as orgUnitSecondName
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\OrgUnitSecondName $orgUnitSecondName
     */
    public function addToOrgUnitSecondName(\CdmFr\Model\V1_1_1\CdmFr\OrgUnitSecondName $orgUnitSecondName)
    {
        $this->orgUnitSecondName[] = $orgUnitSecondName;
        return $this;
    }

    /**
     * isset orgUnitSecondName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrgUnitSecondName($index)
    {
        return isset($this->orgUnitSecondName[$index]);
    }

    /**
     * unset orgUnitSecondName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrgUnitSecondName($index)
    {
        unset($this->orgUnitSecondName[$index]);
    }

    /**
     * Gets as orgUnitSecondName
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\OrgUnitSecondName[]
     */
    public function getOrgUnitSecondName()
    {
        return $this->orgUnitSecondName;
    }

    /**
     * Sets a new orgUnitSecondName
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\OrgUnitSecondName[] $orgUnitSecondName
     * @return self
     */
    public function setOrgUnitSecondName(array $orgUnitSecondName)
    {
        $this->orgUnitSecondName = $orgUnitSecondName;
        return $this;
    }

    /**
     * Adds as orgUnitAcronym
     *
     * Acronym for the organisation unit
     *
     * @return self
     * @param string $orgUnitAcronym
     */
    public function addToOrgUnitAcronym($orgUnitAcronym)
    {
        $this->orgUnitAcronym[] = $orgUnitAcronym;
        return $this;
    }

    /**
     * isset orgUnitAcronym
     *
     * Acronym for the organisation unit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrgUnitAcronym($index)
    {
        return isset($this->orgUnitAcronym[$index]);
    }

    /**
     * unset orgUnitAcronym
     *
     * Acronym for the organisation unit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrgUnitAcronym($index)
    {
        unset($this->orgUnitAcronym[$index]);
    }

    /**
     * Gets as orgUnitAcronym
     *
     * Acronym for the organisation unit
     *
     * @return string[]
     */
    public function getOrgUnitAcronym()
    {
        return $this->orgUnitAcronym;
    }

    /**
     * Sets a new orgUnitAcronym
     *
     * Acronym for the organisation unit
     *
     * @param string[] $orgUnitAcronym
     * @return self
     */
    public function setOrgUnitAcronym(array $orgUnitAcronym)
    {
        $this->orgUnitAcronym = $orgUnitAcronym;
        return $this;
    }

    /**
     * Adds as orgUnitCode
     *
     * An organisation unit code according to a
     *  codification scheme.
     *  The choice of codification rule can be given
     *  by the attribute codeSet.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\OrgUnitType\OrgUnitCodeAType $orgUnitCode
     */
    public function addToOrgUnitCode(\CdmFr\Model\V1_1_1\Cdm\OrgUnitType\OrgUnitCodeAType $orgUnitCode)
    {
        $this->orgUnitCode[] = $orgUnitCode;
        return $this;
    }

    /**
     * isset orgUnitCode
     *
     * An organisation unit code according to a
     *  codification scheme.
     *  The choice of codification rule can be given
     *  by the attribute codeSet.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrgUnitCode($index)
    {
        return isset($this->orgUnitCode[$index]);
    }

    /**
     * unset orgUnitCode
     *
     * An organisation unit code according to a
     *  codification scheme.
     *  The choice of codification rule can be given
     *  by the attribute codeSet.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrgUnitCode($index)
    {
        unset($this->orgUnitCode[$index]);
    }

    /**
     * Gets as orgUnitCode
     *
     * An organisation unit code according to a
     *  codification scheme.
     *  The choice of codification rule can be given
     *  by the attribute codeSet.
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\OrgUnitType\OrgUnitCodeAType[]
     */
    public function getOrgUnitCode()
    {
        return $this->orgUnitCode;
    }

    /**
     * Sets a new orgUnitCode
     *
     * An organisation unit code according to a
     *  codification scheme.
     *  The choice of codification rule can be given
     *  by the attribute codeSet.
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\OrgUnitType\OrgUnitCodeAType[] $orgUnitCode
     * @return self
     */
    public function setOrgUnitCode(array $orgUnitCode)
    {
        $this->orgUnitCode = $orgUnitCode;
        return $this;
    }

    /**
     * Adds as orgUnitKind
     *
     * Kind of organisation unit, ex university, high
     *  school and
     *  responsible body such as public or privat.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\OrgUnitType\OrgUnitKindAType $orgUnitKind
     */
    public function addToOrgUnitKind(\CdmFr\Model\V1_1_1\Cdm\OrgUnitType\OrgUnitKindAType $orgUnitKind)
    {
        $this->orgUnitKind[] = $orgUnitKind;
        return $this;
    }

    /**
     * isset orgUnitKind
     *
     * Kind of organisation unit, ex university, high
     *  school and
     *  responsible body such as public or privat.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrgUnitKind($index)
    {
        return isset($this->orgUnitKind[$index]);
    }

    /**
     * unset orgUnitKind
     *
     * Kind of organisation unit, ex university, high
     *  school and
     *  responsible body such as public or privat.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrgUnitKind($index)
    {
        unset($this->orgUnitKind[$index]);
    }

    /**
     * Gets as orgUnitKind
     *
     * Kind of organisation unit, ex university, high
     *  school and
     *  responsible body such as public or privat.
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\OrgUnitType\OrgUnitKindAType[]
     */
    public function getOrgUnitKind()
    {
        return $this->orgUnitKind;
    }

    /**
     * Sets a new orgUnitKind
     *
     * Kind of organisation unit, ex university, high
     *  school and
     *  responsible body such as public or privat.
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\OrgUnitType\OrgUnitKindAType[] $orgUnitKind
     * @return self
     */
    public function setOrgUnitKind(array $orgUnitKind)
    {
        $this->orgUnitKind = $orgUnitKind;
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
     * Adds as orgUnitIntroduction
     *
     * A general introduction of the organisational
     *  unit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $orgUnitIntroduction
     */
    public function addToOrgUnitIntroduction(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $orgUnitIntroduction)
    {
        $this->orgUnitIntroduction[] = $orgUnitIntroduction;
        return $this;
    }

    /**
     * isset orgUnitIntroduction
     *
     * A general introduction of the organisational
     *  unit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrgUnitIntroduction($index)
    {
        return isset($this->orgUnitIntroduction[$index]);
    }

    /**
     * unset orgUnitIntroduction
     *
     * A general introduction of the organisational
     *  unit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrgUnitIntroduction($index)
    {
        unset($this->orgUnitIntroduction[$index]);
    }

    /**
     * Gets as orgUnitIntroduction
     *
     * A general introduction of the organisational
     *  unit
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getOrgUnitIntroduction()
    {
        return $this->orgUnitIntroduction;
    }

    /**
     * Sets a new orgUnitIntroduction
     *
     * A general introduction of the organisational
     *  unit
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $orgUnitIntroduction
     * @return self
     */
    public function setOrgUnitIntroduction(array $orgUnitIntroduction)
    {
        $this->orgUnitIntroduction = $orgUnitIntroduction;
        return $this;
    }

    /**
     * Adds as orgUnitDescription
     *
     * A general description of the organisational
     *  unit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $orgUnitDescription
     */
    public function addToOrgUnitDescription(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $orgUnitDescription)
    {
        $this->orgUnitDescription[] = $orgUnitDescription;
        return $this;
    }

    /**
     * isset orgUnitDescription
     *
     * A general description of the organisational
     *  unit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrgUnitDescription($index)
    {
        return isset($this->orgUnitDescription[$index]);
    }

    /**
     * unset orgUnitDescription
     *
     * A general description of the organisational
     *  unit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrgUnitDescription($index)
    {
        unset($this->orgUnitDescription[$index]);
    }

    /**
     * Gets as orgUnitDescription
     *
     * A general description of the organisational
     *  unit
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getOrgUnitDescription()
    {
        return $this->orgUnitDescription;
    }

    /**
     * Sets a new orgUnitDescription
     *
     * A general description of the organisational
     *  unit
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $orgUnitDescription
     * @return self
     */
    public function setOrgUnitDescription(array $orgUnitDescription)
    {
        $this->orgUnitDescription = $orgUnitDescription;
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
     * Adds as studentFacilities
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\StudentFacilities $studentFacilities
     */
    public function addToStudentFacilities(\CdmFr\Model\V1_1_1\Cdm\StudentFacilities $studentFacilities)
    {
        $this->studentFacilities[] = $studentFacilities;
        return $this;
    }

    /**
     * isset studentFacilities
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetStudentFacilities($index)
    {
        return isset($this->studentFacilities[$index]);
    }

    /**
     * unset studentFacilities
     *
     * @param scalar $index
     * @return void
     */
    public function unsetStudentFacilities($index)
    {
        unset($this->studentFacilities[$index]);
    }

    /**
     * Gets as studentFacilities
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\StudentFacilities[]
     */
    public function getStudentFacilities()
    {
        return $this->studentFacilities;
    }

    /**
     * Sets a new studentFacilities
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\StudentFacilities[] $studentFacilities
     * @return self
     */
    public function setStudentFacilities(array $studentFacilities)
    {
        $this->studentFacilities = $studentFacilities;
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
     * Adds as orgUnitAip
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\OrgUnitAip $orgUnitAip
     */
    public function addToOrgUnitAip(\CdmFr\Model\V1_1_1\CdmFr\OrgUnitAip $orgUnitAip)
    {
        $this->orgUnitAip[] = $orgUnitAip;
        return $this;
    }

    /**
     * isset orgUnitAip
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrgUnitAip($index)
    {
        return isset($this->orgUnitAip[$index]);
    }

    /**
     * unset orgUnitAip
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrgUnitAip($index)
    {
        unset($this->orgUnitAip[$index]);
    }

    /**
     * Gets as orgUnitAip
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\OrgUnitAip[]
     */
    public function getOrgUnitAip()
    {
        return $this->orgUnitAip;
    }

    /**
     * Sets a new orgUnitAip
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\OrgUnitAip[] $orgUnitAip
     * @return self
     */
    public function setOrgUnitAip(array $orgUnitAip)
    {
        $this->orgUnitAip = $orgUnitAip;
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
     * Adds as program
     *
     * programme de formation porté par cette
     *  entité
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\Program $program
     */
    public function addToProgram(\CdmFr\Model\V1_1_1\Cdm\Program $program)
    {
        $this->program[] = $program;
        return $this;
    }

    /**
     * isset program
     *
     * programme de formation porté par cette
     *  entité
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProgram($index)
    {
        return isset($this->program[$index]);
    }

    /**
     * unset program
     *
     * programme de formation porté par cette
     *  entité
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProgram($index)
    {
        unset($this->program[$index]);
    }

    /**
     * Gets as program
     *
     * programme de formation porté par cette
     *  entité
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Program[]
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Sets a new program
     *
     * programme de formation porté par cette
     *  entité
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Program[] $program
     * @return self
     */
    public function setProgram(array $program)
    {
        $this->program = $program;
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
     * Adds as course
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\Course $course
     */
    public function addToCourse(\CdmFr\Model\V1_1_1\Cdm\Course $course)
    {
        $this->course[] = $course;
        return $this;
    }

    /**
     * isset course
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCourse($index)
    {
        return isset($this->course[$index]);
    }

    /**
     * unset course
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCourse($index)
    {
        unset($this->course[$index]);
    }

    /**
     * Gets as course
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Course[]
     */
    public function getCourse()
    {
        return $this->course;
    }

    /**
     * Sets a new course
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Course[] $course
     * @return self
     */
    public function setCourse(array $course)
    {
        $this->course = $course;
        return $this;
    }

    /**
     * Adds as refCourse
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\RefCourse $refCourse
     */
    public function addToRefCourse(\CdmFr\Model\V1_1_1\Cdm\RefCourse $refCourse)
    {
        $this->refCourse[] = $refCourse;
        return $this;
    }

    /**
     * isset refCourse
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefCourse($index)
    {
        return isset($this->refCourse[$index]);
    }

    /**
     * unset refCourse
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefCourse($index)
    {
        unset($this->refCourse[$index]);
    }

    /**
     * Gets as refCourse
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\RefCourse[]
     */
    public function getRefCourse()
    {
        return $this->refCourse;
    }

    /**
     * Sets a new refCourse
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\RefCourse[] $refCourse
     * @return self
     */
    public function setRefCourse(array $refCourse)
    {
        $this->refCourse = $refCourse;
        return $this;
    }

    /**
     * Adds as person
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\Person $person
     */
    public function addToPerson(\CdmFr\Model\V1_1_1\Cdm\Person $person)
    {
        $this->person[] = $person;
        return $this;
    }

    /**
     * isset person
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPerson($index)
    {
        return isset($this->person[$index]);
    }

    /**
     * unset person
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPerson($index)
    {
        unset($this->person[$index]);
    }

    /**
     * Gets as person
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Person[]
     */
    public function getPerson()
    {
        return $this->person;
    }

    /**
     * Sets a new person
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Person[] $person
     * @return self
     */
    public function setPerson(array $person)
    {
        $this->person = $person;
        return $this;
    }

    /**
     * Adds as refPerson
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\RefPerson $refPerson
     */
    public function addToRefPerson(\CdmFr\Model\V1_1_1\Cdm\RefPerson $refPerson)
    {
        $this->refPerson[] = $refPerson;
        return $this;
    }

    /**
     * isset refPerson
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefPerson($index)
    {
        return isset($this->refPerson[$index]);
    }

    /**
     * unset refPerson
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefPerson($index)
    {
        unset($this->refPerson[$index]);
    }

    /**
     * Gets as refPerson
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\RefPerson[]
     */
    public function getRefPerson()
    {
        return $this->refPerson;
    }

    /**
     * Sets a new refPerson
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\RefPerson[] $refPerson
     * @return self
     */
    public function setRefPerson(array $refPerson)
    {
        $this->refPerson = $refPerson;
        return $this;
    }

    /**
     * Adds as orgUnit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\OrgUnit $orgUnit
     */
    public function addToOrgUnit(\CdmFr\Model\V1_1_1\Cdm\OrgUnit $orgUnit)
    {
        $this->orgUnit[] = $orgUnit;
        return $this;
    }

    /**
     * isset orgUnit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrgUnit($index)
    {
        return isset($this->orgUnit[$index]);
    }

    /**
     * unset orgUnit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrgUnit($index)
    {
        unset($this->orgUnit[$index]);
    }

    /**
     * Gets as orgUnit
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\OrgUnit[]
     */
    public function getOrgUnit()
    {
        return $this->orgUnit;
    }

    /**
     * Sets a new orgUnit
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\OrgUnit[] $orgUnit
     * @return self
     */
    public function setOrgUnit(array $orgUnit)
    {
        $this->orgUnit = $orgUnit;
        return $this;
    }

    /**
     * Adds as refOrgUnit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\RefOrgUnit $refOrgUnit
     */
    public function addToRefOrgUnit(\CdmFr\Model\V1_1_1\Cdm\RefOrgUnit $refOrgUnit)
    {
        $this->refOrgUnit[] = $refOrgUnit;
        return $this;
    }

    /**
     * isset refOrgUnit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefOrgUnit($index)
    {
        return isset($this->refOrgUnit[$index]);
    }

    /**
     * unset refOrgUnit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefOrgUnit($index)
    {
        unset($this->refOrgUnit[$index]);
    }

    /**
     * Gets as refOrgUnit
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\RefOrgUnit[]
     */
    public function getRefOrgUnit()
    {
        return $this->refOrgUnit;
    }

    /**
     * Sets a new refOrgUnit
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\RefOrgUnit[] $refOrgUnit
     * @return self
     */
    public function setRefOrgUnit(array $refOrgUnit)
    {
        $this->refOrgUnit = $refOrgUnit;
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

