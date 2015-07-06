<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing Level
 */
class Level extends InfoBlockType
{

    /**
     * @property string $level
     */
    private $level = null;

    /**
     * @property string $competenceYielding
     */
    private $competenceYielding = null;

    /**
     * @property string $competenceYieldingCode
     */
    private $competenceYieldingCode = null;

    /**
     * @property string $languageCECRLLevel
     */
    private $languageCECRLLevel = null;

    /**
     * Gets as level
     *
     * @return string
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Sets a new level
     *
     * @param string $level
     * @return self
     */
    public function setLevel($level)
    {
        $this->level = $level;
        return $this;
    }

    /**
     * Gets as competenceYielding
     *
     * @return string
     */
    public function getCompetenceYielding()
    {
        return $this->competenceYielding;
    }

    /**
     * Sets a new competenceYielding
     *
     * @param string $competenceYielding
     * @return self
     */
    public function setCompetenceYielding($competenceYielding)
    {
        $this->competenceYielding = $competenceYielding;
        return $this;
    }

    /**
     * Gets as competenceYieldingCode
     *
     * @return string
     */
    public function getCompetenceYieldingCode()
    {
        return $this->competenceYieldingCode;
    }

    /**
     * Sets a new competenceYieldingCode
     *
     * @param string $competenceYieldingCode
     * @return self
     */
    public function setCompetenceYieldingCode($competenceYieldingCode)
    {
        $this->competenceYieldingCode = $competenceYieldingCode;
        return $this;
    }

    /**
     * Gets as languageCECRLLevel
     *
     * @return string
     */
    public function getLanguageCECRLLevel()
    {
        return $this->languageCECRLLevel;
    }

    /**
     * Sets a new languageCECRLLevel
     *
     * @param string $languageCECRLLevel
     * @return self
     */
    public function setLanguageCECRLLevel($languageCECRLLevel)
    {
        $this->languageCECRLLevel = $languageCECRLLevel;
        return $this;
    }


}

