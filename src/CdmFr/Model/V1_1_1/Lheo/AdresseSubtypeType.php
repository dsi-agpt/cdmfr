<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing AdresseSubtypeType
 *
 *
 * XSD Type: adresse-subtype
 */
class AdresseSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Ligne[] $ligne
     */
    private $ligne = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Codepostal $codepostal
     */
    private $codepostal = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Ville $ville
     */
    private $ville = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Departement $departement
     */
    private $departement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeINSEECommune $codeINSEECommune
     */
    private $codeINSEECommune = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeINSEECanton $codeINSEECanton
     */
    private $codeINSEECanton = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Region $region
     */
    private $region = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Pays $pays
     */
    private $pays = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Geolocalisation $geolocalisation
     */
    private $geolocalisation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

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
     * Gets as codepostal
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Codepostal
     */
    public function getCodepostal()
    {
        return $this->codepostal;
    }

    /**
     * Sets a new codepostal
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Codepostal $codepostal
     * @return self
     */
    public function setCodepostal(\CdmFr\Model\V1_1_1\Lheo\Codepostal $codepostal)
    {
        $this->codepostal = $codepostal;
        return $this;
    }

    /**
     * Gets as ville
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Ville
     */
    public function getVille()
    {
        return $this->ville;
    }

    /**
     * Sets a new ville
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Ville $ville
     * @return self
     */
    public function setVille(\CdmFr\Model\V1_1_1\Lheo\Ville $ville)
    {
        $this->ville = $ville;
        return $this;
    }

    /**
     * Gets as departement
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Departement
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * Sets a new departement
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Departement $departement
     * @return self
     */
    public function setDepartement(\CdmFr\Model\V1_1_1\Lheo\Departement $departement)
    {
        $this->departement = $departement;
        return $this;
    }

    /**
     * Gets as codeINSEECommune
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeINSEECommune
     */
    public function getCodeINSEECommune()
    {
        return $this->codeINSEECommune;
    }

    /**
     * Sets a new codeINSEECommune
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeINSEECommune $codeINSEECommune
     * @return self
     */
    public function setCodeINSEECommune(\CdmFr\Model\V1_1_1\Lheo\CodeINSEECommune $codeINSEECommune)
    {
        $this->codeINSEECommune = $codeINSEECommune;
        return $this;
    }

    /**
     * Gets as codeINSEECanton
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeINSEECanton
     */
    public function getCodeINSEECanton()
    {
        return $this->codeINSEECanton;
    }

    /**
     * Sets a new codeINSEECanton
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeINSEECanton $codeINSEECanton
     * @return self
     */
    public function setCodeINSEECanton(\CdmFr\Model\V1_1_1\Lheo\CodeINSEECanton $codeINSEECanton)
    {
        $this->codeINSEECanton = $codeINSEECanton;
        return $this;
    }

    /**
     * Gets as region
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Region
     */
    public function getRegion()
    {
        return $this->region;
    }

    /**
     * Sets a new region
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Region $region
     * @return self
     */
    public function setRegion(\CdmFr\Model\V1_1_1\Lheo\Region $region)
    {
        $this->region = $region;
        return $this;
    }

    /**
     * Gets as pays
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Pays
     */
    public function getPays()
    {
        return $this->pays;
    }

    /**
     * Sets a new pays
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Pays $pays
     * @return self
     */
    public function setPays(\CdmFr\Model\V1_1_1\Lheo\Pays $pays)
    {
        $this->pays = $pays;
        return $this;
    }

    /**
     * Gets as geolocalisation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Geolocalisation
     */
    public function getGeolocalisation()
    {
        return $this->geolocalisation;
    }

    /**
     * Sets a new geolocalisation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Geolocalisation $geolocalisation
     * @return self
     */
    public function setGeolocalisation(\CdmFr\Model\V1_1_1\Lheo\Geolocalisation $geolocalisation)
    {
        $this->geolocalisation = $geolocalisation;
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

