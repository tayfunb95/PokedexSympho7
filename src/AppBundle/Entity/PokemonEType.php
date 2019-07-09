<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PokemonEType
 *
 * @ORM\Table(name="pokemon_e_type")
 * @ORM\Entity
 */
class PokemonEType
{
    /**
     * @return int
     */
    public function getIdPoke()
    {
        return $this->idPoke;
    }

    /**
     * @param int $idPoke
     */
    public function setIdPoke($idPoke)
    {
        $this->idPoke = $idPoke;
    }

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
     * @var integer
     *
     * @ORM\Column(name="id_poke", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idPoke;

    /**
     * @var integer
     *
     * @ORM\Column(name="id_type", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idType;


}

