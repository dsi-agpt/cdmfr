<?php

namespace CdmFr\Model\V1_1_1\Lheo;

/**
 * Class representing ActionSubtypeType
 *
 *
 * XSD Type: action-subtype
 */
class ActionSubtypeType
{

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\RythmeFormation $rythmeFormation
     */
    private $rythmeFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodePublicVise[] $codePublicVise
     */
    private $codePublicVise = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\DureeIndicative $dureeIndicative
     */
    private $dureeIndicative = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\NiveauEntreeObligatoire $niveauEntreeObligatoire
     */
    private $niveauEntreeObligatoire = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ModalitesAlternance $modalitesAlternance
     */
    private $modalitesAlternance = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ModalitesEnseignement $modalitesEnseignement
     */
    private $modalitesEnseignement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ConditionsSpecifiques $conditionsSpecifiques
     */
    private $conditionsSpecifiques = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\PriseEnChargeFraisPossible
     * $priseEnChargeFraisPossible
     */
    private $priseEnChargeFraisPossible = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\LieuDeFormation $lieuDeFormation
     */
    private $lieuDeFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ModalitesEntreesSorties $modalitesEntreesSorties
     */
    private $modalitesEntreesSorties = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\AdresseInscription $adresseInscription
     */
    private $adresseInscription = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\DateInscription[] $dateInscription
     */
    private $dateInscription = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Session[] $session
     */
    private $session = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\AdresseInformation $adresseInformation
     */
    private $adresseInformation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\DateInformation[] $dateInformation
     */
    private $dateInformation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Restauration $restauration
     */
    private $restauration = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Hebergement $hebergement
     */
    private $hebergement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Transport $transport
     */
    private $transport = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\AccesHandicapes $accesHandicapes
     */
    private $accesHandicapes = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\LangueFormation $langueFormation
     */
    private $langueFormation = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ModalitesRecrutement $modalitesRecrutement
     */
    private $modalitesRecrutement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\ModalitesPedagogiques $modalitesPedagogiques
     */
    private $modalitesPedagogiques = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodeModalitePedagogique[] $codeModalitePedagogique
     */
    private $codeModalitePedagogique = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\FraisRestants $fraisRestants
     */
    private $fraisRestants = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\CodePerimetreRecrutement $codePerimetreRecrutement
     */
    private $codePerimetreRecrutement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\InfosPerimetreRecrutement $infosPerimetreRecrutement
     */
    private $infosPerimetreRecrutement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\PrixHoraireTTC $prixHoraireTTC
     */
    private $prixHoraireTTC = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\NombreHeuresTotal $nombreHeuresTotal
     */
    private $nombreHeuresTotal = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\DetailConditionsPriseEnCharge
     * $detailConditionsPriseEnCharge
     */
    private $detailConditionsPriseEnCharge = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Conventionnement $conventionnement
     */
    private $conventionnement = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\DureeConventionnee $dureeConventionnee
     */
    private $dureeConventionnee = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\DateLimiteInscription $dateLimiteInscription
     */
    private $dateLimiteInscription = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\OrganismeFormateur $organismeFormateur
     */
    private $organismeFormateur = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\OrganismeFinanceur[] $organismeFinanceur
     */
    private $organismeFinanceur = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Lheo\Extras[] $extras
     */
    private $extras = null;

    /**
     * Gets as rythmeFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\RythmeFormation
     */
    public function getRythmeFormation()
    {
        return $this->rythmeFormation;
    }

    /**
     * Sets a new rythmeFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\RythmeFormation $rythmeFormation
     * @return self
     */
    public function setRythmeFormation(\CdmFr\Model\V1_1_1\Lheo\RythmeFormation $rythmeFormation)
    {
        $this->rythmeFormation = $rythmeFormation;
        return $this;
    }

    /**
     * Adds as code-public-vise
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\CodePublicVise $code-public-vise
     */
    public function addToCodePublicVise(\CdmFr\Model\V1_1_1\Lheo\CodePublicVise $code-public-vise)
    {
        $this->codePublicVise[] = $code-public-vise;
        return $this;
    }

    /**
     * isset codePublicVise
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodePublicVise($index)
    {
        return isset($this->codePublicVise[$index]);
    }

    /**
     * unset codePublicVise
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodePublicVise($index)
    {
        unset($this->codePublicVise[$index]);
    }

    /**
     * Gets as codePublicVise
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodePublicVise[]
     */
    public function getCodePublicVise()
    {
        return $this->codePublicVise;
    }

    /**
     * Sets a new codePublicVise
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodePublicVise[] $codePublicVise
     * @return self
     */
    public function setCodePublicVise(array $codePublicVise)
    {
        $this->codePublicVise = $codePublicVise;
        return $this;
    }

    /**
     * Gets as dureeIndicative
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\DureeIndicative
     */
    public function getDureeIndicative()
    {
        return $this->dureeIndicative;
    }

    /**
     * Sets a new dureeIndicative
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\DureeIndicative $dureeIndicative
     * @return self
     */
    public function setDureeIndicative(\CdmFr\Model\V1_1_1\Lheo\DureeIndicative $dureeIndicative)
    {
        $this->dureeIndicative = $dureeIndicative;
        return $this;
    }

    /**
     * Gets as niveauEntreeObligatoire
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\NiveauEntreeObligatoire
     */
    public function getNiveauEntreeObligatoire()
    {
        return $this->niveauEntreeObligatoire;
    }

    /**
     * Sets a new niveauEntreeObligatoire
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\NiveauEntreeObligatoire $niveauEntreeObligatoire
     * @return self
     */
    public function setNiveauEntreeObligatoire(\CdmFr\Model\V1_1_1\Lheo\NiveauEntreeObligatoire $niveauEntreeObligatoire)
    {
        $this->niveauEntreeObligatoire = $niveauEntreeObligatoire;
        return $this;
    }

    /**
     * Gets as modalitesAlternance
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ModalitesAlternance
     */
    public function getModalitesAlternance()
    {
        return $this->modalitesAlternance;
    }

    /**
     * Sets a new modalitesAlternance
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ModalitesAlternance $modalitesAlternance
     * @return self
     */
    public function setModalitesAlternance(\CdmFr\Model\V1_1_1\Lheo\ModalitesAlternance $modalitesAlternance)
    {
        $this->modalitesAlternance = $modalitesAlternance;
        return $this;
    }

    /**
     * Gets as modalitesEnseignement
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ModalitesEnseignement
     */
    public function getModalitesEnseignement()
    {
        return $this->modalitesEnseignement;
    }

    /**
     * Sets a new modalitesEnseignement
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ModalitesEnseignement $modalitesEnseignement
     * @return self
     */
    public function setModalitesEnseignement(\CdmFr\Model\V1_1_1\Lheo\ModalitesEnseignement $modalitesEnseignement)
    {
        $this->modalitesEnseignement = $modalitesEnseignement;
        return $this;
    }

    /**
     * Gets as conditionsSpecifiques
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ConditionsSpecifiques
     */
    public function getConditionsSpecifiques()
    {
        return $this->conditionsSpecifiques;
    }

    /**
     * Sets a new conditionsSpecifiques
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ConditionsSpecifiques $conditionsSpecifiques
     * @return self
     */
    public function setConditionsSpecifiques(\CdmFr\Model\V1_1_1\Lheo\ConditionsSpecifiques $conditionsSpecifiques)
    {
        $this->conditionsSpecifiques = $conditionsSpecifiques;
        return $this;
    }

    /**
     * Gets as priseEnChargeFraisPossible
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\PriseEnChargeFraisPossible
     */
    public function getPriseEnChargeFraisPossible()
    {
        return $this->priseEnChargeFraisPossible;
    }

    /**
     * Sets a new priseEnChargeFraisPossible
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\PriseEnChargeFraisPossible $priseEnChargeFraisPossible
     * @return self
     */
    public function setPriseEnChargeFraisPossible(\CdmFr\Model\V1_1_1\Lheo\PriseEnChargeFraisPossible $priseEnChargeFraisPossible)
    {
        $this->priseEnChargeFraisPossible = $priseEnChargeFraisPossible;
        return $this;
    }

    /**
     * Gets as lieuDeFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\LieuDeFormation
     */
    public function getLieuDeFormation()
    {
        return $this->lieuDeFormation;
    }

    /**
     * Sets a new lieuDeFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\LieuDeFormation $lieuDeFormation
     * @return self
     */
    public function setLieuDeFormation(\CdmFr\Model\V1_1_1\Lheo\LieuDeFormation $lieuDeFormation)
    {
        $this->lieuDeFormation = $lieuDeFormation;
        return $this;
    }

    /**
     * Gets as modalitesEntreesSorties
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ModalitesEntreesSorties
     */
    public function getModalitesEntreesSorties()
    {
        return $this->modalitesEntreesSorties;
    }

    /**
     * Sets a new modalitesEntreesSorties
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ModalitesEntreesSorties $modalitesEntreesSorties
     * @return self
     */
    public function setModalitesEntreesSorties(\CdmFr\Model\V1_1_1\Lheo\ModalitesEntreesSorties $modalitesEntreesSorties)
    {
        $this->modalitesEntreesSorties = $modalitesEntreesSorties;
        return $this;
    }

    /**
     * Gets as adresseInscription
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\AdresseInscription
     */
    public function getAdresseInscription()
    {
        return $this->adresseInscription;
    }

    /**
     * Sets a new adresseInscription
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\AdresseInscription $adresseInscription
     * @return self
     */
    public function setAdresseInscription(\CdmFr\Model\V1_1_1\Lheo\AdresseInscription $adresseInscription)
    {
        $this->adresseInscription = $adresseInscription;
        return $this;
    }

    /**
     * Adds as date-inscription
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\DateInscription $date-inscription
     */
    public function addToDateInscription(\CdmFr\Model\V1_1_1\Lheo\DateInscription $date-inscription)
    {
        $this->dateInscription[] = $date-inscription;
        return $this;
    }

    /**
     * isset dateInscription
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDateInscription($index)
    {
        return isset($this->dateInscription[$index]);
    }

    /**
     * unset dateInscription
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDateInscription($index)
    {
        unset($this->dateInscription[$index]);
    }

    /**
     * Gets as dateInscription
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\DateInscription[]
     */
    public function getDateInscription()
    {
        return $this->dateInscription;
    }

    /**
     * Sets a new dateInscription
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\DateInscription[] $dateInscription
     * @return self
     */
    public function setDateInscription(array $dateInscription)
    {
        $this->dateInscription = $dateInscription;
        return $this;
    }

    /**
     * Adds as session
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\Session $session
     */
    public function addToSession(\CdmFr\Model\V1_1_1\Lheo\Session $session)
    {
        $this->session[] = $session;
        return $this;
    }

    /**
     * isset session
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetSession($index)
    {
        return isset($this->session[$index]);
    }

    /**
     * unset session
     *
     * @param scalar $index
     * @return void
     */
    public function unsetSession($index)
    {
        unset($this->session[$index]);
    }

    /**
     * Gets as session
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Session[]
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Sets a new session
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Session[] $session
     * @return self
     */
    public function setSession(array $session)
    {
        $this->session = $session;
        return $this;
    }

    /**
     * Gets as adresseInformation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\AdresseInformation
     */
    public function getAdresseInformation()
    {
        return $this->adresseInformation;
    }

    /**
     * Sets a new adresseInformation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\AdresseInformation $adresseInformation
     * @return self
     */
    public function setAdresseInformation(\CdmFr\Model\V1_1_1\Lheo\AdresseInformation $adresseInformation)
    {
        $this->adresseInformation = $adresseInformation;
        return $this;
    }

    /**
     * Adds as date-information
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\DateInformation $date-information
     */
    public function addToDateInformation(\CdmFr\Model\V1_1_1\Lheo\DateInformation $date-information)
    {
        $this->dateInformation[] = $date-information;
        return $this;
    }

    /**
     * isset dateInformation
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDateInformation($index)
    {
        return isset($this->dateInformation[$index]);
    }

    /**
     * unset dateInformation
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDateInformation($index)
    {
        unset($this->dateInformation[$index]);
    }

    /**
     * Gets as dateInformation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\DateInformation[]
     */
    public function getDateInformation()
    {
        return $this->dateInformation;
    }

    /**
     * Sets a new dateInformation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\DateInformation[] $dateInformation
     * @return self
     */
    public function setDateInformation(array $dateInformation)
    {
        $this->dateInformation = $dateInformation;
        return $this;
    }

    /**
     * Gets as restauration
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Restauration
     */
    public function getRestauration()
    {
        return $this->restauration;
    }

    /**
     * Sets a new restauration
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Restauration $restauration
     * @return self
     */
    public function setRestauration(\CdmFr\Model\V1_1_1\Lheo\Restauration $restauration)
    {
        $this->restauration = $restauration;
        return $this;
    }

    /**
     * Gets as hebergement
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Hebergement
     */
    public function getHebergement()
    {
        return $this->hebergement;
    }

    /**
     * Sets a new hebergement
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Hebergement $hebergement
     * @return self
     */
    public function setHebergement(\CdmFr\Model\V1_1_1\Lheo\Hebergement $hebergement)
    {
        $this->hebergement = $hebergement;
        return $this;
    }

    /**
     * Gets as transport
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Transport
     */
    public function getTransport()
    {
        return $this->transport;
    }

    /**
     * Sets a new transport
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Transport $transport
     * @return self
     */
    public function setTransport(\CdmFr\Model\V1_1_1\Lheo\Transport $transport)
    {
        $this->transport = $transport;
        return $this;
    }

    /**
     * Gets as accesHandicapes
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\AccesHandicapes
     */
    public function getAccesHandicapes()
    {
        return $this->accesHandicapes;
    }

    /**
     * Sets a new accesHandicapes
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\AccesHandicapes $accesHandicapes
     * @return self
     */
    public function setAccesHandicapes(\CdmFr\Model\V1_1_1\Lheo\AccesHandicapes $accesHandicapes)
    {
        $this->accesHandicapes = $accesHandicapes;
        return $this;
    }

    /**
     * Gets as langueFormation
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\LangueFormation
     */
    public function getLangueFormation()
    {
        return $this->langueFormation;
    }

    /**
     * Sets a new langueFormation
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\LangueFormation $langueFormation
     * @return self
     */
    public function setLangueFormation(\CdmFr\Model\V1_1_1\Lheo\LangueFormation $langueFormation)
    {
        $this->langueFormation = $langueFormation;
        return $this;
    }

    /**
     * Gets as modalitesRecrutement
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ModalitesRecrutement
     */
    public function getModalitesRecrutement()
    {
        return $this->modalitesRecrutement;
    }

    /**
     * Sets a new modalitesRecrutement
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ModalitesRecrutement $modalitesRecrutement
     * @return self
     */
    public function setModalitesRecrutement(\CdmFr\Model\V1_1_1\Lheo\ModalitesRecrutement $modalitesRecrutement)
    {
        $this->modalitesRecrutement = $modalitesRecrutement;
        return $this;
    }

    /**
     * Gets as modalitesPedagogiques
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\ModalitesPedagogiques
     */
    public function getModalitesPedagogiques()
    {
        return $this->modalitesPedagogiques;
    }

    /**
     * Sets a new modalitesPedagogiques
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\ModalitesPedagogiques $modalitesPedagogiques
     * @return self
     */
    public function setModalitesPedagogiques(\CdmFr\Model\V1_1_1\Lheo\ModalitesPedagogiques $modalitesPedagogiques)
    {
        $this->modalitesPedagogiques = $modalitesPedagogiques;
        return $this;
    }

    /**
     * Adds as code-modalite-pedagogique
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeModalitePedagogique $code-modalite-pedagogique
     */
    public function addToCodeModalitePedagogique(\CdmFr\Model\V1_1_1\Lheo\CodeModalitePedagogique $code-modalite-pedagogique)
    {
        $this->codeModalitePedagogique[] = $code-modalite-pedagogique;
        return $this;
    }

    /**
     * isset codeModalitePedagogique
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeModalitePedagogique($index)
    {
        return isset($this->codeModalitePedagogique[$index]);
    }

    /**
     * unset codeModalitePedagogique
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeModalitePedagogique($index)
    {
        unset($this->codeModalitePedagogique[$index]);
    }

    /**
     * Gets as codeModalitePedagogique
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodeModalitePedagogique[]
     */
    public function getCodeModalitePedagogique()
    {
        return $this->codeModalitePedagogique;
    }

    /**
     * Sets a new codeModalitePedagogique
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodeModalitePedagogique[] $codeModalitePedagogique
     * @return self
     */
    public function setCodeModalitePedagogique(array $codeModalitePedagogique)
    {
        $this->codeModalitePedagogique = $codeModalitePedagogique;
        return $this;
    }

    /**
     * Gets as fraisRestants
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\FraisRestants
     */
    public function getFraisRestants()
    {
        return $this->fraisRestants;
    }

    /**
     * Sets a new fraisRestants
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\FraisRestants $fraisRestants
     * @return self
     */
    public function setFraisRestants(\CdmFr\Model\V1_1_1\Lheo\FraisRestants $fraisRestants)
    {
        $this->fraisRestants = $fraisRestants;
        return $this;
    }

    /**
     * Gets as codePerimetreRecrutement
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\CodePerimetreRecrutement
     */
    public function getCodePerimetreRecrutement()
    {
        return $this->codePerimetreRecrutement;
    }

    /**
     * Sets a new codePerimetreRecrutement
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\CodePerimetreRecrutement $codePerimetreRecrutement
     * @return self
     */
    public function setCodePerimetreRecrutement(\CdmFr\Model\V1_1_1\Lheo\CodePerimetreRecrutement $codePerimetreRecrutement)
    {
        $this->codePerimetreRecrutement = $codePerimetreRecrutement;
        return $this;
    }

    /**
     * Gets as infosPerimetreRecrutement
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\InfosPerimetreRecrutement
     */
    public function getInfosPerimetreRecrutement()
    {
        return $this->infosPerimetreRecrutement;
    }

    /**
     * Sets a new infosPerimetreRecrutement
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\InfosPerimetreRecrutement $infosPerimetreRecrutement
     * @return self
     */
    public function setInfosPerimetreRecrutement(\CdmFr\Model\V1_1_1\Lheo\InfosPerimetreRecrutement $infosPerimetreRecrutement)
    {
        $this->infosPerimetreRecrutement = $infosPerimetreRecrutement;
        return $this;
    }

    /**
     * Gets as prixHoraireTTC
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\PrixHoraireTTC
     */
    public function getPrixHoraireTTC()
    {
        return $this->prixHoraireTTC;
    }

    /**
     * Sets a new prixHoraireTTC
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\PrixHoraireTTC $prixHoraireTTC
     * @return self
     */
    public function setPrixHoraireTTC(\CdmFr\Model\V1_1_1\Lheo\PrixHoraireTTC $prixHoraireTTC)
    {
        $this->prixHoraireTTC = $prixHoraireTTC;
        return $this;
    }

    /**
     * Gets as nombreHeuresTotal
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\NombreHeuresTotal
     */
    public function getNombreHeuresTotal()
    {
        return $this->nombreHeuresTotal;
    }

    /**
     * Sets a new nombreHeuresTotal
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\NombreHeuresTotal $nombreHeuresTotal
     * @return self
     */
    public function setNombreHeuresTotal(\CdmFr\Model\V1_1_1\Lheo\NombreHeuresTotal $nombreHeuresTotal)
    {
        $this->nombreHeuresTotal = $nombreHeuresTotal;
        return $this;
    }

    /**
     * Gets as detailConditionsPriseEnCharge
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\DetailConditionsPriseEnCharge
     */
    public function getDetailConditionsPriseEnCharge()
    {
        return $this->detailConditionsPriseEnCharge;
    }

    /**
     * Sets a new detailConditionsPriseEnCharge
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\DetailConditionsPriseEnCharge
     * $detailConditionsPriseEnCharge
     * @return self
     */
    public function setDetailConditionsPriseEnCharge(\CdmFr\Model\V1_1_1\Lheo\DetailConditionsPriseEnCharge $detailConditionsPriseEnCharge)
    {
        $this->detailConditionsPriseEnCharge = $detailConditionsPriseEnCharge;
        return $this;
    }

    /**
     * Gets as conventionnement
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\Conventionnement
     */
    public function getConventionnement()
    {
        return $this->conventionnement;
    }

    /**
     * Sets a new conventionnement
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\Conventionnement $conventionnement
     * @return self
     */
    public function setConventionnement(\CdmFr\Model\V1_1_1\Lheo\Conventionnement $conventionnement)
    {
        $this->conventionnement = $conventionnement;
        return $this;
    }

    /**
     * Gets as dureeConventionnee
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\DureeConventionnee
     */
    public function getDureeConventionnee()
    {
        return $this->dureeConventionnee;
    }

    /**
     * Sets a new dureeConventionnee
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\DureeConventionnee $dureeConventionnee
     * @return self
     */
    public function setDureeConventionnee(\CdmFr\Model\V1_1_1\Lheo\DureeConventionnee $dureeConventionnee)
    {
        $this->dureeConventionnee = $dureeConventionnee;
        return $this;
    }

    /**
     * Gets as dateLimiteInscription
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\DateLimiteInscription
     */
    public function getDateLimiteInscription()
    {
        return $this->dateLimiteInscription;
    }

    /**
     * Sets a new dateLimiteInscription
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\DateLimiteInscription $dateLimiteInscription
     * @return self
     */
    public function setDateLimiteInscription(\CdmFr\Model\V1_1_1\Lheo\DateLimiteInscription $dateLimiteInscription)
    {
        $this->dateLimiteInscription = $dateLimiteInscription;
        return $this;
    }

    /**
     * Gets as organismeFormateur
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\OrganismeFormateur
     */
    public function getOrganismeFormateur()
    {
        return $this->organismeFormateur;
    }

    /**
     * Sets a new organismeFormateur
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\OrganismeFormateur $organismeFormateur
     * @return self
     */
    public function setOrganismeFormateur(\CdmFr\Model\V1_1_1\Lheo\OrganismeFormateur $organismeFormateur)
    {
        $this->organismeFormateur = $organismeFormateur;
        return $this;
    }

    /**
     * Adds as organisme-financeur
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Lheo\OrganismeFinanceur $organisme-financeur
     */
    public function addToOrganismeFinanceur(\CdmFr\Model\V1_1_1\Lheo\OrganismeFinanceur $organisme-financeur)
    {
        $this->organismeFinanceur[] = $organisme-financeur;
        return $this;
    }

    /**
     * isset organismeFinanceur
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetOrganismeFinanceur($index)
    {
        return isset($this->organismeFinanceur[$index]);
    }

    /**
     * unset organismeFinanceur
     *
     * @param scalar $index
     * @return void
     */
    public function unsetOrganismeFinanceur($index)
    {
        unset($this->organismeFinanceur[$index]);
    }

    /**
     * Gets as organismeFinanceur
     *
     * @return \CdmFr\Model\V1_1_1\Lheo\OrganismeFinanceur[]
     */
    public function getOrganismeFinanceur()
    {
        return $this->organismeFinanceur;
    }

    /**
     * Sets a new organismeFinanceur
     *
     * @param \CdmFr\Model\V1_1_1\Lheo\OrganismeFinanceur[] $organismeFinanceur
     * @return self
     */
    public function setOrganismeFinanceur(array $organismeFinanceur)
    {
        $this->organismeFinanceur = $organismeFinanceur;
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

