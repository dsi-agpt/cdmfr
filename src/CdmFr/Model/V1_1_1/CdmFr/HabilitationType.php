<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing HabilitationType
 *
 * Description of an habilitation.
 * XSD Type: habilitationType
 */
class HabilitationType
{

    /**
     * @property string $diplomaType
     */
    private $diplomaType = null;

    /**
     * @property string $organization
     */
    private $organization = null;

    /**
     * @property string $id
     */
    private $id = null;

    /**
     * @property string $ident
     */
    private $ident = null;

    /**
     * @property string $language
     */
    private $language = null;

    /**
     * Numéro d'habilitation construit avec les règles d'usage et fourni par
     * l'établissement puis conservé de façon définitive par le ministère. La
     * construction
     *  proposée pour l'identifiant se fait à partir d’éléments internationaux,
     * nationaux et locaux afin de s’assurer de l'unicité de l'identifiant en vue
     * d'une fusion des informations
     *  dans un portail national ou européen. L'enchaînement proposé est le
     * suivant : CodeISOPays(1)TypeCodeInstitution(2) CodeInstitution(3)
     * FamilleDonnées(4) IdentifiantLocal(5)
     *  1. Code du pays ISO 3166-1 : standard international désignant chaque pays par
     * un code à deux lettres (FR pour la France) 2. Type de code institution :
     *  nom du code dans lequel est identifiée l'institution (pour les établissements
     * dépendant du MESR le code UAI est utilisé, pour les autres établissements le
     * code SIRET
     *  peut être utilisé) 3. Code institution : chaine de caractères désignant
     * l'institution dans le codage choisi 4. Famille de données : famille de CDMFR
     *  à laquelle appartient l'information
     *  OU (orgUnit) : entité administrative ou organisationnelle HA (habilitation) CO
     * (course) : unité d’enseignement PR (program) :
     *  formation PE (person) : personne LH (lheoAdds) : ajouts de compatibilité avec
     * LHÉO
     *  5. Identifiant local : identifiant unique des données au sein du système
     * d’information de l’établissement 6. Pour les spécialités ajouter SP
     *  suivi du numéro d'ordre de la spécialité dans l'offre de l'établissement
     * support
     *
     * @property string $habiliId
     */
    private $habiliId = null;

    /**
     * Ce champ présente les références des textes légaux de définition de la
     * formation considérée. L'information de ce champ est fournie par la DGESIP et
     * ne doit pas
     *  être modifiée par l'établissement. Lors du dépôt initial pour les champs
     * obligatoires l'établissement doit fournir les valeurs correspondant à ses
     * souhaits, les informations
     *  seront traitées et modifiées lors de l'examen du dossier. Ces informations
     * n'apparaissent que lorsque des décisions sont expressément fournies sur la
     * durée et les des dates.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $legalRef
     */
    private $legalRef = null;

    /**
     * Description de la mention habilitée, la cardinalité vaut [0,1] car les
     * licences Pro n'ont pas de mention.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\FieldType $field
     */
    private $field = null;

    /**
     * Informations spécifiques à une licence professionnelle
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\LicProAType $licPro
     */
    private $licPro = null;

    /**
     * Autre diplôme habilité ne s'inscrivant pas dans une structure
     * mention-spécialité ou licence-Pro
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\OtherDiplomaAType $otherDiploma
     */
    private $otherDiploma = null;

    /**
     * Présentation du contexte et des enjeux de la formation soumise à
     * l'habilitation.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\ContexteEtEnjeuxAType
     * $contexteEtEnjeux
     */
    private $contexteEtEnjeux = null;

    /**
     * Paramètres de la demande d'habilitation de la formation concernée.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType $habiliRequest
     */
    private $habiliRequest = null;

    /**
     * Cet élément sert, au delà de la cohabilitation, à décrire les relations
     * entre le diplôme concerné par l'habilitation et les établiss
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType[] $cohabilitation
     */
    private $cohabilitation = null;

    /**
     * Formation(s) concernées par cette habilitation.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefProgram[] $habiliObject
     */
    private $habiliObject = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\DomainNameAType[] $domainName
     */
    private $domainName = null;

    /**
     * Partenariats nationaux autres qu'une cohabilitation.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType[] $partnership
     */
    private $partnership = null;

    /**
     * Description des règles d'équivalence.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\EquivalenceAType[] $equivalence
     */
    private $equivalence = null;

    /**
     * .
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\I13nProgType[] $i13nProg
     */
    private $i13nProg = null;

    /**
     * .
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\RelatedProgramsAType[]
     * $relatedPrograms
     */
    private $relatedPrograms = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $infoBlock
     */
    private $infoBlock = null;

    /**
     * Gets as diplomaType
     *
     * @return string
     */
    public function getDiplomaType()
    {
        return $this->diplomaType;
    }

    /**
     * Sets a new diplomaType
     *
     * @param string $diplomaType
     * @return self
     */
    public function setDiplomaType($diplomaType)
    {
        $this->diplomaType = $diplomaType;
        return $this;
    }

    /**
     * Gets as organization
     *
     * @return string
     */
    public function getOrganization()
    {
        return $this->organization;
    }

    /**
     * Sets a new organization
     *
     * @param string $organization
     * @return self
     */
    public function setOrganization($organization)
    {
        $this->organization = $organization;
        return $this;
    }

    /**
     * Gets as id
     *
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Sets a new id
     *
     * @param string $id
     * @return self
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * Gets as ident
     *
     * @return string
     */
    public function getIdent()
    {
        return $this->ident;
    }

    /**
     * Sets a new ident
     *
     * @param string $ident
     * @return self
     */
    public function setIdent($ident)
    {
        $this->ident = $ident;
        return $this;
    }

    /**
     * Gets as language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Sets a new language
     *
     * @param string $language
     * @return self
     */
    public function setLanguage($language)
    {
        $this->language = $language;
        return $this;
    }

    /**
     * Gets as habiliId
     *
     * Numéro d'habilitation construit avec les règles d'usage et fourni par
     * l'établissement puis conservé de façon définitive par le ministère. La
     * construction
     *  proposée pour l'identifiant se fait à partir d’éléments internationaux,
     * nationaux et locaux afin de s’assurer de l'unicité de l'identifiant en vue
     * d'une fusion des informations
     *  dans un portail national ou européen. L'enchaînement proposé est le
     * suivant : CodeISOPays(1)TypeCodeInstitution(2) CodeInstitution(3)
     * FamilleDonnées(4) IdentifiantLocal(5)
     *  1. Code du pays ISO 3166-1 : standard international désignant chaque pays par
     * un code à deux lettres (FR pour la France) 2. Type de code institution :
     *  nom du code dans lequel est identifiée l'institution (pour les établissements
     * dépendant du MESR le code UAI est utilisé, pour les autres établissements le
     * code SIRET
     *  peut être utilisé) 3. Code institution : chaine de caractères désignant
     * l'institution dans le codage choisi 4. Famille de données : famille de CDMFR
     *  à laquelle appartient l'information
     *  OU (orgUnit) : entité administrative ou organisationnelle HA (habilitation) CO
     * (course) : unité d’enseignement PR (program) :
     *  formation PE (person) : personne LH (lheoAdds) : ajouts de compatibilité avec
     * LHÉO
     *  5. Identifiant local : identifiant unique des données au sein du système
     * d’information de l’établissement 6. Pour les spécialités ajouter SP
     *  suivi du numéro d'ordre de la spécialité dans l'offre de l'établissement
     * support
     *
     * @return string
     */
    public function getHabiliId()
    {
        return $this->habiliId;
    }

    /**
     * Sets a new habiliId
     *
     * Numéro d'habilitation construit avec les règles d'usage et fourni par
     * l'établissement puis conservé de façon définitive par le ministère. La
     * construction
     *  proposée pour l'identifiant se fait à partir d’éléments internationaux,
     * nationaux et locaux afin de s’assurer de l'unicité de l'identifiant en vue
     * d'une fusion des informations
     *  dans un portail national ou européen. L'enchaînement proposé est le
     * suivant : CodeISOPays(1)TypeCodeInstitution(2) CodeInstitution(3)
     * FamilleDonnées(4) IdentifiantLocal(5)
     *  1. Code du pays ISO 3166-1 : standard international désignant chaque pays par
     * un code à deux lettres (FR pour la France) 2. Type de code institution :
     *  nom du code dans lequel est identifiée l'institution (pour les établissements
     * dépendant du MESR le code UAI est utilisé, pour les autres établissements le
     * code SIRET
     *  peut être utilisé) 3. Code institution : chaine de caractères désignant
     * l'institution dans le codage choisi 4. Famille de données : famille de CDMFR
     *  à laquelle appartient l'information
     *  OU (orgUnit) : entité administrative ou organisationnelle HA (habilitation) CO
     * (course) : unité d’enseignement PR (program) :
     *  formation PE (person) : personne LH (lheoAdds) : ajouts de compatibilité avec
     * LHÉO
     *  5. Identifiant local : identifiant unique des données au sein du système
     * d’information de l’établissement 6. Pour les spécialités ajouter SP
     *  suivi du numéro d'ordre de la spécialité dans l'offre de l'établissement
     * support
     *
     * @param string $habiliId
     * @return self
     */
    public function setHabiliId($habiliId)
    {
        $this->habiliId = $habiliId;
        return $this;
    }

    /**
     * Adds as legalRef
     *
     * Ce champ présente les références des textes légaux de définition de la
     * formation considérée. L'information de ce champ est fournie par la DGESIP et
     * ne doit pas
     *  être modifiée par l'établissement. Lors du dépôt initial pour les champs
     * obligatoires l'établissement doit fournir les valeurs correspondant à ses
     * souhaits, les informations
     *  seront traitées et modifiées lors de l'examen du dossier. Ces informations
     * n'apparaissent que lorsque des décisions sont expressément fournies sur la
     * durée et les des dates.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $legalRef
     */
    public function addToLegalRef(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $legalRef)
    {
        $this->legalRef[] = $legalRef;
        return $this;
    }

    /**
     * isset legalRef
     *
     * Ce champ présente les références des textes légaux de définition de la
     * formation considérée. L'information de ce champ est fournie par la DGESIP et
     * ne doit pas
     *  être modifiée par l'établissement. Lors du dépôt initial pour les champs
     * obligatoires l'établissement doit fournir les valeurs correspondant à ses
     * souhaits, les informations
     *  seront traitées et modifiées lors de l'examen du dossier. Ces informations
     * n'apparaissent que lorsque des décisions sont expressément fournies sur la
     * durée et les des dates.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLegalRef($index)
    {
        return isset($this->legalRef[$index]);
    }

    /**
     * unset legalRef
     *
     * Ce champ présente les références des textes légaux de définition de la
     * formation considérée. L'information de ce champ est fournie par la DGESIP et
     * ne doit pas
     *  être modifiée par l'établissement. Lors du dépôt initial pour les champs
     * obligatoires l'établissement doit fournir les valeurs correspondant à ses
     * souhaits, les informations
     *  seront traitées et modifiées lors de l'examen du dossier. Ces informations
     * n'apparaissent que lorsque des décisions sont expressément fournies sur la
     * durée et les des dates.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLegalRef($index)
    {
        unset($this->legalRef[$index]);
    }

    /**
     * Gets as legalRef
     *
     * Ce champ présente les références des textes légaux de définition de la
     * formation considérée. L'information de ce champ est fournie par la DGESIP et
     * ne doit pas
     *  être modifiée par l'établissement. Lors du dépôt initial pour les champs
     * obligatoires l'établissement doit fournir les valeurs correspondant à ses
     * souhaits, les informations
     *  seront traitées et modifiées lors de l'examen du dossier. Ces informations
     * n'apparaissent que lorsque des décisions sont expressément fournies sur la
     * durée et les des dates.
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[]
     */
    public function getLegalRef()
    {
        return $this->legalRef;
    }

    /**
     * Sets a new legalRef
     *
     * Ce champ présente les références des textes légaux de définition de la
     * formation considérée. L'information de ce champ est fournie par la DGESIP et
     * ne doit pas
     *  être modifiée par l'établissement. Lors du dépôt initial pour les champs
     * obligatoires l'établissement doit fournir les valeurs correspondant à ses
     * souhaits, les informations
     *  seront traitées et modifiées lors de l'examen du dossier. Ces informations
     * n'apparaissent que lorsque des décisions sont expressément fournies sur la
     * durée et les des dates.
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType[] $legalRef
     * @return self
     */
    public function setLegalRef(array $legalRef)
    {
        $this->legalRef = $legalRef;
        return $this;
    }

    /**
     * Gets as field
     *
     * Description de la mention habilitée, la cardinalité vaut [0,1] car les
     * licences Pro n'ont pas de mention.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\FieldType
     */
    public function getField()
    {
        return $this->field;
    }

    /**
     * Sets a new field
     *
     * Description de la mention habilitée, la cardinalité vaut [0,1] car les
     * licences Pro n'ont pas de mention.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\FieldType $field
     * @return self
     */
    public function setField(\CdmFr\Model\V1_1_1\CdmFr\FieldType $field)
    {
        $this->field = $field;
        return $this;
    }

    /**
     * Gets as licPro
     *
     * Informations spécifiques à une licence professionnelle
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\LicProAType
     */
    public function getLicPro()
    {
        return $this->licPro;
    }

    /**
     * Sets a new licPro
     *
     * Informations spécifiques à une licence professionnelle
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\LicProAType $licPro
     * @return self
     */
    public function setLicPro(\CdmFr\Model\V1_1_1\CdmFr\HabilitationType\LicProAType $licPro)
    {
        $this->licPro = $licPro;
        return $this;
    }

    /**
     * Gets as otherDiploma
     *
     * Autre diplôme habilité ne s'inscrivant pas dans une structure
     * mention-spécialité ou licence-Pro
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\OtherDiplomaAType
     */
    public function getOtherDiploma()
    {
        return $this->otherDiploma;
    }

    /**
     * Sets a new otherDiploma
     *
     * Autre diplôme habilité ne s'inscrivant pas dans une structure
     * mention-spécialité ou licence-Pro
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\OtherDiplomaAType $otherDiploma
     * @return self
     */
    public function setOtherDiploma(\CdmFr\Model\V1_1_1\CdmFr\HabilitationType\OtherDiplomaAType $otherDiploma)
    {
        $this->otherDiploma = $otherDiploma;
        return $this;
    }

    /**
     * Gets as contexteEtEnjeux
     *
     * Présentation du contexte et des enjeux de la formation soumise à
     * l'habilitation.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\ContexteEtEnjeuxAType
     */
    public function getContexteEtEnjeux()
    {
        return $this->contexteEtEnjeux;
    }

    /**
     * Sets a new contexteEtEnjeux
     *
     * Présentation du contexte et des enjeux de la formation soumise à
     * l'habilitation.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\ContexteEtEnjeuxAType
     * $contexteEtEnjeux
     * @return self
     */
    public function setContexteEtEnjeux(\CdmFr\Model\V1_1_1\CdmFr\HabilitationType\ContexteEtEnjeuxAType $contexteEtEnjeux)
    {
        $this->contexteEtEnjeux = $contexteEtEnjeux;
        return $this;
    }

    /**
     * Gets as habiliRequest
     *
     * Paramètres de la demande d'habilitation de la formation concernée.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType
     */
    public function getHabiliRequest()
    {
        return $this->habiliRequest;
    }

    /**
     * Sets a new habiliRequest
     *
     * Paramètres de la demande d'habilitation de la formation concernée.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType $habiliRequest
     * @return self
     */
    public function setHabiliRequest(\CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType $habiliRequest)
    {
        $this->habiliRequest = $habiliRequest;
        return $this;
    }

    /**
     * Adds as cohabilitation
     *
     * Cet élément sert, au delà de la cohabilitation, à décrire les relations
     * entre le diplôme concerné par l'habilitation et les établiss
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType $cohabilitation
     */
    public function addToCohabilitation(\CdmFr\Model\V1_1_1\CdmFr\CohabilitationType $cohabilitation)
    {
        $this->cohabilitation[] = $cohabilitation;
        return $this;
    }

    /**
     * isset cohabilitation
     *
     * Cet élément sert, au delà de la cohabilitation, à décrire les relations
     * entre le diplôme concerné par l'habilitation et les établiss
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCohabilitation($index)
    {
        return isset($this->cohabilitation[$index]);
    }

    /**
     * unset cohabilitation
     *
     * Cet élément sert, au delà de la cohabilitation, à décrire les relations
     * entre le diplôme concerné par l'habilitation et les établiss
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCohabilitation($index)
    {
        unset($this->cohabilitation[$index]);
    }

    /**
     * Gets as cohabilitation
     *
     * Cet élément sert, au delà de la cohabilitation, à décrire les relations
     * entre le diplôme concerné par l'habilitation et les établiss
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType[]
     */
    public function getCohabilitation()
    {
        return $this->cohabilitation;
    }

    /**
     * Sets a new cohabilitation
     *
     * Cet élément sert, au delà de la cohabilitation, à décrire les relations
     * entre le diplôme concerné par l'habilitation et les établiss
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType[] $cohabilitation
     * @return self
     */
    public function setCohabilitation(array $cohabilitation)
    {
        $this->cohabilitation = $cohabilitation;
        return $this;
    }

    /**
     * Adds as refProgram
     *
     * Formation(s) concernées par cette habilitation.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefProgram $refProgram
     */
    public function addToHabiliObject(\CdmFr\Model\V1_1_1\CdmFr\RefProgram $refProgram)
    {
        $this->habiliObject[] = $refProgram;
        return $this;
    }

    /**
     * isset habiliObject
     *
     * Formation(s) concernées par cette habilitation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetHabiliObject($index)
    {
        return isset($this->habiliObject[$index]);
    }

    /**
     * unset habiliObject
     *
     * Formation(s) concernées par cette habilitation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetHabiliObject($index)
    {
        unset($this->habiliObject[$index]);
    }

    /**
     * Gets as habiliObject
     *
     * Formation(s) concernées par cette habilitation.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefProgram[]
     */
    public function getHabiliObject()
    {
        return $this->habiliObject;
    }

    /**
     * Sets a new habiliObject
     *
     * Formation(s) concernées par cette habilitation.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefProgram[] $habiliObject
     * @return self
     */
    public function setHabiliObject(array $habiliObject)
    {
        $this->habiliObject = $habiliObject;
        return $this;
    }

    /**
     * Adds as domainName
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\DomainNameAType $domainName
     */
    public function addToDomainName(\CdmFr\Model\V1_1_1\CdmFr\HabilitationType\DomainNameAType $domainName)
    {
        $this->domainName[] = $domainName;
        return $this;
    }

    /**
     * isset domainName
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetDomainName($index)
    {
        return isset($this->domainName[$index]);
    }

    /**
     * unset domainName
     *
     * @param scalar $index
     * @return void
     */
    public function unsetDomainName($index)
    {
        unset($this->domainName[$index]);
    }

    /**
     * Gets as domainName
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\DomainNameAType[]
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * Sets a new domainName
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\DomainNameAType[] $domainName
     * @return self
     */
    public function setDomainName(array $domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }

    /**
     * Adds as partnership
     *
     * Partenariats nationaux autres qu'une cohabilitation.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType $partnership
     */
    public function addToPartnership(\CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType $partnership)
    {
        $this->partnership[] = $partnership;
        return $this;
    }

    /**
     * isset partnership
     *
     * Partenariats nationaux autres qu'une cohabilitation.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetPartnership($index)
    {
        return isset($this->partnership[$index]);
    }

    /**
     * unset partnership
     *
     * Partenariats nationaux autres qu'une cohabilitation.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetPartnership($index)
    {
        unset($this->partnership[$index]);
    }

    /**
     * Gets as partnership
     *
     * Partenariats nationaux autres qu'une cohabilitation.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType[]
     */
    public function getPartnership()
    {
        return $this->partnership;
    }

    /**
     * Sets a new partnership
     *
     * Partenariats nationaux autres qu'une cohabilitation.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\PartnershipDataType[] $partnership
     * @return self
     */
    public function setPartnership(array $partnership)
    {
        $this->partnership = $partnership;
        return $this;
    }

    /**
     * Adds as equivalence
     *
     * Description des règles d'équivalence.
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\EquivalenceAType $equivalence
     */
    public function addToEquivalence(\CdmFr\Model\V1_1_1\CdmFr\HabilitationType\EquivalenceAType $equivalence)
    {
        $this->equivalence[] = $equivalence;
        return $this;
    }

    /**
     * isset equivalence
     *
     * Description des règles d'équivalence.
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetEquivalence($index)
    {
        return isset($this->equivalence[$index]);
    }

    /**
     * unset equivalence
     *
     * Description des règles d'équivalence.
     *
     * @param scalar $index
     * @return void
     */
    public function unsetEquivalence($index)
    {
        unset($this->equivalence[$index]);
    }

    /**
     * Gets as equivalence
     *
     * Description des règles d'équivalence.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\EquivalenceAType[]
     */
    public function getEquivalence()
    {
        return $this->equivalence;
    }

    /**
     * Sets a new equivalence
     *
     * Description des règles d'équivalence.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\EquivalenceAType[] $equivalence
     * @return self
     */
    public function setEquivalence(array $equivalence)
    {
        $this->equivalence = $equivalence;
        return $this;
    }

    /**
     * Adds as i13nProg
     *
     * .
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\I13nProgType $i13nProg
     */
    public function addToI13nProg(\CdmFr\Model\V1_1_1\CdmFr\I13nProgType $i13nProg)
    {
        $this->i13nProg[] = $i13nProg;
        return $this;
    }

    /**
     * isset i13nProg
     *
     * .
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetI13nProg($index)
    {
        return isset($this->i13nProg[$index]);
    }

    /**
     * unset i13nProg
     *
     * .
     *
     * @param scalar $index
     * @return void
     */
    public function unsetI13nProg($index)
    {
        unset($this->i13nProg[$index]);
    }

    /**
     * Gets as i13nProg
     *
     * .
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\I13nProgType[]
     */
    public function getI13nProg()
    {
        return $this->i13nProg;
    }

    /**
     * Sets a new i13nProg
     *
     * .
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\I13nProgType[] $i13nProg
     * @return self
     */
    public function setI13nProg(array $i13nProg)
    {
        $this->i13nProg = $i13nProg;
        return $this;
    }

    /**
     * Adds as relatedPrograms
     *
     * .
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\RelatedProgramsAType $relatedPrograms
     */
    public function addToRelatedPrograms(\CdmFr\Model\V1_1_1\CdmFr\HabilitationType\RelatedProgramsAType $relatedPrograms)
    {
        $this->relatedPrograms[] = $relatedPrograms;
        return $this;
    }

    /**
     * isset relatedPrograms
     *
     * .
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRelatedPrograms($index)
    {
        return isset($this->relatedPrograms[$index]);
    }

    /**
     * unset relatedPrograms
     *
     * .
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRelatedPrograms($index)
    {
        unset($this->relatedPrograms[$index]);
    }

    /**
     * Gets as relatedPrograms
     *
     * .
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\RelatedProgramsAType[]
     */
    public function getRelatedPrograms()
    {
        return $this->relatedPrograms;
    }

    /**
     * Sets a new relatedPrograms
     *
     * .
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\HabilitationType\RelatedProgramsAType[]
     * $relatedPrograms
     * @return self
     */
    public function setRelatedPrograms(array $relatedPrograms)
    {
        $this->relatedPrograms = $relatedPrograms;
        return $this;
    }

    /**
     * Gets as infoBlock
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlockType
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlockType $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlockType $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }


}

