<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing ResumeOrganismeSubtypeType
 *
 *
 * XSD Type: resume-organisme-subtype
 */
class ResumeOrganismeSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\NomOrganisme $nomOrganisme
     */
    private $nomOrganisme = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\RaisonSociale $raisonSociale
     */
    private $raisonSociale = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\SIRET $sIRET
     */
    private $sIRET = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\NumeroActivite $numeroActivite
     */
    private $numeroActivite = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

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
     * Gets as sIRET
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\SIRET
     */
    public function getSIRET()
    {
        return $this->sIRET;
    }

    /**
     * Sets a new sIRET
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\SIRET $sIRET
     * @return self
     */
    public function setSIRET(\CdmFr\Model\V1_1_1\Lheo\SIRET $sIRET)
    {
        $this->sIRET = $sIRET;
        return $this;
    }

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

