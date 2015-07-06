<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

use CdmFr\Model\V1_1_1\Cdm\TextType;

/**
 * Class representing TitleType
 *
 * Titre et corps de la personne
 * XSD Type: title
 */
class TitleType extends TextType
{

    /**
     * @property string $corps
     */
    private $corps = null;

    /**
     * Gets as corps
     *
     * @return string
     */
    public function getCorps()
    {
        return $this->corps;
    }

    /**
     * Sets a new corps
     *
     * @param string $corps
     * @return self
     */
    public function setCorps($corps)
    {
        $this->corps = $corps;
        return $this;
    }


}

