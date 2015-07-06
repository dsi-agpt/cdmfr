<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing RefPerson
 */
class RefPerson
{

    /**
     * @property string $idRef
     */
    private $idRef = null;

    /**
     * @property string $ref
     */
    private $ref = null;

    /**
     * @property string $role
     */
    private $role = null;

    /**
     * Gets as idRef
     *
     * @return string
     */
    public function getIdRef()
    {
        return $this->idRef;
    }

    /**
     * Sets a new idRef
     *
     * @param string $idRef
     * @return self
     */
    public function setIdRef($idRef)
    {
        $this->idRef = $idRef;
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


}

