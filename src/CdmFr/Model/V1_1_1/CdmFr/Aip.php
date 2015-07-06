<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing Aip
 */
class Aip
{

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $possibleFollowUp
     */
    private $possibleFollowUp = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $successSupport
     */
    private $successSupport = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $learningPathStrategySupport
     */
    private $learningPathStrategySupport = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $professTrainingSupport
     */
    private $professTrainingSupport = null;

    /**
     * Adds as possibleFollowUp
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $possibleFollowUp
     */
    public function addToPossibleFollowUp(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $possibleFollowUp)
    {
        $this->possibleFollowUp[] = $possibleFollowUp;
        return $this;
    }

    /**
     * isset possibleFollowUp
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPossibleFollowUp($index)
    {
        return isset($this->possibleFollowUp[$index]);
    }

    /**
     * unset possibleFollowUp
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPossibleFollowUp($index)
    {
        unset($this->possibleFollowUp[$index]);
    }

    /**
     * Gets as possibleFollowUp
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getPossibleFollowUp()
    {
        return $this->possibleFollowUp;
    }

    /**
     * Sets a new possibleFollowUp
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $possibleFollowUp
     * @return self
     */
    public function setPossibleFollowUp(array $possibleFollowUp)
    {
        $this->possibleFollowUp = $possibleFollowUp;
        return $this;
    }

    /**
     * Adds as successSupport
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $successSupport
     */
    public function addToSuccessSupport(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $successSupport)
    {
        $this->successSupport[] = $successSupport;
        return $this;
    }

    /**
     * isset successSupport
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSuccessSupport($index)
    {
        return isset($this->successSupport[$index]);
    }

    /**
     * unset successSupport
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSuccessSupport($index)
    {
        unset($this->successSupport[$index]);
    }

    /**
     * Gets as successSupport
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getSuccessSupport()
    {
        return $this->successSupport;
    }

    /**
     * Sets a new successSupport
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $successSupport
     * @return self
     */
    public function setSuccessSupport(array $successSupport)
    {
        $this->successSupport = $successSupport;
        return $this;
    }

    /**
     * Adds as learningPathStrategySupport
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $learningPathStrategySupport
     */
    public function addToLearningPathStrategySupport(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $learningPathStrategySupport)
    {
        $this->learningPathStrategySupport[] = $learningPathStrategySupport;
        return $this;
    }

    /**
     * isset learningPathStrategySupport
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLearningPathStrategySupport($index)
    {
        return isset($this->learningPathStrategySupport[$index]);
    }

    /**
     * unset learningPathStrategySupport
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLearningPathStrategySupport($index)
    {
        unset($this->learningPathStrategySupport[$index]);
    }

    /**
     * Gets as learningPathStrategySupport
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getLearningPathStrategySupport()
    {
        return $this->learningPathStrategySupport;
    }

    /**
     * Sets a new learningPathStrategySupport
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $learningPathStrategySupport
     * @return self
     */
    public function setLearningPathStrategySupport(array $learningPathStrategySupport)
    {
        $this->learningPathStrategySupport = $learningPathStrategySupport;
        return $this;
    }

    /**
     * Adds as professTrainingSupport
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $professTrainingSupport
     */
    public function addToProfessTrainingSupport(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $professTrainingSupport)
    {
        $this->professTrainingSupport[] = $professTrainingSupport;
        return $this;
    }

    /**
     * isset professTrainingSupport
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfessTrainingSupport($index)
    {
        return isset($this->professTrainingSupport[$index]);
    }

    /**
     * unset professTrainingSupport
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfessTrainingSupport($index)
    {
        unset($this->professTrainingSupport[$index]);
    }

    /**
     * Gets as professTrainingSupport
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getProfessTrainingSupport()
    {
        return $this->professTrainingSupport;
    }

    /**
     * Sets a new professTrainingSupport
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $professTrainingSupport
     * @return self
     */
    public function setProfessTrainingSupport(array $professTrainingSupport)
    {
        $this->professTrainingSupport = $professTrainingSupport;
        return $this;
    }


}

