<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing CDM
 */
class CDM
{

    /**
     * @property string $language
     */
    private $language = null;

    /**
     * @property string $version
     */
    private $version = null;

    /**
     * @property string $profile
     */
    private $profile = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Habilitation[] $habilitation
     */
    private $habilitation = null;

    /**
     * Basic packaging information that is used to
     *  manage the
     *  exchange of the data between the source and target
     *  systems
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\CDM\PropertiesAType $properties
     */
    private $properties = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\OrgUnit[] $orgUnit
     */
    private $orgUnit = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Program[] $program
     */
    private $program = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Course[] $course
     */
    private $course = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Person[] $person
     */
    private $person = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\LheoAdds[] $lheoAdds
     */
    private $lheoAdds = null;

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
     * Gets as version
     *
     * @return string
     */
    public function getVersion()
    {
        return $this->version;
    }

    /**
     * Sets a new version
     *
     * @param string $version
     * @return self
     */
    public function setVersion($version)
    {
        $this->version = $version;
        return $this;
    }

    /**
     * Gets as profile
     *
     * @return string
     */
    public function getProfile()
    {
        return $this->profile;
    }

    /**
     * Sets a new profile
     *
     * @param string $profile
     * @return self
     */
    public function setProfile($profile)
    {
        $this->profile = $profile;
        return $this;
    }

    /**
     * Adds as habilitation
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Habilitation $habilitation
     */
    public function addToHabilitation(\CdmFr\Model\V1_1_1\CdmFr\Habilitation $habilitation)
    {
        $this->habilitation[] = $habilitation;
        return $this;
    }

    /**
     * isset habilitation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHabilitation($index)
    {
        return isset($this->habilitation[$index]);
    }

    /**
     * unset habilitation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHabilitation($index)
    {
        unset($this->habilitation[$index]);
    }

    /**
     * Gets as habilitation
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Habilitation[]
     */
    public function getHabilitation()
    {
        return $this->habilitation;
    }

    /**
     * Sets a new habilitation
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Habilitation[] $habilitation
     * @return self
     */
    public function setHabilitation(array $habilitation)
    {
        $this->habilitation = $habilitation;
        return $this;
    }

    /**
     * Gets as properties
     *
     * Basic packaging information that is used to
     *  manage the
     *  exchange of the data between the source and target
     *  systems
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDM\PropertiesAType
     */
    public function getProperties()
    {
        return $this->properties;
    }

    /**
     * Sets a new properties
     *
     * Basic packaging information that is used to
     *  manage the
     *  exchange of the data between the source and target
     *  systems
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDM\PropertiesAType $properties
     * @return self
     */
    public function setProperties(\CdmFr\Model\V1_1_1\Cdm\CDM\PropertiesAType $properties)
    {
        $this->properties = $properties;
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
     * Adds as program
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
     * @return \CdmFr\Model\V1_1_1\Cdm\Program[]
     */
    public function getProgram()
    {
        return $this->program;
    }

    /**
     * Sets a new program
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
     * Adds as lheoAdds
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\LheoAdds $lheoAdds
     */
    public function addToLheoAdds(\CdmFr\Model\V1_1_1\CdmFr\LheoAdds $lheoAdds)
    {
        $this->lheoAdds[] = $lheoAdds;
        return $this;
    }

    /**
     * isset lheoAdds
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLheoAdds($index)
    {
        return isset($this->lheoAdds[$index]);
    }

    /**
     * unset lheoAdds
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLheoAdds($index)
    {
        unset($this->lheoAdds[$index]);
    }

    /**
     * Gets as lheoAdds
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\LheoAdds[]
     */
    public function getLheoAdds()
    {
        return $this->lheoAdds;
    }

    /**
     * Sets a new lheoAdds
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\LheoAdds[] $lheoAdds
     * @return self
     */
    public function setLheoAdds(array $lheoAdds)
    {
        $this->lheoAdds = $lheoAdds;
        return $this;
    }


}

