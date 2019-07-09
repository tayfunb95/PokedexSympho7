<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RefPokemon
 *
 * @ORM\Table(name="ref_pokemon")
 * @ORM\Entity
 */
class RefPokemon
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
     * @var string
     *
     * @ORM\Column(name="nom", type="string", length=50, nullable=false)
     */
    private $nom;

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
     * @return int
     */
    public function getType1()
    {
        return $this->type1;
    }

    /**
     * @param int $type1
     */
    public function setType1($type1)
    {
        $this->type1 = $type1;
    }

    /**
     * @return int
     */
    public function getType2()
    {
        return $this->type2;
    }

    /**
     * @param int $type2
     */
    public function setType2($type2)
    {
        $this->type2 = $type2;
    }

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

    /**
     * @var integer
     *
     * @ORM\Column(name="type_1", type="integer", nullable=false)
     */
    private $type1;

    /**
     * @var integer
     *
     * @ORM\Column(name="type_2", type="integer", nullable=false)
     */
    private $type2;


}

