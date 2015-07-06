<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing ResumeOrganismeType
 *
 *
 * XSD Type: resume-organisme-type
 */
class ResumeOrganismeType extends ResumeOrganismeSubtypeType
{

    /**
     * @property string $href
     */
    private $href = null;

    /**
     * @property string $file
     */
    private $file = null;

    /**
     * @property string $numero
     */
    private $numero = null;

    /**
     * @property string $info
     */
    private $info = null;

    /**
     * @property string $ref
     */
    private $ref = null;

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $tag
     */
    private $tag = null;

    /**
     * Gets as href
     *
     * @return string
     */
    public function getHref()
    {
        return $this->href;
    }

    /**
     * Sets a new href
     *
     * @param string $href
     * @return self
     */
    public function setHref($href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * Gets as file
     *
     * @return string
     */
    public function getFile()
    {
        return $this->file;
    }

    /**
     * Sets a new file
     *
     * @param string $file
     * @return self
     */
    public function setFile($file)
    {
        $this->file = $file;
        return $this;
    }

    /**
     * Gets as numero
     *
     * @return string
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     * Sets a new numero
     *
     * @param string $numero
     * @return self
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
        return $this;
    }

    /**
     * Gets as info
     *
     * @return string
     */
    public function getInfo()
    {
        return $this->info;
    }

    /**
     * Sets a new info
     *
     * @param string $info
     * @return self
     */
    public function setInfo($info)
    {
        $this->info = $info;
        return $this;
    }

    /**
     * Gets as ref
     *
     * @return string
     */
    public function getRef()
    {
        return $this->ref;
    }

    /**
     * Sets a new ref
     *
     * @param string $ref
     * @return self
     */
    public function setRef($ref)
    {
        $this->ref = $ref;
        return $this;
    }

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
     * Gets as tag
     *
     * @return string
     */
    public function getTag()
    {
        return $this->tag;
    }

    /**
     * Sets a new tag
     *
     * @param string $tag
     * @return self
     */
    public function setTag($tag)
    {
        $this->tag = $tag;
        return $this;
    }


}

