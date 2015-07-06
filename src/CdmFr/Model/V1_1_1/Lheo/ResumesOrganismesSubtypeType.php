<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing ResumesOrganismesSubtypeType
 *
 *
 * XSD Type: resumes-organismes-subtype
 */
class ResumesOrganismesSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ResumeOrganisme[] $resumeOrganisme
     */
    private $resumeOrganisme = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Adds as resume-organisme
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\ResumeOrganisme $resume-organisme
     */
    public function addToResumeOrganisme(\CdmFr\Model\V1_1_1\Lheo\ResumeOrganisme $resume-organisme)
    {
        $this->resumeOrganisme[] = $resume-organisme;
        return $this;
    }

    /**
     * isset resumeOrganisme
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetResumeOrganisme($index)
    {
        return isset($this->resumeOrganisme[$index]);
    }

    /**
     * unset resumeOrganisme
     *
     * @param scalar $index
     * @return void
     */
    public function unsetResumeOrganisme($index)
    {
        unset($this->resumeOrganisme[$index]);
    }

    /**
     * Gets as resumeOrganisme
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ResumeOrganisme[]
     */
    public function getResumeOrganisme()
    {
        return $this->resumeOrganisme;
    }

    /**
     * Sets a new resumeOrganisme
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ResumeOrganisme[] $resumeOrganisme
     * @return self
     */
    public function setResumeOrganisme(array $resumeOrganisme)
    {
        $this->resumeOrganisme = $resumeOrganisme;
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

