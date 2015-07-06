<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing RefSpeciality
 */
class RefSpeciality
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


}

