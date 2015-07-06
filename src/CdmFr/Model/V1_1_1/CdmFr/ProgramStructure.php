<?php

namespace CdmFr\Model\V1_1_1\CdmFr;

/**
 * Class representing ProgramStructure
 */
class ProgramStructure
{

    /**
     * Cet espace permet de fournir des commentaires et précisions sur l'organisation
     * des différents programmes et courses impliqués dans la structure décrite. Il
     *  s'agit d'informations complémentaires qui viennent s'ajouter à la description
     * du programme inclus dans la structure en cours de description.
     *
     * @property \CdmFr\Model\V1_1_1\Cdm\InfoBlock $infoBlock
     */
    private $infoBlock = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefProgram[] $refProgram
     */
    private $refProgram = null;

    /**
     * @property \CdmFr\Model\V1_1_1\CdmFr\RefCourse[] $refCourse
     */
    private $refCourse = null;

    /**
     * Gets as infoBlock
     *
     * Cet espace permet de fournir des commentaires et précisions sur l'organisation
     * des différents programmes et courses impliqués dans la structure décrite. Il
     *  s'agit d'informations complémentaires qui viennent s'ajouter à la description
     * du programme inclus dans la structure en cours de description.
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
     * Cet espace permet de fournir des commentaires et précisions sur l'organisation
     * des différents programmes et courses impliqués dans la structure décrite. Il
     *  s'agit d'informations complémentaires qui viennent s'ajouter à la description
     * du programme inclus dans la structure en cours de description.
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
     * Adds as refProgram
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefProgram $refProgram
     */
    public function addToRefProgram(\CdmFr\Model\V1_1_1\CdmFr\RefProgram $refProgram)
    {
        $this->refProgram[] = $refProgram;
        return $this;
    }

    /**
     * isset refProgram
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefProgram($index)
    {
        return isset($this->refProgram[$index]);
    }

    /**
     * unset refProgram
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefProgram($index)
    {
        unset($this->refProgram[$index]);
    }

    /**
     * Gets as refProgram
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefProgram[]
     */
    public function getRefProgram()
    {
        return $this->refProgram;
    }

    /**
     * Sets a new refProgram
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefProgram[] $refProgram
     * @return self
     */
    public function setRefProgram(array $refProgram)
    {
        $this->refProgram = $refProgram;
        return $this;
    }

    /**
     * Adds as refCourse
     *
     * @return self
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefCourse $refCourse
     */
    public function addToRefCourse(\CdmFr\Model\V1_1_1\CdmFr\RefCourse $refCourse)
    {
        $this->refCourse[] = $refCourse;
        return $this;
    }

    /**
     * isset refCourse
     *
     * @param scalar $index
     * @return boolean
     */
    public function issetRefCourse($index)
    {
        return isset($this->refCourse[$index]);
    }

    /**
     * unset refCourse
     *
     * @param scalar $index
     * @return void
     */
    public function unsetRefCourse($index)
    {
        unset($this->refCourse[$index]);
    }

    /**
     * Gets as refCourse
     *
     * @return \CdmFr\Model\V1_1_1\CdmFr\RefCourse[]
     */
    public function getRefCourse()
    {
        return $this->refCourse;
    }

    /**
     * Sets a new refCourse
     *
     * @param \CdmFr\Model\V1_1_1\CdmFr\RefCourse[] $refCourse
     * @return self
     */
    public function setRefCourse(array $refCourse)
    {
        $this->refCourse = $refCourse;
        return $this;
    }


}

