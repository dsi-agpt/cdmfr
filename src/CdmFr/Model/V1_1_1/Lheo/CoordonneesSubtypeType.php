<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing CoordonneesSubtypeType
 *
 *
 * XSD Type: coordonnees-subtype
 */
class CoordonneesSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Civilite $civilite
     */
    private $civilite = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Nom $nom
     */
    private $nom = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Prenom $prenom
     */
    private $prenom = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Ligne[] $ligne
     */
    private $ligne = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Adresse $adresse
     */
    private $adresse = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Telfixe $telfixe
     */
    private $telfixe = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Portable $portable
     */
    private $portable = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Fax $fax
     */
    private $fax = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Courriel $courriel
     */
    private $courriel = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Web $web
     */
    private $web = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as civilite
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Civilite
     */
    public function getCivilite()
    {
        return $this->civilite;
    }

    /**
     * Sets a new civilite
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Civilite $civilite
     * @return self
     */
    public function setCivilite(\CdmFr\Model\V1_1_1\Lheo\Civilite $civilite)
    {
        $this->civilite = $civilite;
        return $this;
    }

    /**
     * Gets as nom
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Nom
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Sets a new nom
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Nom $nom
     * @return self
     */
    public function setNom(\CdmFr\Model\V1_1_1\Lheo\Nom $nom)
    {
        $this->nom = $nom;
        return $this;
    }

    /**
     * Gets as prenom
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Prenom
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Sets a new prenom
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Prenom $prenom
     * @return self
     */
    public function setPrenom(\CdmFr\Model\V1_1_1\Lheo\Prenom $prenom)
    {
        $this->prenom = $prenom;
        return $this;
    }

    /**
     * Adds as ligne
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Ligne $ligne
     */
    public function addToLigne(\CdmFr\Model\V1_1_1\Lheo\Ligne $ligne)
    {
        $this->ligne[] = $ligne;
        return $this;
    }

    /**
     * isset ligne
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLigne($index)
    {
        return isset($this->ligne[$index]);
    }

    /**
     * unset ligne
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLigne($index)
    {
        unset($this->ligne[$index]);
    }

    /**
     * Gets as ligne
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Ligne[]
     */
    public function getLigne()
    {
        return $this->ligne;
    }

    /**
     * Sets a new ligne
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Ligne[] $ligne
     * @return self
     */
    public function setLigne(array $ligne)
    {
        $this->ligne = $ligne;
        return $this;
    }

    /**
     * Gets as adresse
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Adresse
     */
    public function getAdresse()
    {
        return $this->adresse;
    }

    /**
     * Sets a new adresse
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Adresse $adresse
     * @return self
     */
    public function setAdresse(\CdmFr\Model\V1_1_1\Lheo\Adresse $adresse)
    {
        $this->adresse = $adresse;
        return $this;
    }

    /**
     * Gets as telfixe
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Telfixe
     */
    public function getTelfixe()
    {
        return $this->telfixe;
    }

    /**
     * Sets a new telfixe
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Telfixe $telfixe
     * @return self
     */
    public function setTelfixe(\CdmFr\Model\V1_1_1\Lheo\Telfixe $telfixe)
    {
        $this->telfixe = $telfixe;
        return $this;
    }

    /**
     * Gets as portable
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Portable
     */
    public function getPortable()
    {
        return $this->portable;
    }

    /**
     * Sets a new portable
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Portable $portable
     * @return self
     */
    public function setPortable(\CdmFr\Model\V1_1_1\Lheo\Portable $portable)
    {
        $this->portable = $portable;
        return $this;
    }

    /**
     * Gets as fax
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Fax
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * Sets a new fax
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Fax $fax
     * @return self
     */
    public function setFax(\CdmFr\Model\V1_1_1\Lheo\Fax $fax)
    {
        $this->fax = $fax;
        return $this;
    }

    /**
     * Gets as courriel
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Courriel
     */
    public function getCourriel()
    {
        return $this->courriel;
    }

    /**
     * Sets a new courriel
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Courriel $courriel
     * @return self
     */
    public function setCourriel(\CdmFr\Model\V1_1_1\Lheo\Courriel $courriel)
    {
        $this->courriel = $courriel;
        return $this;
    }

    /**
     * Gets as web
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Web
     */
    public function getWeb()
    {
        return $this->web;
    }

    /**
     * Sets a new web
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Web $web
     * @return self
     */
    public function setWeb(\CdmFr\Model\V1_1_1\Lheo\Web $web)
    {
        $this->web = $web;
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

