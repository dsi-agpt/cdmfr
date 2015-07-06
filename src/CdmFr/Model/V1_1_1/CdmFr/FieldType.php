<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing FieldType
 *
 * Text expressed in one or more languages
 * XSD Type: fieldType
 */
class FieldType
{

    /**
     * @property string $fieldPurpose
     */
    private $fieldPurpose = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\FieldType\FieldNameAType $fieldName
     */
    private $fieldName = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\SpecialityType[] $speciality
     */
    private $speciality = null;

    /**
     * Liens vers une spécialité décrite dans une autre habilitation. La présence
     * de cet élément implique une cohabilitation.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefSpeciality[] $refSpeciality
     */
    private $refSpeciality = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\TimingInfoType $fieldTimingInfo
     */
    private $fieldTimingInfo = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $fieldInfo
     */
    private $fieldInfo = null;

    /**
     * Gets as fieldPurpose
     *
     * @return string
     */
    public function getFieldPurpose()
    {
        return $this->fieldPurpose;
    }

    /**
     * Sets a new fieldPurpose
     *
     * @param string $fieldPurpose
     * @return self
     */
    public function setFieldPurpose($fieldPurpose)
    {
        $this->fieldPurpose = $fieldPurpose;
        return $this;
    }

    /**
     * Gets as fieldName
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\FieldType\FieldNameAType
     */
    public function getFieldName()
    {
        return $this->fieldName;
    }

    /**
     * Sets a new fieldName
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\FieldType\FieldNameAType $fieldName
     * @return self
     */
    public function setFieldName(\CdmFr\Model\V1_1_1\CdmFr\FieldType\FieldNameAType $fieldName)
    {
        $this->fieldName = $fieldName;
        return $this;
    }

    /**
     * Adds as speciality
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\SpecialityType $speciality
     */
    public function addToSpeciality(\CdmFr\Model\V1_1_1\CdmFr\SpecialityType $speciality)
    {
        $this->speciality[] = $speciality;
        return $this;
    }

    /**
     * isset speciality
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSpeciality($index)
    {
        return isset($this->speciality[$index]);
    }

    /**
     * unset speciality
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSpeciality($index)
    {
        unset($this->speciality[$index]);
    }

    /**
     * Gets as speciality
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\SpecialityType[]
     */
    public function getSpeciality()
    {
        return $this->speciality;
    }

    /**
     * Sets a new speciality
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\SpecialityType[] $speciality
     * @return self
     */
    public function setSpeciality(array $speciality)
    {
        $this->speciality = $speciality;
        return $this;
    }

    /**
     * Adds as refSpeciality
     *
     * Liens vers une spécialité décrite dans une autre habilitation. La présence
     * de cet élément implique une cohabilitation.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefSpeciality $refSpeciality
     */
    public function addToRefSpeciality(\CdmFr\Model\V1_1_1\CdmFr\RefSpeciality $refSpeciality)
    {
        $this->refSpeciality[] = $refSpeciality;
        return $this;
    }

    /**
     * isset refSpeciality
     *
     * Liens vers une spécialité décrite dans une autre habilitation. La présence
     * de cet élément implique une cohabilitation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefSpeciality($index)
    {
        return isset($this->refSpeciality[$index]);
    }

    /**
     * unset refSpeciality
     *
     * Liens vers une spécialité décrite dans une autre habilitation. La présence
     * de cet élément implique une cohabilitation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefSpeciality($index)
    {
        unset($this->refSpeciality[$index]);
    }

    /**
     * Gets as refSpeciality
     *
     * Liens vers une spécialité décrite dans une autre habilitation. La présence
     * de cet élément implique une cohabilitation.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefSpeciality[]
     */
    public function getRefSpeciality()
    {
        return $this->refSpeciality;
    }

    /**
     * Sets a new refSpeciality
     *
     * Liens vers une spécialité décrite dans une autre habilitation. La présence
     * de cet élément implique une cohabilitation.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefSpeciality[] $refSpeciality
     * @return self
     */
    public function setRefSpeciality(array $refSpeciality)
    {
        $this->refSpeciality = $refSpeciality;
        return $this;
    }

    /**
     * Gets as fieldTimingInfo
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\TimingInfoType
     */
    public function getFieldTimingInfo()
    {
        return $this->fieldTimingInfo;
    }

    /**
     * Sets a new fieldTimingInfo
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\TimingInfoType $fieldTimingInfo
     * @return self
     */
    public function setFieldTimingInfo(\CdmFr\Model\V1_1_1\CdmFr\TimingInfoType $fieldTimingInfo)
    {
        $this->fieldTimingInfo = $fieldTimingInfo;
        return $this;
    }

    /**
     * Gets as fieldInfo
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getFieldInfo()
    {
        return $this->fieldInfo;
    }

    /**
     * Sets a new fieldInfo
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $fieldInfo
     * @return self
     */
    public function setFieldInfo(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $fieldInfo)
    {
        $this->fieldInfo = $fieldInfo;
        return $this;
    }


}

