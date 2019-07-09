<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefETypePlace
 *
 * @ORM\Table(name="ref_e_type_place")
 * @ORM\Entity
 */
class RefETypePlace
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idType;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_place", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPlace;

    /**
     * @return int
     */
    public function getIdType()
    {
        return $this->idType;
    }

    /**
     * @param int $idType
     */
    public function setIdType($idType)
    {
        $this->idType = $idType;
    }

    /**
     * @return int
     */
    public function getIdPlace()
    {
        return $this->idPlace;
    }

    /**
     * @param int $idPlace
     */
    public function setIdPlace($idPlace)
    {
        $this->idPlace = $idPlace;
    }


}

