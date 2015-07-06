<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing SousModuleSubtypeType
 *
 *
 * XSD Type: sous-module-subtype
 */
class SousModuleSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ReferenceModule $referenceModule
     */
    private $referenceModule = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\TypeModule $typeModule
     */
    private $typeModule = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as referenceModule
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ReferenceModule
     */
    public function getReferenceModule()
    {
        return $this->referenceModule;
    }

    /**
     * Sets a new referenceModule
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ReferenceModule $referenceModule
     * @return self
     */
    public function setReferenceModule(\CdmFr\Model\V1_1_1\Lheo\ReferenceModule $referenceModule)
    {
        $this->referenceModule = $referenceModule;
        return $this;
    }

    /**
     * Gets as typeModule
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\TypeModule
     */
    public function getTypeModule()
    {
        return $this->typeModule;
    }

    /**
     * Sets a new typeModule
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\TypeModule $typeModule
     * @return self
     */
    public function setTypeModule(\CdmFr\Model\V1_1_1\Lheo\TypeModule $typeModule)
    {
        $this->typeModule = $typeModule;
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

