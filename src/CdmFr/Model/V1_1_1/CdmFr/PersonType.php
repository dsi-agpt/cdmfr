<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing PersonType
 *
 * Contact information of persons related to the
 *  accomplishment of
 *  courses.
 * XSD Type: personType
 */
class PersonType
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
     * Identification of the person
     *
     * @property string $personID
     */
    private $personID = null;

    /**
     * Name of the person
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\PersonType\NameAType $name
     */
    private $name = null;

    /**
     * Title posessed by the person
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\TitleType $title
     */
    private $title = null;

    /**
     * A person may have different roles in different
     *  contexts, e.g.
     *  lecturer.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $role
     */
    private $role = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Affiliation[] $affiliation
     */
    private $affiliation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Activities $activities
     */
    private $activities = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\ContactData[] $contactData
     */
    private $contactData = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\InfoBlock $infoBlock
     */
    private $infoBlock = null;

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
     * Gets as personID
     *
     * Identification of the person
     *
     * @return string
     */
    public function getPersonID()
    {
        return $this->personID;
    }

    /**
     * Sets a new personID
     *
     * Identification of the person
     *
     * @param string $personID
     * @return self
     */
    public function setPersonID($personID)
    {
        $this->personID = $personID;
        return $this;
    }

    /**
     * Gets as name
     *
     * Name of the person
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\PersonType\NameAType
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Sets a new name
     *
     * Name of the person
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\PersonType\NameAType $name
     * @return self
     */
    public function setName(\CdmFr\Model\V1_1_1\CdmFr\PersonType\NameAType $name)
    {
        $this->name = $name;
        return $this;
    }

    /**
     * Gets as title
     *
     * Title posessed by the person
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TitleType
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets a new title
     *
     * Title posessed by the person
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TitleType $title
     * @return self
     */
    public function setTitle(\CdmFr\Model\V1_1_1\CdmFr\TitleType $title)
    {
        $this->title = $title;
        return $this;
    }

    /**
     * Adds as text
     *
     * A person may have different roles in different
     *  contexts, e.g.
     *  lecturer.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text
     */
    public function addToRole(\CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType $text)
    {
        $this->role[] = $text;
        return $this;
    }

    /**
     * isset role
     *
     * A person may have different roles in different
     *  contexts, e.g.
     *  lecturer.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRole($index)
    {
        return isset($this->role[$index]);
    }

    /**
     * unset role
     *
     * A person may have different roles in different
     *  contexts, e.g.
     *  lecturer.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRole($index)
    {
        unset($this->role[$index]);
    }

    /**
     * Gets as role
     *
     * A person may have different roles in different
     *  contexts, e.g.
     *  lecturer.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[]
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * A person may have different roles in different
     *  contexts, e.g.
     *  lecturer.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TextType\TextAType[] $role
     * @return self
     */
    public function setRole(array $role)
    {
        $this->role = $role;
        return $this;
    }

    /**
     * Adds as affiliation
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Affiliation $affiliation
     */
    public function addToAffiliation(\CdmFr\Model\V1_1_1\CdmFr\Affiliation $affiliation)
    {
        $this->affiliation[] = $affiliation;
        return $this;
    }

    /**
     * isset affiliation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAffiliation($index)
    {
        return isset($this->affiliation[$index]);
    }

    /**
     * unset affiliation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAffiliation($index)
    {
        unset($this->affiliation[$index]);
    }

    /**
     * Gets as affiliation
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Affiliation[]
     */
    public function getAffiliation()
    {
        return $this->affiliation;
    }

    /**
     * Sets a new affiliation
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Affiliation[] $affiliation
     * @return self
     */
    public function setAffiliation(array $affiliation)
    {
        $this->affiliation = $affiliation;
        return $this;
    }

    /**
     * Gets as activities
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Activities
     */
    public function getActivities()
    {
        return $this->activities;
    }

    /**
     * Sets a new activities
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Activities $activities
     * @return self
     */
    public function setActivities(\CdmFr\Model\V1_1_1\CdmFr\Activities $activities)
    {
        $this->activities = $activities;
        return $this;
    }

    /**
     * Adds as contactData
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\ContactData $contactData
     */
    public function addToContactData(\CdmFr\Model\V1_1_1\CdmFr\ContactData $contactData)
    {
        $this->contactData[] = $contactData;
        return $this;
    }

    /**
     * isset contactData
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetContactData($index)
    {
        return isset($this->contactData[$index]);
    }

    /**
     * unset contactData
     *
     * @param scalar $index
     * @return void
     */
    public function unsetContactData($index)
    {
        unset($this->contactData[$index]);
    }

    /**
     * Gets as contactData
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\ContactData[]
     */
    public function getContactData()
    {
        return $this->contactData;
    }

    /**
     * Sets a new contactData
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\ContactData[] $contactData
     * @return self
     */
    public function setContactData(array $contactData)
    {
        $this->contactData = $contactData;
        return $this;
    }

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\InfoBlock
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\InfoBlock $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\CdmFr\InfoBlock $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }


}

