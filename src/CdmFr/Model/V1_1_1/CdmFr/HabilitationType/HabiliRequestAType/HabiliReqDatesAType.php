<?php

namespace CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType;

/**
 * Class representing HabiliReqDatesAType
 */
class HabiliReqDatesAType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCS
     */
    private $dateCS = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCA
     */
    private $dateCA = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCEVU
     */
    private $dateCEVU = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCNESR
     */
    private $dateCNESR = null;

    /**
     * Gets as dateCS
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateType
     */
    public function getDateCS()
    {
        return $this->dateCS;
    }

    /**
     * Sets a new dateCS
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCS
     * @return self
     */
    public function setDateCS(\CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCS)
    {
        $this->dateCS = $dateCS;
        return $this;
    }

    /**
     * Gets as dateCA
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateType
     */
    public function getDateCA()
    {
        return $this->dateCA;
    }

    /**
     * Sets a new dateCA
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCA
     * @return self
     */
    public function setDateCA(\CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCA)
    {
        $this->dateCA = $dateCA;
        return $this;
    }

    /**
     * Gets as dateCEVU
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateType
     */
    public function getDateCEVU()
    {
        return $this->dateCEVU;
    }

    /**
     * Sets a new dateCEVU
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCEVU
     * @return self
     */
    public function setDateCEVU(\CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCEVU)
    {
        $this->dateCEVU = $dateCEVU;
        return $this;
    }

    /**
     * Gets as dateCNESR
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateType
     */
    public function getDateCNESR()
    {
        return $this->dateCNESR;
    }

    /**
     * Sets a new dateCNESR
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCNESR
     * @return self
     */
    public function setDateCNESR(\CdmFr\Model\V1_1_1\Cdm\CDMdateType $dateCNESR)
    {
        $this->dateCNESR = $dateCNESR;
        return $this;
    }


}

