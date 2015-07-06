<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing LheoIndexSubtypeType
 *
 *
 * XSD Type: lheo-index-subtype
 */
class LheoIndexSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ResumesOffres $resumesOffres
     */
    private $resumesOffres = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ResumesOrganismes $resumesOrganismes
     */
    private $resumesOrganismes = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as resumesOffres
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ResumesOffres
     */
    public function getResumesOffres()
    {
        return $this->resumesOffres;
    }

    /**
     * Sets a new resumesOffres
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ResumesOffres $resumesOffres
     * @return self
     */
    public function setResumesOffres(\CdmFr\Model\V1_1_1\Lheo\ResumesOffres $resumesOffres)
    {
        $this->resumesOffres = $resumesOffres;
        return $this;
    }

    /**
     * Gets as resumesOrganismes
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ResumesOrganismes
     */
    public function getResumesOrganismes()
    {
        return $this->resumesOrganismes;
    }

    /**
     * Sets a new resumesOrganismes
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ResumesOrganismes $resumesOrganismes
     * @return self
     */
    public function setResumesOrganismes(\CdmFr\Model\V1_1_1\Lheo\ResumesOrganismes $resumesOrganismes)
    {
        $this->resumesOrganismes = $resumesOrganismes;
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

