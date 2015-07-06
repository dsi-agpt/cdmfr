<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing LheoPlusSubtypeType
 *
 *
 * XSD Type: lheo-plus-subtype
 */
class LheoPlusSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Lheo $lheo
     */
    private $lheo = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\OrganismeFormationResponsable[]
     * $organismeFormationResponsable
     */
    private $organismeFormationResponsable = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as lheo
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Lheo
     */
    public function getLheo()
    {
        return $this->lheo;
    }

    /**
     * Sets a new lheo
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Lheo $lheo
     * @return self
     */
    public function setLheo(\CdmFr\Model\V1_1_1\Lheo\Lheo $lheo)
    {
        $this->lheo = $lheo;
        return $this;
    }

    /**
     * Adds as organisme-formation-responsable
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\OrganismeFormationResponsable
     * $organisme-formation-responsable
     */
    public function addToOrganismeFormationResponsable(\CdmFr\Model\V1_1_1\Lheo\OrganismeFormationResponsable $organisme-formation-responsable)
    {
        $this->organismeFormationResponsable[] = $organisme-formation-responsable;
        return $this;
    }

    /**
     * isset organismeFormationResponsable
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrganismeFormationResponsable($index)
    {
        return isset($this->organismeFormationResponsable[$index]);
    }

    /**
     * unset organismeFormationResponsable
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrganismeFormationResponsable($index)
    {
        unset($this->organismeFormationResponsable[$index]);
    }

    /**
     * Gets as organismeFormationResponsable
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\OrganismeFormationResponsable[]
     */
    public function getOrganismeFormationResponsable()
    {
        return $this->organismeFormationResponsable;
    }

    /**
     * Sets a new organismeFormationResponsable
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\OrganismeFormationResponsable[]
     * $organismeFormationResponsable
     * @return self
     */
    public function setOrganismeFormationResponsable(array $organismeFormationResponsable)
    {
        $this->organismeFormationResponsable = $organismeFormationResponsable;
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

