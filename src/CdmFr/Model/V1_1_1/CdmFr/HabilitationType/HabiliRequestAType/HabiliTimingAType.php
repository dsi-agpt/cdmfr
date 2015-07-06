<?php

namespace CdmFr\Model\V1_1_1\CdmFr\HabilitationType\HabiliRequestAType;

/**
 * Class representing HabiliTimingAType
 */
class HabiliTimingAType
{

    /**
     * Date à laquelle la formation décrite a été habilitée pour la première
     * fois.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateType $habiliCreatDate
     */
    private $habiliCreatDate = null;

    /**
     * Dans le cas d'un renouvellement, date du dernier renouvellement de
     * l'habilitation
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateType $habiliRenewDate
     */
    private $habiliRenewDate = null;

    /**
     * Date d'ouverture souhaitée par l’établissement.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\CDMdateType $habiliOpeningWhishDate
     */
    private $habiliOpeningWhishDate = null;

    /**
     * Durée pour laquelle l’habilitation de la formation est demandée en années
     *
     * @property integer $habiliWishDuration
     */
    private $habiliWishDuration = null;

    /**
     * Durée pour laquelle la formation est habilitée en années
     *
     * @property integer $habiliValidDuration
     */
    private $habiliValidDuration = null;

    /**
     * Gets as habiliCreatDate
     *
     * Date à laquelle la formation décrite a été habilitée pour la première
     * fois.
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateType
     */
    public function getHabiliCreatDate()
    {
        return $this->habiliCreatDate;
    }

    /**
     * Sets a new habiliCreatDate
     *
     * Date à laquelle la formation décrite a été habilitée pour la première
     * fois.
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateType $habiliCreatDate
     * @return self
     */
    public function setHabiliCreatDate(\CdmFr\Model\V1_1_1\Cdm\CDMdateType $habiliCreatDate)
    {
        $this->habiliCreatDate = $habiliCreatDate;
        return $this;
    }

    /**
     * Gets as habiliRenewDate
     *
     * Dans le cas d'un renouvellement, date du dernier renouvellement de
     * l'habilitation
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateType
     */
    public function getHabiliRenewDate()
    {
        return $this->habiliRenewDate;
    }

    /**
     * Sets a new habiliRenewDate
     *
     * Dans le cas d'un renouvellement, date du dernier renouvellement de
     * l'habilitation
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateType $habiliRenewDate
     * @return self
     */
    public function setHabiliRenewDate(\CdmFr\Model\V1_1_1\Cdm\CDMdateType $habiliRenewDate)
    {
        $this->habiliRenewDate = $habiliRenewDate;
        return $this;
    }

    /**
     * Gets as habiliOpeningWhishDate
     *
     * Date d'ouverture souhaitée par l’établissement.
     *
     * @return \CdmFr\Model\V1_1_1\Cdm\CDMdateType
     */
    public function getHabiliOpeningWhishDate()
    {
        return $this->habiliOpeningWhishDate;
    }

    /**
     * Sets a new habiliOpeningWhishDate
     *
     * Date d'ouverture souhaitée par l’établissement.
     *
     * @param \CdmFr\Model\V1_1_1\Cdm\CDMdateType $habiliOpeningWhishDate
     * @return self
     */
    public function setHabiliOpeningWhishDate(\CdmFr\Model\V1_1_1\Cdm\CDMdateType $habiliOpeningWhishDate)
    {
        $this->habiliOpeningWhishDate = $habiliOpeningWhishDate;
        return $this;
    }

    /**
     * Gets as habiliWishDuration
     *
     * Durée pour laquelle l’habilitation de la formation est demandée en années
     *
     * @return integer
     */
    public function getHabiliWishDuration()
    {
        return $this->habiliWishDuration;
    }

    /**
     * Sets a new habiliWishDuration
     *
     * Durée pour laquelle l’habilitation de la formation est demandée en années
     *
     * @param integer $habiliWishDuration
     * @return self
     */
    public function setHabiliWishDuration($habiliWishDuration)
    {
        $this->habiliWishDuration = $habiliWishDuration;
        return $this;
    }

    /**
     * Gets as habiliValidDuration
     *
     * Durée pour laquelle la formation est habilitée en années
     *
     * @return integer
     */
    public function getHabiliValidDuration()
    {
        return $this->habiliValidDuration;
    }

    /**
     * Sets a new habiliValidDuration
     *
     * Durée pour laquelle la formation est habilitée en années
     *
     * @param integer $habiliValidDuration
     * @return self
     */
    public function setHabiliValidDuration($habiliValidDuration)
    {
        $this->habiliValidDuration = $habiliValidDuration;
        return $this;
    }


}

