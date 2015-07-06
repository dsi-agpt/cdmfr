<?php

namespace CdmFr\Model\V1_1_1\Cdm;

/**
 * Class representing AdmissionInfo
 */
class AdmissionInfo
{

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\AdmissionDescription[] $admissionDescription
     */
    private $admissionDescription = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\StudentStatus $studentStatus
     */
    private $studentStatus = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\EctsRequired $ectsRequired
     */
    private $ectsRequired = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\StudentPlaces $studentPlaces
     */
    private $studentPlaces = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\TeachingStart $teachingStart
     */
    private $teachingStart = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\RegistrationDeadline $registrationDeadline
     */
    private $registrationDeadline = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\CancelDeadline $cancelDeadline
     */
    private $cancelDeadline = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RegistrationDetail $registrationDetail
     */
    private $registrationDetail = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * Adds as admissionDescription
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\AdmissionDescription $admissionDescription
     */
    public function addToAdmissionDescription(\CdmFr\Model\V1_1_1\CdmFr\AdmissionDescription $admissionDescription)
    {
        $this->admissionDescription[] = $admissionDescription;
        return $this;
    }

    /**
     * isset admissionDescription
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetAdmissionDescription($index)
    {
        return isset($this->admissionDescription[$index]);
    }

    /**
     * unset admissionDescription
     *
     * @param scalar $index
     * @return void
     */
    public function unsetAdmissionDescription($index)
    {
        unset($this->admissionDescription[$index]);
    }

    /**
     * Gets as admissionDescription
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\AdmissionDescription[]
     */
    public function getAdmissionDescription()
    {
        return $this->admissionDescription;
    }

    /**
     * Sets a new admissionDescription
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\AdmissionDescription[] $admissionDescription
     * @return self
     */
    public function setAdmissionDescription(array $admissionDescription)
    {
        $this->admissionDescription = $admissionDescription;
        return $this;
    }

    /**
     * Gets as studentStatus
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\StudentStatus
     */
    public function getStudentStatus()
    {
        return $this->studentStatus;
    }

    /**
     * Sets a new studentStatus
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\StudentStatus $studentStatus
     * @return self
     */
    public function setStudentStatus(\CdmFr\Model\V1_1_1\CdmFr\StudentStatus $studentStatus)
    {
        $this->studentStatus = $studentStatus;
        return $this;
    }

    /**
     * Gets as ectsRequired
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\EctsRequired
     */
    public function getEctsRequired()
    {
        return $this->ectsRequired;
    }

    /**
     * Sets a new ectsRequired
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\EctsRequired $ectsRequired
     * @return self
     */
    public function setEctsRequired(\CdmFr\Model\V1_1_1\CdmFr\EctsRequired $ectsRequired)
    {
        $this->ectsRequired = $ectsRequired;
        return $this;
    }

    /**
     * Gets as studentPlaces
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\StudentPlaces
     */
    public function getStudentPlaces()
    {
        return $this->studentPlaces;
    }

    /**
     * Sets a new studentPlaces
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\StudentPlaces $studentPlaces
     * @return self
     */
    public function setStudentPlaces(\CdmFr\Model\V1_1_1\Cdm\StudentPlaces $studentPlaces)
    {
        $this->studentPlaces = $studentPlaces;
        return $this;
    }

    /**
     * Gets as teachingStart
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TeachingStart
     */
    public function getTeachingStart()
    {
        return $this->teachingStart;
    }

    /**
     * Sets a new teachingStart
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TeachingStart $teachingStart
     * @return self
     */
    public function setTeachingStart(\CdmFr\Model\V1_1_1\Cdm\TeachingStart $teachingStart)
    {
        $this->teachingStart = $teachingStart;
        return $this;
    }

    /**
     * Gets as registrationDeadline
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\RegistrationDeadline
     */
    public function getRegistrationDeadline()
    {
        return $this->registrationDeadline;
    }

    /**
     * Sets a new registrationDeadline
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\RegistrationDeadline $registrationDeadline
     * @return self
     */
    public function setRegistrationDeadline(\CdmFr\Model\V1_1_1\Cdm\RegistrationDeadline $registrationDeadline)
    {
        $this->registrationDeadline = $registrationDeadline;
        return $this;
    }

    /**
     * Gets as cancelDeadline
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CancelDeadline
     */
    public function getCancelDeadline()
    {
        return $this->cancelDeadline;
    }

    /**
     * Sets a new cancelDeadline
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CancelDeadline $cancelDeadline
     * @return self
     */
    public function setCancelDeadline(\CdmFr\Model\V1_1_1\Cdm\CancelDeadline $cancelDeadline)
    {
        $this->cancelDeadline = $cancelDeadline;
        return $this;
    }

    /**
     * Gets as registrationDetail
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RegistrationDetail
     */
    public function getRegistrationDetail()
    {
        return $this->registrationDetail;
    }

    /**
     * Sets a new registrationDetail
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RegistrationDetail $registrationDetail
     * @return self
     */
    public function setRegistrationDetail(\CdmFr\Model\V1_1_1\CdmFr\RegistrationDetail $registrationDetail)
    {
        $this->registrationDetail = $registrationDetail;
        return $this;
    }

    /**
     * Gets as refOrgUnit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit
     */
    public function getRefOrgUnit()
    {
        return $this->refOrgUnit;
    }

    /**
     * Sets a new refOrgUnit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     * @return self
     */
    public function setRefOrgUnit(\CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit)
    {
        $this->refOrgUnit = $refOrgUnit;
        return $this;
    }


}

