<?php

namespace CdmFr\Model\V1_1_1\CdmFr\FieldType\FieldNameAType;

/**
 * Class representing ControlledAType
 */
class ControlledAType
{

    /**
     * @property string $fieldNameCode
     */
    private $fieldNameCode = null;

    /**
     * @property string $registeredName
     */
    private $registeredName = null;

    /**
     * Gets as fieldNameCode
     *
     * @return string
     */
    public function getFieldNameCode()
    {
        return $this->fieldNameCode;
    }

    /**
     * Sets a new fieldNameCode
     *
     * @param string $fieldNameCode
     * @return self
     */
    public function setFieldNameCode($fieldNameCode)
    {
        $this->fieldNameCode = $fieldNameCode;
        return $this;
    }

    /**
     * Gets as registeredName
     *
     * @return string
     */
    public function getRegisteredName()
    {
        return $this->registeredName;
    }

    /**
     * Sets a new registeredName
     *
     * @param string $registeredName
     * @return self
     */
    public function setRegisteredName($registeredName)
    {
        $this->registeredName = $registeredName;
        return $this;
    }


}

