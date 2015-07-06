<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing RegistrationDetail
 */
class RegistrationDetail
{

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RegistrationDetail\RegistrationProcessAType
     * $registrationProcess
     */
    private $registrationProcess = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType $registrationStart
     */
    private $registrationStart = null;

    /**
     * Gets as registrationProcess
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RegistrationDetail\RegistrationProcessAType
     */
    public function getRegistrationProcess()
    {
        return $this->registrationProcess;
    }

    /**
     * Sets a new registrationProcess
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RegistrationDetail\RegistrationProcessAType
     * $registrationProcess
     * @return self
     */
    public function setRegistrationProcess(\CdmFr\Model\V1_1_1\CdmFr\RegistrationDetail\RegistrationProcessAType $registrationProcess)
    {
        $this->registrationProcess = $registrationProcess;
        return $this;
    }

    /**
     * Gets as registrationStart
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType
     */
    public function getRegistrationStart()
    {
        return $this->registrationStart;
    }

    /**
     * Sets a new registrationStart
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType $registrationStart
     * @return self
     */
    public function setRegistrationStart(\CdmFr\Model\V1_1_1\Cdm\CDMdateTimeType $registrationStart)
    {
        $this->registrationStart = $registrationStart;
        return $this;
    }


}

