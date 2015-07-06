<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing Affiliation
 */
class Affiliation
{

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[] $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * ce texte permet de donner toutes les précisions sur le champ professionnel de
     * l'intervenant : ses fonctions, son niveau de responsabilité, son expérience
     *  pédagogique, etc...
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\Affiliation\ProfessFieldAType[] $professField
     */
    private $professField = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Affiliation\SectCNUAType $sectCNU
     */
    private $sectCNU = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\Affiliation\PublicationsAType[] $publications
     */
    private $publications = null;

    /**
     * Adds as refOrgUnit
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     */
    public function addToRefOrgUnit(\CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit)
    {
        $this->refOrgUnit[] = $refOrgUnit;
        return $this;
    }

    /**
     * isset refOrgUnit
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefOrgUnit($index)
    {
        return isset($this->refOrgUnit[$index]);
    }

    /**
     * unset refOrgUnit
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefOrgUnit($index)
    {
        unset($this->refOrgUnit[$index]);
    }

    /**
     * Gets as refOrgUnit
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[]
     */
    public function getRefOrgUnit()
    {
        return $this->refOrgUnit;
    }

    /**
     * Sets a new refOrgUnit
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit[] $refOrgUnit
     * @return self
     */
    public function setRefOrgUnit(array $refOrgUnit)
    {
        $this->refOrgUnit = $refOrgUnit;
        return $this;
    }

    /**
     * Adds as professField
     *
     * ce texte permet de donner toutes les précisions sur le champ professionnel de
     * l'intervenant : ses fonctions, son niveau de responsabilité, son expérience
     *  pédagogique, etc...
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Affiliation\ProfessFieldAType $professField
     */
    public function addToProfessField(\CdmFr\Model\V1_1_1\CdmFr\Affiliation\ProfessFieldAType $professField)
    {
        $this->professField[] = $professField;
        return $this;
    }

    /**
     * isset professField
     *
     * ce texte permet de donner toutes les précisions sur le champ professionnel de
     * l'intervenant : ses fonctions, son niveau de responsabilité, son expérience
     *  pédagogique, etc...
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetProfessField($index)
    {
        return isset($this->professField[$index]);
    }

    /**
     * unset professField
     *
     * ce texte permet de donner toutes les précisions sur le champ professionnel de
     * l'intervenant : ses fonctions, son niveau de responsabilité, son expérience
     *  pédagogique, etc...
     *
     * @param scalar $index
     * @return void
     */
    public function unsetProfessField($index)
    {
        unset($this->professField[$index]);
    }

    /**
     * Gets as professField
     *
     * ce texte permet de donner toutes les précisions sur le champ professionnel de
     * l'intervenant : ses fonctions, son niveau de responsabilité, son expérience
     *  pédagogique, etc...
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Affiliation\ProfessFieldAType[]
     */
    public function getProfessField()
    {
        return $this->professField;
    }

    /**
     * Sets a new professField
     *
     * ce texte permet de donner toutes les précisions sur le champ professionnel de
     * l'intervenant : ses fonctions, son niveau de responsabilité, son expérience
     *  pédagogique, etc...
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Affiliation\ProfessFieldAType[] $professField
     * @return self
     */
    public function setProfessField(array $professField)
    {
        $this->professField = $professField;
        return $this;
    }

    /**
     * Gets as sectCNU
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Affiliation\SectCNUAType
     */
    public function getSectCNU()
    {
        return $this->sectCNU;
    }

    /**
     * Sets a new sectCNU
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Affiliation\SectCNUAType $sectCNU
     * @return self
     */
    public function setSectCNU(\CdmFr\Model\V1_1_1\CdmFr\Affiliation\SectCNUAType $sectCNU)
    {
        $this->sectCNU = $sectCNU;
        return $this;
    }

    /**
     * Adds as publications
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\Affiliation\PublicationsAType $publications
     */
    public function addToPublications(\CdmFr\Model\V1_1_1\CdmFr\Affiliation\PublicationsAType $publications)
    {
        $this->publications[] = $publications;
        return $this;
    }

    /**
     * isset publications
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPublications($index)
    {
        return isset($this->publications[$index]);
    }

    /**
     * unset publications
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPublications($index)
    {
        unset($this->publications[$index]);
    }

    /**
     * Gets as publications
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\Affiliation\PublicationsAType[]
     */
    public function getPublications()
    {
        return $this->publications;
    }

    /**
     * Sets a new publications
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\Affiliation\PublicationsAType[] $publications
     * @return self
     */
    public function setPublications(array $publications)
    {
        $this->publications = $publications;
        return $this;
    }


}

