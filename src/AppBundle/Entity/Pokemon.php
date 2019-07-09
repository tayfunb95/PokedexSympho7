<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pokemon
 *
 * @ORM\Table(name="pokemon", indexes={@ORM\Index(name="FK_62DC90F3A926F002", columns={"ref_pokemon_id"})})
 * @ORM\Entity
 */
class Pokemon
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
     * @var integer
     *
     * @ORM\Column(name="ref_pokemon_id", type="integer", nullable=false)
     */
    private $refPokemonId;

    /**
     * @var string
     *
     * @ORM\Column(name="sexe", type="string", length=1, nullable=false)
     */
    private $sexe;

    /**
     * @var integer
     *
     * @ORM\Column(name="xp", type="integer", nullable=false)
     */
    private $xp;

    /**
     * @var integer
     *
     * @ORM\Column(name="niveau", type="integer", nullable=false)
     */
    private $niveau;

    /**
     * @var boolean
     *
     * @ORM\Column(name="a_vendre", type="boolean", nullable=false)
     */
    private $aVendre;

    /**
     * @var integer
     *
     * @ORM\Column(name="prix", type="integer", nullable=false)
     */
    private $prix;

    /**
     * @var integer
     *
     * @ORM\Column(name="date_dernier_entrainement", type="integer", nullable=false)
     */
    private $dateDernierEntrainement;

    /**
     * @var integer
     *
     * @ORM\Column(name="dresseur_id", type="integer", nullable=false)
     */
    private $dresseurId;

    /**
     * @return int
     */
    public function getRefPokemonId()
    {
        return $this->refPokemonId;
    }

    /**
     * @param int $refPokemonId
     */
    public function setRefPokemonId($refPokemonId)
    {
        $this->refPokemonId = $refPokemonId;
    }

    /**
     * @return string
     */
    public function getSexe()
    {
        return $this->sexe;
    }

    /**
     * @param string $sexe
     */
    public function setSexe($sexe)
    {
        $this->sexe = $sexe;
    }

    /**
     * @return int
     */
    public function getXp()
    {
        return $this->xp;
    }

    /**
     * @param int $xp
     */
    public function setXp($xp)
    {
        $this->xp = $xp;
    }

    /**
     * @return int
     */
    public function getNiveau()
    {
        return $this->niveau;
    }

    /**
     * @param int $niveau
     */
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }

    /**
     * @return bool
     */
    public function isAVendre()
    {
        return $this->aVendre;
    }

    /**
     * @param bool $aVendre
     */
    public function setAVendre($aVendre)
    {
        $this->aVendre = $aVendre;
    }

    /**
     * @return int
     */
    public function getPrix()
    {
        return $this->prix;
    }

    /**
     * @param int $prix
     */
    public function setPrix($prix)
    {
        $this->prix = $prix;
    }

    /**
     * @return int
     */
    public function getDateDernierEntrainement()
    {
        return $this->dateDernierEntrainement;
    }

    /**
     * @param int $dateDernierEntrainement
     */
    public function setDateDernierEntrainement($dateDernierEntrainement)
    {
        $this->dateDernierEntrainement = $dateDernierEntrainement;
    }

    /**
     * @return int
     */
    public function getDresseurId()
    {
        return $this->dresseurId;
    }

    /**
     * @param int $dresseurId
     */
    public function setDresseurId($dresseurId)
    {
        $this->dresseurId = $dresseurId;
    }

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


}

