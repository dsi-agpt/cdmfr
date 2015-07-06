<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing TeachingTerm
 */
class TeachingTerm extends InfoBlockType
{

    /**
     * @property \DateTime $start
     */
    private $start = null;

    /**
     * @property string $term
     */
    private $term = null;

    /**
     * @property string $studyPace
     */
    private $studyPace = null;

    /**
     * @property string $timeOfDay
     */
    private $timeOfDay = null;

    /**
     * Gets as start
     *
     * @return \DateTime
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Sets a new start
     *
     * @param \DateTime $start
     * @return self
     */
    public function setStart(\DateTime $start)
    {
        $this->start = $start;
        return $this;
    }

    /**
     * Gets as term
     *
     * @return string
     */
    public function getTerm()
    {
        return $this->term;
    }

    /**
     * Sets a new term
     *
     * @param string $term
     * @return self
     */
    public function setTerm($term)
    {
        $this->term = $term;
        return $this;
    }

    /**
     * Gets as studyPace
     *
     * @return string
     */
    public function getStudyPace()
    {
        return $this->studyPace;
    }

    /**
     * Sets a new studyPace
     *
     * @param string $studyPace
     * @return self
     */
    public function setStudyPace($studyPace)
    {
        $this->studyPace = $studyPace;
        return $this;
    }

    /**
     * Gets as timeOfDay
     *
     * @return string
     */
    public function getTimeOfDay()
    {
        return $this->timeOfDay;
    }

    /**
     * Sets a new timeOfDay
     *
     * @param string $timeOfDay
     * @return self
     */
    public function setTimeOfDay($timeOfDay)
    {
        $this->timeOfDay = $timeOfDay;
        return $this;
    }


}

