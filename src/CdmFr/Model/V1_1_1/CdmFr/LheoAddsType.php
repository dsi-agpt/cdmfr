<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing LheoAddsType
 *
 * Addendums from LHEO standard.
 * XSD Type: lheoAddsType
 */
class LheoAddsType
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
     * @property \CdmFr\Model\V1_1_1\Lheo\SIRETType $sIRET
     */
    private $sIRET = null;

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
     * Gets as sIRET
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\SIRETType
     */
    public function getSIRET()
    {
        return $this->sIRET;
    }

    /**
     * Sets a new sIRET
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\SIRETType $sIRET
     * @return self
     */
    public function setSIRET(\CdmFr\Model\V1_1_1\Lheo\SIRETType $sIRET)
    {
        $this->sIRET = $sIRET;
        return $this;
    }


}

