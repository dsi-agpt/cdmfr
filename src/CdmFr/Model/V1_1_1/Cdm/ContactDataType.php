<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing ContactDataType
 *
 * Information such as address, telephone, fax, email,
 *  URL etc. related
 *  to a given contact.
 * XSD Type: contactDataType
 */
class ContactDataType
{

    /**
     * @property string $userDefined
     */
    private $userDefined = null;

    /**
     * The name relevant for this contact.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\ContactDataType\ContactNameAType $contactName
     */
    private $contactName = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\Adr $adr
     */
    private $adr = null;

    /**
     * Information on when the contact is
     *  available.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $visitHour
     */
    private $visitHour = null;

    /**
     * The telephone numbers used for this contact.
     *  Attribute: mobil,
     *  home and office
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\ContactDataType\TelephoneAType[] $telephone
     */
    private $telephone = null;

    /**
     * Fax number
     *
     * @property string $fax
     */
    private $fax = null;

    /**
     * @property string $email
     */
    private $email = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\WebLink $webLink
     */
    private $webLink = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * Gets as userDefined
     *
     * @return string
     */
    public function getUserDefined()
    {
        return $this->userDefined;
    }

    /**
     * Sets a new userDefined
     *
     * @param string $userDefined
     * @return self
     */
    public function setUserDefined($userDefined)
    {
        $this->userDefined = $userDefined;
        return $this;
    }

    /**
     * Gets as contactName
     *
     * The name relevant for this contact.
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\ContactDataType\ContactNameAType
     */
    public function getContactName()
    {
        return $this->contactName;
    }

    /**
     * Sets a new contactName
     *
     * The name relevant for this contact.
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\ContactDataType\ContactNameAType $contactName
     * @return self
     */
    public function setContactName(\CdmFr\Model\V1_1_1\Cdm\ContactDataType\ContactNameAType $contactName)
    {
        $this->contactName = $contactName;
        return $this;
    }

    /**
     * Gets as adr
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Adr
     */
    public function getAdr()
    {
        return $this->adr;
    }

    /**
     * Sets a new adr
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Adr $adr
     * @return self
     */
    public function setAdr(\CdmFr\Model\V1_1_1\Cdm\Adr $adr)
    {
        $this->adr = $adr;
        return $this;
    }

    /**
     * Gets as visitHour
     *
     * Information on when the contact is
     *  available.
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getVisitHour()
    {
        return $this->visitHour;
    }

    /**
     * Sets a new visitHour
     *
     * Information on when the contact is
     *  available.
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $visitHour
     * @return self
     */
    public function setVisitHour(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $visitHour)
    {
        $this->visitHour = $visitHour;
        return $this;
    }

    /**
     * Adds as telephone
     *
     * The telephone numbers used for this contact.
     *  Attribute: mobil,
     *  home and office
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\ContactDataType\TelephoneAType $telephone
     */
    public function addToTelephone(\CdmFr\Model\V1_1_1\Cdm\ContactDataType\TelephoneAType $telephone)
    {
        $this->telephone[] = $telephone;
        return $this;
    }

    /**
     * isset telephone
     *
     * The telephone numbers used for this contact.
     *  Attribute: mobil,
     *  home and office
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetTelephone($index)
    {
        return isset($this->telephone[$index]);
    }

    /**
     * unset telephone
     *
     * The telephone numbers used for this contact.
     *  Attribute: mobil,
     *  home and office
     *
     * @param scalar $index
     * @return void
     */
    public function unsetTelephone($index)
    {
        unset($this->telephone[$index]);
    }

    /**
     * Gets as telephone
     *
     * The telephone numbers used for this contact.
     *  Attribute: mobil,
     *  home and office
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\ContactDataType\TelephoneAType[]
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Sets a new telephone
     *
     * The telephone numbers used for this contact.
     *  Attribute: mobil,
     *  home and office
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\ContactDataType\TelephoneAType[] $telephone
     * @return self
     */
    public function setTelephone(array $telephone)
    {
        $this->telephone = $telephone;
        return $this;
    }

    /**
     * Gets as fax
     *
     * Fax number
     *
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * Fax number
     *
     * @param string $fax
     * @return self
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * @param string $email
     * @return self
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Gets as webLink
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\WebLink
     */
    public function getWebLink()
    {
        return $this->webLink;
    }

    /**
     * Sets a new webLink
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\WebLink $webLink
     * @return self
     */
    public function setWebLink(\CdmFr\Model\V1_1_1\Cdm\WebLink $webLink)
    {
        $this->webLink = $webLink;
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


}

