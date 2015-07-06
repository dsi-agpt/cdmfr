<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing ModulesPrerequisSubtypeType
 *
 *
 * XSD Type: modules-prerequis-subtype
 */
class ModulesPrerequisSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ReferenceModule[] $referenceModule
     */
    private $referenceModule = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Adds as reference-module
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\ReferenceModule $reference-module
     */
    public function addToReferenceModule(\CdmFr\Model\V1_1_1\Lheo\ReferenceModule $reference-module)
    {
        $this->referenceModule[] = $reference-module;
        return $this;
    }

    /**
     * isset referenceModule
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetReferenceModule($index)
    {
        return isset($this->referenceModule[$index]);
    }

    /**
     * unset referenceModule
     *
     * @param scalar $index
     * @return void
     */
    public function unsetReferenceModule($index)
    {
        unset($this->referenceModule[$index]);
    }

    /**
     * Gets as referenceModule
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ReferenceModule[]
     */
    public function getReferenceModule()
    {
        return $this->referenceModule;
    }

    /**
     * Sets a new referenceModule
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ReferenceModule[] $referenceModule
     * @return self
     */
    public function setReferenceModule(array $referenceModule)
    {
        $this->referenceModule = $referenceModule;
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

