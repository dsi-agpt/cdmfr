<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing ContactFormationResumeSubtypeType
 *
 *
 * XSD Type: contact-formation-resume-subtype
 */
class ContactFormationResumeSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Nom $nom
     */
    private $nom = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Telfixe $telfixe
     */
    private $telfixe = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Courriel $courriel
     */
    private $courriel = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

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

