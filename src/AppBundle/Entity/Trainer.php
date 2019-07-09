<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Trainer
 *
 * @ORM\Table(name="trainer", indexes={@ORM\Index(name="pseudo_idx", columns={"username"})})
 * @ORM\Entity
 */
class Trainer
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
     * @ORM\Column(name="username", type="string", length=25, nullable=false)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=64, nullable=false)
     */
    private $password;

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
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param string $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param string $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return bool
     */
    public function isActive()
    {
        return $this->isActive;
    }

    /**
     * @param bool $isActive
     */
    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    /**
     * @return int
     */
    public function getNbPieces()
    {
        return $this->nbPieces;
    }

    /**
     * @param int $nbPieces
     */
    public function setNbPieces($nbPieces)
    {
        $this->nbPieces = $nbPieces;
    }

    /**
     * @return int
     */
    public function getStarterId()
    {
        return $this->starterId;
    }

    /**
     * @param int $starterId
     */
    public function setStarterId($starterId)
    {
        $this->starterId = $starterId;
    }

    /**
     * @var string
     *
     * @ORM\Column(name="email", type="string", length=60, nullable=false)
     */
    private $email;

    /**
     * @var boolean
     *
     * @ORM\Column(name="is_active", type="boolean", nullable=false)
     */
    private $isActive;

    /**
     * @var integer
     *
     * @ORM\Column(name="nb_pieces", type="integer", nullable=false)
     */
    private $nbPieces;

    /**
     * @var integer
     *
     * @ORM\Column(name="starter_id", type="integer", nullable=false)
     */
    private $starterId;


}

