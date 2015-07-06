<?php

namespace CdmFr\Model\V1_1_1\CdmFr\CohabilitationType;

/**
 * Class representing ListOfOrgUnitAType
 */
class ListOfOrgUnitAType
{

    /**
     * Rôle de l'établissement ayant produit cette offre de formation, pour ce qui
     * concerne les relations avec la tutelle dans le processus d'habilitation le
     *  porteur doit impérativement être l'auteur de l'offre
     *
     * @property string $cohabilitationRole
     */
    private $cohabilitationRole = null;

    /**
     * Ce champ permet d'insérer un lien vers les données de l'établissement
     * habilité et vers les établissements cohabilités s'il y a
     *  lieu.
     *
     * @property
     * \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType\HabOrgUnitAType[]
     * $habOrgUnit
     */
    private $habOrgUnit = null;

    /**
     * Gets as cohabilitationRole
     *
     * Rôle de l'établissement ayant produit cette offre de formation, pour ce qui
     * concerne les relations avec la tutelle dans le processus d'habilitation le
     *  porteur doit impérativement être l'auteur de l'offre
     *
     * @return string
     */
    public function getCohabilitationRole()
    {
        return $this->cohabilitationRole;
    }

    /**
     * Sets a new cohabilitationRole
     *
     * Rôle de l'établissement ayant produit cette offre de formation, pour ce qui
     * concerne les relations avec la tutelle dans le processus d'habilitation le
     *  porteur doit impérativement être l'auteur de l'offre
     *
     * @param string $cohabilitationRole
     * @return self
     */
    public function setCohabilitationRole($cohabilitationRole)
    {
        $this->cohabilitationRole = $cohabilitationRole;
        return $this;
    }

    /**
     * Adds as habOrgUnit
     *
     * Ce champ permet d'insérer un lien vers les données de l'établissement
     * habilité et vers les établissements cohabilités s'il y a
     *  lieu.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType\HabOrgUnitAType
     * $habOrgUnit
     */
    public function addToHabOrgUnit(\CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType\HabOrgUnitAType $habOrgUnit)
    {
        $this->habOrgUnit[] = $habOrgUnit;
        return $this;
    }

    /**
     * isset habOrgUnit
     *
     * Ce champ permet d'insérer un lien vers les données de l'établissement
     * habilité et vers les établissements cohabilités s'il y a
     *  lieu.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHabOrgUnit($index)
    {
        return isset($this->habOrgUnit[$index]);
    }

    /**
     * unset habOrgUnit
     *
     * Ce champ permet d'insérer un lien vers les données de l'établissement
     * habilité et vers les établissements cohabilités s'il y a
     *  lieu.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHabOrgUnit($index)
    {
        unset($this->habOrgUnit[$index]);
    }

    /**
     * Gets as habOrgUnit
     *
     * Ce champ permet d'insérer un lien vers les données de l'établissement
     * habilité et vers les établissements cohabilités s'il y a
     *  lieu.
     *
     * @return
     * \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType\HabOrgUnitAType[]
     */
    public function getHabOrgUnit()
    {
        return $this->habOrgUnit;
    }

    /**
     * Sets a new habOrgUnit
     *
     * Ce champ permet d'insérer un lien vers les données de l'établissement
     * habilité et vers les établissements cohabilités s'il y a
     *  lieu.
     *
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType\HabOrgUnitAType[]
     * $habOrgUnit
     * @return self
     */
    public function setHabOrgUnit(array $habOrgUnit)
    {
        $this->habOrgUnit = $habOrgUnit;
        return $this;
    }


}

