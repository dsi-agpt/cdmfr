<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing InfoBlockType
 *
 * General type for various kind of information
 * XSD Type: infoBlockType
 */
class InfoBlockType
{

    /**
     * @property string $blockLang
     */
    private $blockLang = null;

    /**
     * @property string $userDefined
     */
    private $userDefined = null;

    /**
     * Header text for this information block
     *
     * @property string $header
     */
    private $header = null;

    /**
     * Text in bold
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $bold
     */
    private $bold = null;

    /**
     * Text in italic
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $italic
     */
    private $italic = null;

    /**
     * Text in italic
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $p
     */
    private $p = null;

    /**
     * Pagebreak element
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\Br[] $br
     */
    private $br = null;

    /**
     * A list of items. The list can be bulleted or
     *  numbered
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType\ListAType[] $list
     */
    private $list = null;

    /**
     * email address
     *
     * @property string[] $email
     */
    private $email = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\WebLink[] $webLink
     */
    private $webLink = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefOrgUnit[] $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefProgram[] $refProgram
     */
    private $refProgram = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefCourse[] $refCourse
     */
    private $refCourse = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RefPerson[] $refPerson
     */
    private $refPerson = null;

    /**
     * Picture, use attribute to refer to picture file
     *  and/or
     *  type text in the element.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $picture
     */
    private $picture = null;

    /**
     * To ensure extensibility, the specification
     *  requires that there
     *  be no limit on potential extensions by use of
     *  the extension element. To be
     *  used for adding information to an
     *  existing XML structure.
     *
     * @property mixed $extension
     */
    private $extension = null;

    /**
     * Nesting of information in sub-blocks
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $subBlock
     */
    private $subBlock = null;

    /**
     * The information of this block expressed in other
     *  languages
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $altLangBlock
     */
    private $altLangBlock = null;

    /**
     * @property string[] $searchword
     */
    private $searchword = null;

    /**
     * Gets as blockLang
     *
     * @return string
     */
    public function getBlockLang()
    {
        return $this->blockLang;
    }

    /**
     * Sets a new blockLang
     *
     * @param string $blockLang
     * @return self
     */
    public function setBlockLang($blockLang)
    {
        $this->blockLang = $blockLang;
        return $this;
    }

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
     * Gets as header
     *
     * Header text for this information block
     *
     * @return string
     */
    public function getHeader()
    {
        return $this->header;
    }

    /**
     * Sets a new header
     *
     * Header text for this information block
     *
     * @param string $header
     * @return self
     */
    public function setHeader($header)
    {
        $this->header = $header;
        return $this;
    }

    /**
     * Adds as bold
     *
     * Text in bold
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $bold
     */
    public function addToBold(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $bold)
    {
        $this->bold[] = $bold;
        return $this;
    }

    /**
     * isset bold
     *
     * Text in bold
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBold($index)
    {
        return isset($this->bold[$index]);
    }

    /**
     * unset bold
     *
     * Text in bold
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBold($index)
    {
        unset($this->bold[$index]);
    }

    /**
     * Gets as bold
     *
     * Text in bold
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getBold()
    {
        return $this->bold;
    }

    /**
     * Sets a new bold
     *
     * Text in bold
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $bold
     * @return self
     */
    public function setBold(array $bold)
    {
        $this->bold = $bold;
        return $this;
    }

    /**
     * Adds as italic
     *
     * Text in italic
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $italic
     */
    public function addToItalic(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $italic)
    {
        $this->italic[] = $italic;
        return $this;
    }

    /**
     * isset italic
     *
     * Text in italic
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetItalic($index)
    {
        return isset($this->italic[$index]);
    }

    /**
     * unset italic
     *
     * Text in italic
     *
     * @param scalar $index
     * @return void
     */
    public function unsetItalic($index)
    {
        unset($this->italic[$index]);
    }

    /**
     * Gets as italic
     *
     * Text in italic
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getItalic()
    {
        return $this->italic;
    }

    /**
     * Sets a new italic
     *
     * Text in italic
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $italic
     * @return self
     */
    public function setItalic(array $italic)
    {
        $this->italic = $italic;
        return $this;
    }

    /**
     * Adds as p
     *
     * Text in italic
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $p
     */
    public function addToP(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $p)
    {
        $this->p[] = $p;
        return $this;
    }

    /**
     * isset p
     *
     * Text in italic
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetP($index)
    {
        return isset($this->p[$index]);
    }

    /**
     * unset p
     *
     * Text in italic
     *
     * @param scalar $index
     * @return void
     */
    public function unsetP($index)
    {
        unset($this->p[$index]);
    }

    /**
     * Gets as p
     *
     * Text in italic
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getP()
    {
        return $this->p;
    }

    /**
     * Sets a new p
     *
     * Text in italic
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $p
     * @return self
     */
    public function setP(array $p)
    {
        $this->p = $p;
        return $this;
    }

    /**
     * Adds as br
     *
     * Pagebreak element
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\Br $br
     */
    public function addToBr(\CdmFr\Model\V1_1_1\Cdm\Br $br)
    {
        $this->br[] = $br;
        return $this;
    }

    /**
     * isset br
     *
     * Pagebreak element
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetBr($index)
    {
        return isset($this->br[$index]);
    }

    /**
     * unset br
     *
     * Pagebreak element
     *
     * @param scalar $index
     * @return void
     */
    public function unsetBr($index)
    {
        unset($this->br[$index]);
    }

    /**
     * Gets as br
     *
     * Pagebreak element
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\Br[]
     */
    public function getBr()
    {
        return $this->br;
    }

    /**
     * Sets a new br
     *
     * Pagebreak element
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\Br[] $br
     * @return self
     */
    public function setBr(array $br)
    {
        $this->br = $br;
        return $this;
    }

    /**
     * Adds as list
     *
     * A list of items. The list can be bulleted or
     *  numbered
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType\ListAType $list
     */
    public function addToList(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType\ListAType $list)
    {
        $this->list[] = $list;
        return $this;
    }

    /**
     * isset list
     *
     * A list of items. The list can be bulleted or
     *  numbered
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetList($index)
    {
        return isset($this->list[$index]);
    }

    /**
     * unset list
     *
     * A list of items. The list can be bulleted or
     *  numbered
     *
     * @param scalar $index
     * @return void
     */
    public function unsetList($index)
    {
        unset($this->list[$index]);
    }

    /**
     * Gets as list
     *
     * A list of items. The list can be bulleted or
     *  numbered
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType\ListAType[]
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Sets a new list
     *
     * A list of items. The list can be bulleted or
     *  numbered
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType\ListAType[] $list
     * @return self
     */
    public function setList(array $list)
    {
        $this->list = $list;
        return $this;
    }

    /**
     * Adds as email
     *
     * email address
     *
     * @return self
     * @param string $email
     */
    public function addToEmail($email)
    {
        $this->email[] = $email;
        return $this;
    }

    /**
     * isset email
     *
     * email address
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEmail($index)
    {
        return isset($this->email[$index]);
    }

    /**
     * unset email
     *
     * email address
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEmail($index)
    {
        unset($this->email[$index]);
    }

    /**
     * Gets as email
     *
     * email address
     *
     * @return string[]
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Sets a new email
     *
     * email address
     *
     * @param string[] $email
     * @return self
     */
    public function setEmail(array $email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * Adds as webLink
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\WebLink $webLink
     */
    public function addToWebLink(\CdmFr\Model\V1_1_1\Cdm\WebLink $webLink)
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
     * @return \CdmFr\Model\V1_1_1\Cdm\WebLink[]
     */
    public function getWebLink()
    {
        return $this->webLink;
    }

    /**
     * Sets a new webLink
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\WebLink[] $webLink
     * @return self
     */
    public function setWebLink(array $webLink)
    {
        $this->webLink = $webLink;
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
     * Adds as picture
     *
     * Picture, use attribute to refer to picture file
     *  and/or
     *  type text in the element.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $picture
     */
    public function addToPicture(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $picture)
    {
        $this->picture[] = $picture;
        return $this;
    }

    /**
     * isset picture
     *
     * Picture, use attribute to refer to picture file
     *  and/or
     *  type text in the element.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPicture($index)
    {
        return isset($this->picture[$index]);
    }

    /**
     * unset picture
     *
     * Picture, use attribute to refer to picture file
     *  and/or
     *  type text in the element.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPicture($index)
    {
        unset($this->picture[$index]);
    }

    /**
     * Gets as picture
     *
     * Picture, use attribute to refer to picture file
     *  and/or
     *  type text in the element.
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Sets a new picture
     *
     * Picture, use attribute to refer to picture file
     *  and/or
     *  type text in the element.
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $picture
     * @return self
     */
    public function setPicture(array $picture)
    {
        $this->picture = $picture;
        return $this;
    }

    /**
     * Gets as extension
     *
     * To ensure extensibility, the specification
     *  requires that there
     *  be no limit on potential extensions by use of
     *  the extension element. To be
     *  used for adding information to an
     *  existing XML structure.
     *
     * @return mixed
     */
    public function getExtension()
    {
        return $this->extension;
    }

    /**
     * Sets a new extension
     *
     * To ensure extensibility, the specification
     *  requires that there
     *  be no limit on potential extensions by use of
     *  the extension element. To be
     *  used for adding information to an
     *  existing XML structure.
     *
     * @param mixed $extension
     * @return self
     */
    public function setExtension($extension)
    {
        $this->extension = $extension;
        return $this;
    }

    /**
     * Adds as subBlock
     *
     * Nesting of information in sub-blocks
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $subBlock
     */
    public function addToSubBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $subBlock)
    {
        $this->subBlock[] = $subBlock;
        return $this;
    }

    /**
     * isset subBlock
     *
     * Nesting of information in sub-blocks
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSubBlock($index)
    {
        return isset($this->subBlock[$index]);
    }

    /**
     * unset subBlock
     *
     * Nesting of information in sub-blocks
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSubBlock($index)
    {
        unset($this->subBlock[$index]);
    }

    /**
     * Gets as subBlock
     *
     * Nesting of information in sub-blocks
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getSubBlock()
    {
        return $this->subBlock;
    }

    /**
     * Sets a new subBlock
     *
     * Nesting of information in sub-blocks
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $subBlock
     * @return self
     */
    public function setSubBlock(array $subBlock)
    {
        $this->subBlock = $subBlock;
        return $this;
    }

    /**
     * Adds as altLangBlock
     *
     * The information of this block expressed in other
     *  languages
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $altLangBlock
     */
    public function addToAltLangBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $altLangBlock)
    {
        $this->altLangBlock[] = $altLangBlock;
        return $this;
    }

    /**
     * isset altLangBlock
     *
     * The information of this block expressed in other
     *  languages
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAltLangBlock($index)
    {
        return isset($this->altLangBlock[$index]);
    }

    /**
     * unset altLangBlock
     *
     * The information of this block expressed in other
     *  languages
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAltLangBlock($index)
    {
        unset($this->altLangBlock[$index]);
    }

    /**
     * Gets as altLangBlock
     *
     * The information of this block expressed in other
     *  languages
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getAltLangBlock()
    {
        return $this->altLangBlock;
    }

    /**
     * Sets a new altLangBlock
     *
     * The information of this block expressed in other
     *  languages
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $altLangBlock
     * @return self
     */
    public function setAltLangBlock(array $altLangBlock)
    {
        $this->altLangBlock = $altLangBlock;
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

