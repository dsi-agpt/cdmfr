<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing ProgramName
 */
class ProgramName extends TextType
{

    /**
     * @property boolean $ordinaryName
     */
    private $ordinaryName = null;

    /**
     * Gets as ordinaryName
     *
     * @return boolean
     */
    public function getOrdinaryName()
    {
        return $this->ordinaryName;
    }

    /**
     * Sets a new ordinaryName
     *
     * @param boolean $ordinaryName
     * @return self
     */
    public function setOrdinaryName($ordinaryName)
    {
        $this->ordinaryName = $ordinaryName;
        return $this;
    }


}

