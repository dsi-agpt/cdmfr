<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing ResumesOffresSubtypeType
 *
 *
 * XSD Type: resumes-offres-subtype
 */
class ResumesOffresSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ResumeOffre[] $resumeOffre
     */
    private $resumeOffre = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Adds as resume-offre
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\ResumeOffre $resume-offre
     */
    public function addToResumeOffre(\CdmFr\Model\V1_1_1\Lheo\ResumeOffre $resume-offre)
    {
        $this->resumeOffre[] = $resume-offre;
        return $this;
    }

    /**
     * isset resumeOffre
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResumeOffre($index)
    {
        return isset($this->resumeOffre[$index]);
    }

    /**
     * unset resumeOffre
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResumeOffre($index)
    {
        unset($this->resumeOffre[$index]);
    }

    /**
     * Gets as resumeOffre
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ResumeOffre[]
     */
    public function getResumeOffre()
    {
        return $this->resumeOffre;
    }

    /**
     * Sets a new resumeOffre
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ResumeOffre[] $resumeOffre
     * @return self
     */
    public function setResumeOffre(array $resumeOffre)
    {
        $this->resumeOffre = $resumeOffre;
        return $this;
    }

    /**
     * Adds as extras
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Extras $extras
     */
    public function addToExtras(\CdmFr\Model\V1_1_1\Lheo\Extras $extras)
    {
        $this->extras[] = $extras;
        return $this;
    }

    /**
     * isset extras
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetExtras($index)
    {
        return isset($this->extras[$index]);
    }

    /**
     * unset extras
     *
     * @param scalar $index
     * @return void
     */
    public function unsetExtras($index)
    {
        unset($this->extras[$index]);
    }

    /**
     * Gets as extras
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Extras[]
     */
    public function getExtras()
    {
        return $this->extras;
    }

    /**
     * Sets a new extras
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     * @return self
     */
    public function setExtras(array $extras)
    {
        $this->extras = $extras;
        return $this;
    }


}

