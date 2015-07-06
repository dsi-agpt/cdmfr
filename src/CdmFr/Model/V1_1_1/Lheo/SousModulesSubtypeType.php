<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing SousModulesSubtypeType
 *
 *
 * XSD Type: sous-modules-subtype
 */
class SousModulesSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\SousModule[] $sousModule
     */
    private $sousModule = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Adds as sous-module
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\SousModule $sous-module
     */
    public function addToSousModule(\CdmFr\Model\V1_1_1\Lheo\SousModule $sous-module)
    {
        $this->sousModule[] = $sous-module;
        return $this;
    }

    /**
     * isset sousModule
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSousModule($index)
    {
        return isset($this->sousModule[$index]);
    }

    /**
     * unset sousModule
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSousModule($index)
    {
        unset($this->sousModule[$index]);
    }

    /**
     * Gets as sousModule
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\SousModule[]
     */
    public function getSousModule()
    {
        return $this->sousModule;
    }

    /**
     * Sets a new sousModule
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\SousModule[] $sousModule
     * @return self
     */
    public function setSousModule(array $sousModule)
    {
        $this->sousModule = $sousModule;
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

