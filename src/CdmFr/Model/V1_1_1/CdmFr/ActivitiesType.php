<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

use CdmFr\Model\V1_1_1\Cdm\InfoBlockType;

/**
 * Class representing ActivitiesType
 *
 *
 * XSD Type: activitiesType
 */
class ActivitiesType extends InfoBlockType
{

    /**
     * @property string $activitiesList
     */
    private $activitiesList = null;

    /**
     * Gets as activitiesList
     *
     * @return string
     */
    public function getActivitiesList()
    {
        return $this->activitiesList;
    }

    /**
     * Sets a new activitiesList
     *
     * @param string $activitiesList
     * @return self
     */
    public function setActivitiesList($activitiesList)
    {
        $this->activitiesList = $activitiesList;
        return $this;
    }


}

