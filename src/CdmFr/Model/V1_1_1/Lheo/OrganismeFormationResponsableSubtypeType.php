<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing OrganismeFormationResponsableSubtypeType
 *
 *
 * XSD Type: organisme-formation-responsable-subtype
 */
class OrganismeFormationResponsableSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\NumeroActivite $numeroActivite
     */
    private $numeroActivite = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\SIRETOrganismeFormation $sIRETOrganismeFormation
     */
    private $sIRETOrganismeFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\NomOrganisme $nomOrganisme
     */
    private $nomOrganisme = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\RaisonSociale $raisonSociale
     */
    private $raisonSociale = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CoordonneesOrganisme $coordonneesOrganisme
     */
    private $coordonneesOrganisme = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ContactOrganisme $contactOrganisme
     */
    private $contactOrganisme = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\RenseignementsSpecifiques $renseignementsSpecifiques
     */
    private $renseignementsSpecifiques = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Potentiel $potentiel
     */
    private $potentiel = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as numeroActivite
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\NumeroActivite
     */
    public function getNumeroActivite()
    {
        return $this->numeroActivite;
    }

    /**
     * Sets a new numeroActivite
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\NumeroActivite $numeroActivite
     * @return self
     */
    public function setNumeroActivite(\CdmFr\Model\V1_1_1\Lheo\NumeroActivite $numeroActivite)
    {
        $this->numeroActivite = $numeroActivite;
        return $this;
    }

    /**
     * Gets as sIRETOrganismeFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\SIRETOrganismeFormation
     */
    public function getSIRETOrganismeFormation()
    {
        return $this->sIRETOrganismeFormation;
    }

    /**
     * Sets a new sIRETOrganismeFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\SIRETOrganismeFormation $sIRETOrganismeFormation
     * @return self
     */
    public function setSIRETOrganismeFormation(\CdmFr\Model\V1_1_1\Lheo\SIRETOrganismeFormation $sIRETOrganismeFormation)
    {
        $this->sIRETOrganismeFormation = $sIRETOrganismeFormation;
        return $this;
    }

    /**
     * Gets as nomOrganisme
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\NomOrganisme
     */
    public function getNomOrganisme()
    {
        return $this->nomOrganisme;
    }

    /**
     * Sets a new nomOrganisme
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\NomOrganisme $nomOrganisme
     * @return self
     */
    public function setNomOrganisme(\CdmFr\Model\V1_1_1\Lheo\NomOrganisme $nomOrganisme)
    {
        $this->nomOrganisme = $nomOrganisme;
        return $this;
    }

    /**
     * Gets as raisonSociale
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\RaisonSociale
     */
    public function getRaisonSociale()
    {
        return $this->raisonSociale;
    }

    /**
     * Sets a new raisonSociale
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\RaisonSociale $raisonSociale
     * @return self
     */
    public function setRaisonSociale(\CdmFr\Model\V1_1_1\Lheo\RaisonSociale $raisonSociale)
    {
        $this->raisonSociale = $raisonSociale;
        return $this;
    }

    /**
     * Gets as coordonneesOrganisme
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CoordonneesOrganisme
     */
    public function getCoordonneesOrganisme()
    {
        return $this->coordonneesOrganisme;
    }

    /**
     * Sets a new coordonneesOrganisme
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CoordonneesOrganisme $coordonneesOrganisme
     * @return self
     */
    public function setCoordonneesOrganisme(\CdmFr\Model\V1_1_1\Lheo\CoordonneesOrganisme $coordonneesOrganisme)
    {
        $this->coordonneesOrganisme = $coordonneesOrganisme;
        return $this;
    }

    /**
     * Gets as contactOrganisme
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ContactOrganisme
     */
    public function getContactOrganisme()
    {
        return $this->contactOrganisme;
    }

    /**
     * Sets a new contactOrganisme
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ContactOrganisme $contactOrganisme
     * @return self
     */
    public function setContactOrganisme(\CdmFr\Model\V1_1_1\Lheo\ContactOrganisme $contactOrganisme)
    {
        $this->contactOrganisme = $contactOrganisme;
        return $this;
    }

    /**
     * Gets as renseignementsSpecifiques
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\RenseignementsSpecifiques
     */
    public function getRenseignementsSpecifiques()
    {
        return $this->renseignementsSpecifiques;
    }

    /**
     * Sets a new renseignementsSpecifiques
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\RenseignementsSpecifiques $renseignementsSpecifiques
     * @return self
     */
    public function setRenseignementsSpecifiques(\CdmFr\Model\V1_1_1\Lheo\RenseignementsSpecifiques $renseignementsSpecifiques)
    {
        $this->renseignementsSpecifiques = $renseignementsSpecifiques;
        return $this;
    }

    /**
     * Gets as potentiel
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Potentiel
     */
    public function getPotentiel()
    {
        return $this->potentiel;
    }

    /**
     * Sets a new potentiel
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Potentiel $potentiel
     * @return self
     */
    public function setPotentiel(\CdmFr\Model\V1_1_1\Lheo\Potentiel $potentiel)
    {
        $this->potentiel = $potentiel;
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

