<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

use CdmFr\Model\V1_1_1\Cdm\InfoBlockType;

/**
 * Class representing AdmissionDescription
 */
class AdmissionDescription extends InfoBlockType
{

    /**
     * @property string $equiv
     */
    private $equiv = null;

    /**
     * Gets as equiv
     *
     * @return string
     */
    public function getEquiv()
    {
        return $this->equiv;
    }

    /**
     * Sets a new equiv
     *
     * @param string $equiv
     * @return self
     */
    public function setEquiv($equiv)
    {
        $this->equiv = $equiv;
        return $this;
    }


}

