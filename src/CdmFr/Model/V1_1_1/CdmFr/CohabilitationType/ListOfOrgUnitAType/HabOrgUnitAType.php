<?php

namespace CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType;

/**
 * Class representing HabOrgUnitAType
 */
class HabOrgUnitAType
{

    /**
     * Texte énonçant les remarques et précisions liées à la cohabilitation avec
     * l'établissement décrit dans cette partie. les remarques
     *  générales sur la cohabilitation sont disponibles au niveau hiérarchique
     * précédent.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * Lien vers les descriptions des organismes cohabilités. Le lien s'effectue vers
     * l'identifiant unique de chacun des
     *  établissements.
     *
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     */
    private $refOrgUnit = null;

    /**
     * @property
     * \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType\HabOrgUnitAType\DomainNameAType[]
     * $domainName
     */
    private $domainName = null;

    /**
     * Gets as infoBlock
     *
     * Texte énonçant les remarques et précisions liées à la cohabilitation avec
     * l'établissement décrit dans cette partie. les remarques
     *  générales sur la cohabilitation sont disponibles au niveau hiérarchique
     * précédent.
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\InfoBlock
     */
    public function getInfoBlock()
    {
        return $this->infoBlock;
    }

    /**
     * Sets a new infoBlock
     *
     * Texte énonçant les remarques et précisions liées à la cohabilitation avec
     * l'établissement décrit dans cette partie. les remarques
     *  générales sur la cohabilitation sont disponibles au niveau hiérarchique
     * précédent.
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     * @return self
     */
    public function setInfoBlock(\CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock)
    {
        $this->infoBlock = $infoBlock;
        return $this;
    }

    /**
     * Gets as refOrgUnit
     *
     * Lien vers les descriptions des organismes cohabilités. Le lien s'effectue vers
     * l'identifiant unique de chacun des
     *  établissements.
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit
     */
    public function getRefOrgUnit()
    {
        return $this->refOrgUnit;
    }

    /**
     * Sets a new refOrgUnit
     *
     * Lien vers les descriptions des organismes cohabilités. Le lien s'effectue vers
     * l'identifiant unique de chacun des
     *  établissements.
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit
     * @return self
     */
    public function setRefOrgUnit(\CdmFr\Model\V1_1_1\CdmFr\RefOrgUnit $refOrgUnit)
    {
        $this->refOrgUnit = $refOrgUnit;
        return $this;
    }

    /**
     * Adds as domainName
     *
     * @return self
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType\HabOrgUnitAType\DomainNameAType
     * $domainName
     */
    public function addToDomainName(\CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType\HabOrgUnitAType\DomainNameAType $domainName)
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
     * @return
     * \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType\HabOrgUnitAType\DomainNameAType[]
     */
    public function getDomainName()
    {
        return $this->domainName;
    }

    /**
     * Sets a new domainName
     *
     * @param
     * \CdmFr\Model\V1_1_1\CdmFr\CohabilitationType\ListOfOrgUnitAType\HabOrgUnitAType\DomainNameAType[]
     * $domainName
     * @return self
     */
    public function setDomainName(array $domainName)
    {
        $this->domainName = $domainName;
        return $this;
    }


}

