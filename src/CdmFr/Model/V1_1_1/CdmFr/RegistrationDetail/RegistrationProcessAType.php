<?php

namespace CdmFr\Model\V1_1_1\CdmFr\RegistrationDetail;

/**
 * Class representing RegistrationProcessAType
 */
class RegistrationProcessAType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $registrationLocation
     */
    private $registrationLocation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $registrationModalities
     */
    private $registrationModalities = null;

    /**
     * Gets as registrationLocation
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getRegistrationLocation()
    {
        return $this->registrationLocation;
    }

    /**
     * Sets a new registrationLocation
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $registrationLocation
     * @return self
     */
    public function setRegistrationLocation(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $registrationLocation)
    {
        $this->registrationLocation = $registrationLocation;
        return $this;
    }

    /**
     * Gets as registrationModalities
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getRegistrationModalities()
    {
        return $this->registrationModalities;
    }

    /**
     * Sets a new registrationModalities
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $registrationModalities
     * @return self
     */
    public function setRegistrationModalities(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $registrationModalities)
    {
        $this->registrationModalities = $registrationModalities;
        return $this;
    }


}

