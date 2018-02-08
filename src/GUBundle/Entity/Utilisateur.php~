<?php

namespace GUBundle\Entity;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\Common\Collections\Collection;

/**
 * @ORM\Entity
 * @ORM\Table(name="Utilisateur")
 */
class Utilisateur extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;


    /**
     * @ORM\Column(type="string", length=255)
     */
    protected $nom;
    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="voulez vous saisir votre prénom", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Votre prénom est trés court.",
     *     maxMessage="Votre prénom est trés long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $prenom;

    /**
     * @ORM\Column(type="integer", length=8)
     *
     * @Assert\NotBlank(message="voulez vous saisir votre prénom", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Votre prénom est trés court.",
     *     maxMessage="Votre prénom est trés long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $telephone;

    /**
     * @ORM\Column(type="string", length=255)
     *
     * @Assert\NotBlank(message="voulez vous saisir votre prénom", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=3,
     *     max=255,
     *     minMessage="Votre prénom est trés court.",
     *     maxMessage="Votre prénom est trés long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $address;

    /**
     * @ORM\Column(type="string", length=4)
     *
     * @Assert\NotBlank(message="voulez vous saisir votre prénom", groups={"Registration", "Profile"})
     * @Assert\Length(
     *     min=4,
     *     max=4,
     *     minMessage="Votre prénom est trés court.",
     *     maxMessage="Votre prénom est trés long.",
     *     groups={"Registration", "Profile"}
     * )
     */
    protected $codePostal;


    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Set nom
     *
     * @param mixed $nom
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

    }

    /**
     * Get nom
     *
     * @return mixed
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set prenom
     *
     * @param string $prenom
     *
     * @return Utilisateur
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set telephone
     *
     * @param integer $telephone
     *
     * @return Utilisateur
     */
    public function setTelephone($telephone)
    {
        $this->telephone = $telephone;

        return $this;
    }

    /**
     * Get telephone
     *
     * @return integer
     */
    public function getTelephone()
    {
        return $this->telephone;
    }

    /**
     * Set address
     *
     * @param string $address
     *
     * @return Utilisateur
     */
    public function setAddress($address)
    {
        $this->address = $address;

        return $this;
    }

    /**
     * Get address
     *
     * @return string
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * Set codePostal
     *
     * @param string $codePostal
     *
     * @return Utilisateur
     */
    public function setCodePostal($codePostal)
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    /**
     * Get codePostal
     *
     * @return string
     */
    public function getCodePostal()
    {
        return $this->codePostal;
    }
}
