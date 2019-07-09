<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * PokemonType
 *
 * @ORM\Table(name="pokemon_type")
 * @ORM\Entity
 */
class PokemonType
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * @param string $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return bool
     */
    public function isEvolution()
    {
        return $this->evolution;
    }

    /**
     * @param bool $evolution
     */
    public function setEvolution($evolution)
    {
        $this->evolution = $evolution;
    }

    /**
     * @return bool
     */
    public function isStarter()
    {
        return $this->starter;
    }

    /**
     * @param bool $starter
     */
    public function setStarter($starter)
    {
        $this->starter = $starter;
    }

    /**
     * @return string
     */
    public function getTypeCourbeNiveau()
    {
        return $this->typeCourbeNiveau;
    }

    /**
     * @param string $typeCourbeNiveau
     */
    public function setTypeCourbeNiveau($typeCourbeNiveau)
    {
        $this->typeCourbeNiveau = $typeCourbeNiveau;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

    /**
     * @var boolean
     *
     * @ORM\Column(name="evolution", type="boolean", nullable=false)
     */
    private $evolution;

    /**
     * @var boolean
     *
     * @ORM\Column(name="starter", type="boolean", nullable=false)
     */
    private $starter;

    /**
     * @var string
     *
     * @ORM\Column(name="type_courbe_niveau", type="string", length=1, nullable=false)
     */
    private $typeCourbeNiveau;


}

