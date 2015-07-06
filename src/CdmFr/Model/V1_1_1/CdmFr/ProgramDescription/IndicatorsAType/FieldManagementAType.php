<?php

namespace CdmFr\Model\V1_1_1\CdmFr\ProgramDescription\IndicatorsAType;

use CdmFr\Model\V1_1_1\Cdm\InfoBlockType;

/**
 * Class representing FieldManagementAType
 */
class FieldManagementAType extends InfoBlockType
{

    /**
     * @property string $purpose
     */
    private $purpose = null;

    /**
     * Gets as purpose
     *
     * @return string
     */
    public function getPurpose()
    {
        return $this->purpose;
    }

    /**
     * Sets a new purpose
     *
     * @param string $purpose
     * @return self
     */
    public function setPurpose($purpose)
    {
        $this->purpose = $purpose;
        return $this;
    }


}

