<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

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
     * @property string $href
     */
    private $href = null;

    /**
     * Name of the web page
     *
     * @property string[] $linkName
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
     * Adds as linkName
     *
     * Name of the web page
     *
     * @return self
     * @param string $linkName
     */
    public function addToLinkName($linkName)
    {
        $this->linkName[] = $linkName;
        return $this;
    }

    /**
     * isset linkName
     *
     * Name of the web page
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLinkName($index)
    {
        return isset($this->linkName[$index]);
    }

    /**
     * unset linkName
     *
     * Name of the web page
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLinkName($index)
    {
        unset($this->linkName[$index]);
    }

    /**
     * Gets as linkName
     *
     * Name of the web page
     *
     * @return string[]
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
     * @param string[] $linkName
     * @return self
     */
    public function setLinkName(array $linkName)
    {
        $this->linkName = $linkName;
        return $this;
    }


}

