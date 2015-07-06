<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing WebLink
 */
class WebLink
{

    /**
     * @property string $role
     */
    private $role = null;

    /**
     * @property string $userDefined
     */
    private $userDefined = null;

    /**
     * @property string[] $href
     */
    private $href = null;

    /**
     * Name of the web page
     *
     * @property string $linkName
     */
    private $linkName = null;

    /**
     * Gets as role
     *
     * @return string
     */
    public function getRole()
    {
        return $this->role;
    }

    /**
     * Sets a new role
     *
     * @param string $role
     * @return self
     */
    public function setRole($role)
    {
        $this->role = $role;
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
     * Adds as href
     *
     * @return self
     * @param string $href
     */
    public function addToHref($href)
    {
        $this->href[] = $href;
        return $this;
    }

    /**
     * isset href
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHref($index)
    {
        return isset($this->href[$index]);
    }

    /**
     * unset href
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHref($index)
    {
        unset($this->href[$index]);
    }

    /**
     * Gets as href
     *
     * @return string[]
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
    public function setHref(array $href)
    {
        $this->href = $href;
        return $this;
    }

    /**
     * Gets as linkName
     *
     * Name of the web page
     *
     * @return string
     */
    public function getLinkName()
    {
        return $this->linkName;
    }

    /**
     * Sets a new linkName
     *
     * Name of the web page
     *
     * @param string $linkName
     * @return self
     */
    public function setLinkName($linkName)
    {
        $this->linkName = $linkName;
        return $this;
    }


}

