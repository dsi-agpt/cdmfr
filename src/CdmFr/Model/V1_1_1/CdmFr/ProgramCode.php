<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing ProgramCode
 */
class ProgramCode
{

    /**
     * @property string $codeSet
     */
    private $codeSet = null;

    /**
     * @property string $libelSet
     */
    private $libelSet = null;

    /**
     * @property string[] $codeSectDGESIP
     */
    private $codeSectDGESIP = null;

    /**
     * @property string[] $codeDomain
     */
    private $codeDomain = null;

    /**
     * @property string[] $codeLicProNat
     */
    private $codeLicProNat = null;

    /**
     * @property string[] $codeLicProSectAct
     */
    private $codeLicProSectAct = null;

    /**
     * @property string[] $codeSectDiscipSISE
     */
    private $codeSectDiscipSISE = null;

    /**
     * @property string[] $codeCNISNSF
     */
    private $codeCNISNSF = null;

    /**
     * @property string[] $codeRegimeInscriptionSISE
     */
    private $codeRegimeInscriptionSISE = null;

    /**
     * @property string[] $codeCite97
     */
    private $codeCite97 = null;

    /**
     * @property string[] $codeErasmus
     */
    private $codeErasmus = null;

    /**
     * @property string[] $codeFAP
     */
    private $codeFAP = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $codeUserDefined
     */
    private $codeUserDefined = null;

    /**
     * @property string[] $libelSectDGESIP
     */
    private $libelSectDGESIP = null;

    /**
     * @property string[] $libelDomain
     */
    private $libelDomain = null;

    /**
     * @property string[] $libelLicProNat
     */
    private $libelLicProNat = null;

    /**
     * @property string[] $libelLicProSectAct
     */
    private $libelLicProSectAct = null;

    /**
     * @property string[] $libelSectDiscipSISE
     */
    private $libelSectDiscipSISE = null;

    /**
     * @property string[] $libelCNISNSF
     */
    private $libelCNISNSF = null;

    /**
     * @property string[] $libelRegimeInscriptionSISE
     */
    private $libelRegimeInscriptionSISE = null;

    /**
     * @property string[] $libelCite97
     */
    private $libelCite97 = null;

    /**
     * @property string[] $libelErasmus
     */
    private $libelErasmus = null;

    /**
     * @property string[] $libelFAP
     */
    private $libelFAP = null;

    /**
     * @property \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $libelUserDefined
     */
    private $libelUserDefined = null;

    /**
     * Gets as codeSet
     *
     * @return string
     */
    public function getCodeSet()
    {
        return $this->codeSet;
    }

    /**
     * Sets a new codeSet
     *
     * @param string $codeSet
     * @return self
     */
    public function setCodeSet($codeSet)
    {
        $this->codeSet = $codeSet;
        return $this;
    }

    /**
     * Gets as libelSet
     *
     * @return string
     */
    public function getLibelSet()
    {
        return $this->libelSet;
    }

    /**
     * Sets a new libelSet
     *
     * @param string $libelSet
     * @return self
     */
    public function setLibelSet($libelSet)
    {
        $this->libelSet = $libelSet;
        return $this;
    }

    /**
     * Adds as codeSectDGESIP
     *
     * @return self
     * @param string $codeSectDGESIP
     */
    public function addToCodeSectDGESIP($codeSectDGESIP)
    {
        $this->codeSectDGESIP[] = $codeSectDGESIP;
        return $this;
    }

    /**
     * isset codeSectDGESIP
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeSectDGESIP($index)
    {
        return isset($this->codeSectDGESIP[$index]);
    }

    /**
     * unset codeSectDGESIP
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeSectDGESIP($index)
    {
        unset($this->codeSectDGESIP[$index]);
    }

    /**
     * Gets as codeSectDGESIP
     *
     * @return string[]
     */
    public function getCodeSectDGESIP()
    {
        return $this->codeSectDGESIP;
    }

    /**
     * Sets a new codeSectDGESIP
     *
     * @param string $codeSectDGESIP
     * @return self
     */
    public function setCodeSectDGESIP(array $codeSectDGESIP)
    {
        $this->codeSectDGESIP = $codeSectDGESIP;
        return $this;
    }

    /**
     * Adds as codeDomain
     *
     * @return self
     * @param string $codeDomain
     */
    public function addToCodeDomain($codeDomain)
    {
        $this->codeDomain[] = $codeDomain;
        return $this;
    }

    /**
     * isset codeDomain
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeDomain($index)
    {
        return isset($this->codeDomain[$index]);
    }

    /**
     * unset codeDomain
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeDomain($index)
    {
        unset($this->codeDomain[$index]);
    }

    /**
     * Gets as codeDomain
     *
     * @return string[]
     */
    public function getCodeDomain()
    {
        return $this->codeDomain;
    }

    /**
     * Sets a new codeDomain
     *
     * @param string $codeDomain
     * @return self
     */
    public function setCodeDomain(array $codeDomain)
    {
        $this->codeDomain = $codeDomain;
        return $this;
    }

    /**
     * Adds as codeLicProNat
     *
     * @return self
     * @param string $codeLicProNat
     */
    public function addToCodeLicProNat($codeLicProNat)
    {
        $this->codeLicProNat[] = $codeLicProNat;
        return $this;
    }

    /**
     * isset codeLicProNat
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeLicProNat($index)
    {
        return isset($this->codeLicProNat[$index]);
    }

    /**
     * unset codeLicProNat
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeLicProNat($index)
    {
        unset($this->codeLicProNat[$index]);
    }

    /**
     * Gets as codeLicProNat
     *
     * @return string[]
     */
    public function getCodeLicProNat()
    {
        return $this->codeLicProNat;
    }

    /**
     * Sets a new codeLicProNat
     *
     * @param string $codeLicProNat
     * @return self
     */
    public function setCodeLicProNat(array $codeLicProNat)
    {
        $this->codeLicProNat = $codeLicProNat;
        return $this;
    }

    /**
     * Adds as codeLicProSectAct
     *
     * @return self
     * @param string $codeLicProSectAct
     */
    public function addToCodeLicProSectAct($codeLicProSectAct)
    {
        $this->codeLicProSectAct[] = $codeLicProSectAct;
        return $this;
    }

    /**
     * isset codeLicProSectAct
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeLicProSectAct($index)
    {
        return isset($this->codeLicProSectAct[$index]);
    }

    /**
     * unset codeLicProSectAct
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeLicProSectAct($index)
    {
        unset($this->codeLicProSectAct[$index]);
    }

    /**
     * Gets as codeLicProSectAct
     *
     * @return string[]
     */
    public function getCodeLicProSectAct()
    {
        return $this->codeLicProSectAct;
    }

    /**
     * Sets a new codeLicProSectAct
     *
     * @param string $codeLicProSectAct
     * @return self
     */
    public function setCodeLicProSectAct(array $codeLicProSectAct)
    {
        $this->codeLicProSectAct = $codeLicProSectAct;
        return $this;
    }

    /**
     * Adds as codeSectDiscipSISE
     *
     * @return self
     * @param string $codeSectDiscipSISE
     */
    public function addToCodeSectDiscipSISE($codeSectDiscipSISE)
    {
        $this->codeSectDiscipSISE[] = $codeSectDiscipSISE;
        return $this;
    }

    /**
     * isset codeSectDiscipSISE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeSectDiscipSISE($index)
    {
        return isset($this->codeSectDiscipSISE[$index]);
    }

    /**
     * unset codeSectDiscipSISE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeSectDiscipSISE($index)
    {
        unset($this->codeSectDiscipSISE[$index]);
    }

    /**
     * Gets as codeSectDiscipSISE
     *
     * @return string[]
     */
    public function getCodeSectDiscipSISE()
    {
        return $this->codeSectDiscipSISE;
    }

    /**
     * Sets a new codeSectDiscipSISE
     *
     * @param string $codeSectDiscipSISE
     * @return self
     */
    public function setCodeSectDiscipSISE(array $codeSectDiscipSISE)
    {
        $this->codeSectDiscipSISE = $codeSectDiscipSISE;
        return $this;
    }

    /**
     * Adds as codeCNIS-NSF
     *
     * @return self
     * @param string $codeCNIS-NSF
     */
    public function addToCodeCNISNSF($codeCNISNSF)
    {
        $this->codeCNISNSF[] = $codeCNISNSF;
        return $this;
    }

    /**
     * isset codeCNISNSF
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeCNISNSF($index)
    {
        return isset($this->codeCNISNSF[$index]);
    }

    /**
     * unset codeCNISNSF
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeCNISNSF($index)
    {
        unset($this->codeCNISNSF[$index]);
    }

    /**
     * Gets as codeCNISNSF
     *
     * @return string[]
     */
    public function getCodeCNISNSF()
    {
        return $this->codeCNISNSF;
    }

    /**
     * Sets a new codeCNISNSF
     *
     * @param string $codeCNISNSF
     * @return self
     */
    public function setCodeCNISNSF(array $codeCNISNSF)
    {
        $this->codeCNISNSF = $codeCNISNSF;
        return $this;
    }

    /**
     * Adds as codeRegimeInscriptionSISE
     *
     * @return self
     * @param string $codeRegimeInscriptionSISE
     */
    public function addToCodeRegimeInscriptionSISE($codeRegimeInscriptionSISE)
    {
        $this->codeRegimeInscriptionSISE[] = $codeRegimeInscriptionSISE;
        return $this;
    }

    /**
     * isset codeRegimeInscriptionSISE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeRegimeInscriptionSISE($index)
    {
        return isset($this->codeRegimeInscriptionSISE[$index]);
    }

    /**
     * unset codeRegimeInscriptionSISE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeRegimeInscriptionSISE($index)
    {
        unset($this->codeRegimeInscriptionSISE[$index]);
    }

    /**
     * Gets as codeRegimeInscriptionSISE
     *
     * @return string[]
     */
    public function getCodeRegimeInscriptionSISE()
    {
        return $this->codeRegimeInscriptionSISE;
    }

    /**
     * Sets a new codeRegimeInscriptionSISE
     *
     * @param string $codeRegimeInscriptionSISE
     * @return self
     */
    public function setCodeRegimeInscriptionSISE(array $codeRegimeInscriptionSISE)
    {
        $this->codeRegimeInscriptionSISE = $codeRegimeInscriptionSISE;
        return $this;
    }

    /**
     * Adds as codeCite97
     *
     * @return self
     * @param string $codeCite97
     */
    public function addToCodeCite97($codeCite97)
    {
        $this->codeCite97[] = $codeCite97;
        return $this;
    }

    /**
     * isset codeCite97
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeCite97($index)
    {
        return isset($this->codeCite97[$index]);
    }

    /**
     * unset codeCite97
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeCite97($index)
    {
        unset($this->codeCite97[$index]);
    }

    /**
     * Gets as codeCite97
     *
     * @return string[]
     */
    public function getCodeCite97()
    {
        return $this->codeCite97;
    }

    /**
     * Sets a new codeCite97
     *
     * @param string $codeCite97
     * @return self
     */
    public function setCodeCite97(array $codeCite97)
    {
        $this->codeCite97 = $codeCite97;
        return $this;
    }

    /**
     * Adds as codeErasmus
     *
     * @return self
     * @param string $codeErasmus
     */
    public function addToCodeErasmus($codeErasmus)
    {
        $this->codeErasmus[] = $codeErasmus;
        return $this;
    }

    /**
     * isset codeErasmus
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeErasmus($index)
    {
        return isset($this->codeErasmus[$index]);
    }

    /**
     * unset codeErasmus
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeErasmus($index)
    {
        unset($this->codeErasmus[$index]);
    }

    /**
     * Gets as codeErasmus
     *
     * @return string[]
     */
    public function getCodeErasmus()
    {
        return $this->codeErasmus;
    }

    /**
     * Sets a new codeErasmus
     *
     * @param string $codeErasmus
     * @return self
     */
    public function setCodeErasmus(array $codeErasmus)
    {
        $this->codeErasmus = $codeErasmus;
        return $this;
    }

    /**
     * Adds as codeFAP
     *
     * @return self
     * @param string $codeFAP
     */
    public function addToCodeFAP($codeFAP)
    {
        $this->codeFAP[] = $codeFAP;
        return $this;
    }

    /**
     * isset codeFAP
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeFAP($index)
    {
        return isset($this->codeFAP[$index]);
    }

    /**
     * unset codeFAP
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeFAP($index)
    {
        unset($this->codeFAP[$index]);
    }

    /**
     * Gets as codeFAP
     *
     * @return string[]
     */
    public function getCodeFAP()
    {
        return $this->codeFAP;
    }

    /**
     * Sets a new codeFAP
     *
     * @param string $codeFAP
     * @return self
     */
    public function setCodeFAP(array $codeFAP)
    {
        $this->codeFAP = $codeFAP;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text
     */
    public function addToCodeUserDefined(\CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text)
    {
        $this->codeUserDefined[] = $text;
        return $this;
    }

    /**
     * isset codeUserDefined
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetCodeUserDefined($index)
    {
        return isset($this->codeUserDefined[$index]);
    }

    /**
     * unset codeUserDefined
     *
     * @param scalar $index
     * @return void
     */
    public function unsetCodeUserDefined($index)
    {
        unset($this->codeUserDefined[$index]);
    }

    /**
     * Gets as codeUserDefined
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[]
     */
    public function getCodeUserDefined()
    {
        return $this->codeUserDefined;
    }

    /**
     * Sets a new codeUserDefined
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $codeUserDefined
     * @return self
     */
    public function setCodeUserDefined(array $codeUserDefined)
    {
        $this->codeUserDefined = $codeUserDefined;
        return $this;
    }

    /**
     * Adds as libelSectDGESIP
     *
     * @return self
     * @param string $libelSectDGESIP
     */
    public function addToLibelSectDGESIP($libelSectDGESIP)
    {
        $this->libelSectDGESIP[] = $libelSectDGESIP;
        return $this;
    }

    /**
     * isset libelSectDGESIP
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelSectDGESIP($index)
    {
        return isset($this->libelSectDGESIP[$index]);
    }

    /**
     * unset libelSectDGESIP
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelSectDGESIP($index)
    {
        unset($this->libelSectDGESIP[$index]);
    }

    /**
     * Gets as libelSectDGESIP
     *
     * @return string[]
     */
    public function getLibelSectDGESIP()
    {
        return $this->libelSectDGESIP;
    }

    /**
     * Sets a new libelSectDGESIP
     *
     * @param string $libelSectDGESIP
     * @return self
     */
    public function setLibelSectDGESIP(array $libelSectDGESIP)
    {
        $this->libelSectDGESIP = $libelSectDGESIP;
        return $this;
    }

    /**
     * Adds as libelDomain
     *
     * @return self
     * @param string $libelDomain
     */
    public function addToLibelDomain($libelDomain)
    {
        $this->libelDomain[] = $libelDomain;
        return $this;
    }

    /**
     * isset libelDomain
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelDomain($index)
    {
        return isset($this->libelDomain[$index]);
    }

    /**
     * unset libelDomain
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelDomain($index)
    {
        unset($this->libelDomain[$index]);
    }

    /**
     * Gets as libelDomain
     *
     * @return string[]
     */
    public function getLibelDomain()
    {
        return $this->libelDomain;
    }

    /**
     * Sets a new libelDomain
     *
     * @param string $libelDomain
     * @return self
     */
    public function setLibelDomain(array $libelDomain)
    {
        $this->libelDomain = $libelDomain;
        return $this;
    }

    /**
     * Adds as libelLicProNat
     *
     * @return self
     * @param string $libelLicProNat
     */
    public function addToLibelLicProNat($libelLicProNat)
    {
        $this->libelLicProNat[] = $libelLicProNat;
        return $this;
    }

    /**
     * isset libelLicProNat
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelLicProNat($index)
    {
        return isset($this->libelLicProNat[$index]);
    }

    /**
     * unset libelLicProNat
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelLicProNat($index)
    {
        unset($this->libelLicProNat[$index]);
    }

    /**
     * Gets as libelLicProNat
     *
     * @return string[]
     */
    public function getLibelLicProNat()
    {
        return $this->libelLicProNat;
    }

    /**
     * Sets a new libelLicProNat
     *
     * @param string $libelLicProNat
     * @return self
     */
    public function setLibelLicProNat(array $libelLicProNat)
    {
        $this->libelLicProNat = $libelLicProNat;
        return $this;
    }

    /**
     * Adds as libelLicProSectAct
     *
     * @return self
     * @param string $libelLicProSectAct
     */
    public function addToLibelLicProSectAct($libelLicProSectAct)
    {
        $this->libelLicProSectAct[] = $libelLicProSectAct;
        return $this;
    }

    /**
     * isset libelLicProSectAct
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelLicProSectAct($index)
    {
        return isset($this->libelLicProSectAct[$index]);
    }

    /**
     * unset libelLicProSectAct
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelLicProSectAct($index)
    {
        unset($this->libelLicProSectAct[$index]);
    }

    /**
     * Gets as libelLicProSectAct
     *
     * @return string[]
     */
    public function getLibelLicProSectAct()
    {
        return $this->libelLicProSectAct;
    }

    /**
     * Sets a new libelLicProSectAct
     *
     * @param string $libelLicProSectAct
     * @return self
     */
    public function setLibelLicProSectAct(array $libelLicProSectAct)
    {
        $this->libelLicProSectAct = $libelLicProSectAct;
        return $this;
    }

    /**
     * Adds as libelSectDiscipSISE
     *
     * @return self
     * @param string $libelSectDiscipSISE
     */
    public function addToLibelSectDiscipSISE($libelSectDiscipSISE)
    {
        $this->libelSectDiscipSISE[] = $libelSectDiscipSISE;
        return $this;
    }

    /**
     * isset libelSectDiscipSISE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelSectDiscipSISE($index)
    {
        return isset($this->libelSectDiscipSISE[$index]);
    }

    /**
     * unset libelSectDiscipSISE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelSectDiscipSISE($index)
    {
        unset($this->libelSectDiscipSISE[$index]);
    }

    /**
     * Gets as libelSectDiscipSISE
     *
     * @return string[]
     */
    public function getLibelSectDiscipSISE()
    {
        return $this->libelSectDiscipSISE;
    }

    /**
     * Sets a new libelSectDiscipSISE
     *
     * @param string $libelSectDiscipSISE
     * @return self
     */
    public function setLibelSectDiscipSISE(array $libelSectDiscipSISE)
    {
        $this->libelSectDiscipSISE = $libelSectDiscipSISE;
        return $this;
    }

    /**
     * Adds as libelCNIS-NSF
     *
     * @return self
     * @param string $libelCNIS-NSF
     */
    public function addToLibelCNISNSF($libelCNISNSF)
    {
        $this->libelCNISNSF[] = $libelCNISNSF;
        return $this;
    }

    /**
     * isset libelCNISNSF
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelCNISNSF($index)
    {
        return isset($this->libelCNISNSF[$index]);
    }

    /**
     * unset libelCNISNSF
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelCNISNSF($index)
    {
        unset($this->libelCNISNSF[$index]);
    }

    /**
     * Gets as libelCNISNSF
     *
     * @return string[]
     */
    public function getLibelCNISNSF()
    {
        return $this->libelCNISNSF;
    }

    /**
     * Sets a new libelCNISNSF
     *
     * @param string $libelCNISNSF
     * @return self
     */
    public function setLibelCNISNSF(array $libelCNISNSF)
    {
        $this->libelCNISNSF = $libelCNISNSF;
        return $this;
    }

    /**
     * Adds as libelRegimeInscriptionSISE
     *
     * @return self
     * @param string $libelRegimeInscriptionSISE
     */
    public function addToLibelRegimeInscriptionSISE($libelRegimeInscriptionSISE)
    {
        $this->libelRegimeInscriptionSISE[] = $libelRegimeInscriptionSISE;
        return $this;
    }

    /**
     * isset libelRegimeInscriptionSISE
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelRegimeInscriptionSISE($index)
    {
        return isset($this->libelRegimeInscriptionSISE[$index]);
    }

    /**
     * unset libelRegimeInscriptionSISE
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelRegimeInscriptionSISE($index)
    {
        unset($this->libelRegimeInscriptionSISE[$index]);
    }

    /**
     * Gets as libelRegimeInscriptionSISE
     *
     * @return string[]
     */
    public function getLibelRegimeInscriptionSISE()
    {
        return $this->libelRegimeInscriptionSISE;
    }

    /**
     * Sets a new libelRegimeInscriptionSISE
     *
     * @param string $libelRegimeInscriptionSISE
     * @return self
     */
    public function setLibelRegimeInscriptionSISE(array $libelRegimeInscriptionSISE)
    {
        $this->libelRegimeInscriptionSISE = $libelRegimeInscriptionSISE;
        return $this;
    }

    /**
     * Adds as libelCite97
     *
     * @return self
     * @param string $libelCite97
     */
    public function addToLibelCite97($libelCite97)
    {
        $this->libelCite97[] = $libelCite97;
        return $this;
    }

    /**
     * isset libelCite97
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelCite97($index)
    {
        return isset($this->libelCite97[$index]);
    }

    /**
     * unset libelCite97
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelCite97($index)
    {
        unset($this->libelCite97[$index]);
    }

    /**
     * Gets as libelCite97
     *
     * @return string[]
     */
    public function getLibelCite97()
    {
        return $this->libelCite97;
    }

    /**
     * Sets a new libelCite97
     *
     * @param string $libelCite97
     * @return self
     */
    public function setLibelCite97(array $libelCite97)
    {
        $this->libelCite97 = $libelCite97;
        return $this;
    }

    /**
     * Adds as libelErasmus
     *
     * @return self
     * @param string $libelErasmus
     */
    public function addToLibelErasmus($libelErasmus)
    {
        $this->libelErasmus[] = $libelErasmus;
        return $this;
    }

    /**
     * isset libelErasmus
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelErasmus($index)
    {
        return isset($this->libelErasmus[$index]);
    }

    /**
     * unset libelErasmus
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelErasmus($index)
    {
        unset($this->libelErasmus[$index]);
    }

    /**
     * Gets as libelErasmus
     *
     * @return string[]
     */
    public function getLibelErasmus()
    {
        return $this->libelErasmus;
    }

    /**
     * Sets a new libelErasmus
     *
     * @param string $libelErasmus
     * @return self
     */
    public function setLibelErasmus(array $libelErasmus)
    {
        $this->libelErasmus = $libelErasmus;
        return $this;
    }

    /**
     * Adds as libelFAP
     *
     * @return self
     * @param string $libelFAP
     */
    public function addToLibelFAP($libelFAP)
    {
        $this->libelFAP[] = $libelFAP;
        return $this;
    }

    /**
     * isset libelFAP
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelFAP($index)
    {
        return isset($this->libelFAP[$index]);
    }

    /**
     * unset libelFAP
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelFAP($index)
    {
        unset($this->libelFAP[$index]);
    }

    /**
     * Gets as libelFAP
     *
     * @return string[]
     */
    public function getLibelFAP()
    {
        return $this->libelFAP;
    }

    /**
     * Sets a new libelFAP
     *
     * @param string $libelFAP
     * @return self
     */
    public function setLibelFAP(array $libelFAP)
    {
        $this->libelFAP = $libelFAP;
        return $this;
    }

    /**
     * Adds as text
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text
     */
    public function addToLibelUserDefined(\CdmFr\Model\V1_1_1\Cdm\TextType\TextAType $text)
    {
        $this->libelUserDefined[] = $text;
        return $this;
    }

    /**
     * isset libelUserDefined
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetLibelUserDefined($index)
    {
        return isset($this->libelUserDefined[$index]);
    }

    /**
     * unset libelUserDefined
     *
     * @param scalar $index
     * @return void
     */
    public function unsetLibelUserDefined($index)
    {
        unset($this->libelUserDefined[$index]);
    }

    /**
     * Gets as libelUserDefined
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[]
     */
    public function getLibelUserDefined()
    {
        return $this->libelUserDefined;
    }

    /**
     * Sets a new libelUserDefined
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\TextType\TextAType[] $libelUserDefined
     * @return self
     */
    public function setLibelUserDefined(array $libelUserDefined)
    {
        $this->libelUserDefined = $libelUserDefined;
        return $this;
    }


}

