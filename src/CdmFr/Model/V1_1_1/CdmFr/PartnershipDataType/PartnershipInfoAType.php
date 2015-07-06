<?php

namespace CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType;

/**
 * Class representing PartnershipInfoAType
 */
class PartnershipInfoAType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property
     * \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType\DiplomaAType[]
     * $diploma
     */
    private $diploma = null;

    /**
     * @property
     * \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType\StudentsAType
     * $students
     */
    private $students = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $management
     */
    private $management = null;

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Adds as diploma
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType\DiplomaAType
     * $diploma
     */
    public function addToDiploma(\CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType\DiplomaAType $diploma)
    {
        $this->diploma[] = $diploma;
        return $this;
    }

    /**
     * isset diploma
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDiploma($index)
    {
        return isset($this->diploma[$index]);
    }

    /**
     * unset diploma
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDiploma($index)
    {
        unset($this->diploma[$index]);
    }

    /**
     * Gets as diploma
     *
     * @return
     * \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType\DiplomaAType[]
     */
    public function getDiploma()
    {
        return $this->diploma;
    }

    /**
     * Sets a new diploma
     *
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType\DiplomaAType[]
     * $diploma
     * @return self
     */
    public function setDiploma(array $diploma)
    {
        $this->diploma = $diploma;
        return $this;
    }

    /**
     * Gets as students
     *
     * @return
     * \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType\StudentsAType
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Sets a new students
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType\StudentsAType
     * $students
     * @return self
     */
    public function setStudents(\CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType\PartnershipInfoAType\StudentsAType $students)
    {
        $this->students = $students;
        return $this;
    }

    /**
     * Gets as management
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getManagement()
    {
        return $this->management;
    }

    /**
     * Sets a new management
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $management
     * @return self
     */
    public function setManagement(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $management)
    {
        $this->management = $management;
        return $this;
    }


}

