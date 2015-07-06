<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing CohabilitationType
 *
 * Detailed description of cohabilitation
 * XSD Type: cohabilitationType
 */
class CohabilitationType
{

    /**
     * Précise si la formation est cohabilitée ou non. En cas de cohabilitation les
     * établissements cohabilités sont identifiés par un lien vers les informations
     * qui les
     *  concernent
     *
     * @property boolean $exists
     */
    private $exists = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType
     * $listOfOrgUnit
     */
    private $listOfOrgUnit = null;

    /**
     * Cet infoblock permet d'ajouter des informations communes à toutes les
     * cohabilitations faisant l'objet de cette demande d'habilitation
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * Gets as exists
     *
     * Précise si la formation est cohabilitée ou non. En cas de cohabilitation les
     * établissements cohabilités sont identifiés par un lien vers les informations
     * qui les
     *  concernent
     *
     * @return boolean
     */
    public function getExists()
    {
        return $this->exists;
    }

    /**
     * Sets a new exists
     *
     * Précise si la formation est cohabilitée ou non. En cas de cohabilitation les
     * établissements cohabilités sont identifiés par un lien vers les informations
     * qui les
     *  concernent
     *
     * @param boolean $exists
     * @return self
     */
    public function setExists($exists)
    {
        $this->exists = $exists;
        return $this;
    }

    /**
     * Gets as listOfOrgUnit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType
     */
    public function getListOfOrgUnit()
    {
        return $this->listOfOrgUnit;
    }

    /**
     * Sets a new listOfOrgUnit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType $listOfOrgUnit
     * @return self
     */
    public function setListOfOrgUnit(\CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType $listOfOrgUnit)
    {
        $this->listOfOrgUnit = $listOfOrgUnit;
        return $this;
    }

    /**
     * Gets as infoBlock
     *
     * Cet infoblock permet d'ajouter des informations communes à toutes les
     * cohabilitations faisant l'objet de cette demande d'habilitation
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * Cet infoblock permet d'ajouter des informations communes à toutes les
     * cohabilitations faisant l'objet de cette demande d'habilitation
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }


}

