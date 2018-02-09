<?php

namespace ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use ArticleBundle\Entity\Categorie;


/**
 * Article
 *
 * @ORM\Table(name="article")
 * @ORM\Entity(repositoryClass="ArticleBundle\Repository\ArticleRepository")
 */
class Article
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="titre", type="string", length=255)
     */
    private $titre;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu", type="text")
     */
    private $contenu;
    

    /**
     * @var \Date
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="temps", type="time")
     */
    private $temps;


    /**
     * plusieurs articles ont plusieur catégories
     * @ORM\ManyToMany(targetEntity="Categorie")
     * @ORM\JoinTable(name="article_categorie",
     *     joinColumns={@ORM\JoinColumn(name="article_id", referencedColumnName="id")},
     *      inverseJoinColumns={@ORM\JoinColumn(name="categorie_id", referencedColumnName="id")}
     *      )
     *
     */
    private $categorie;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set titre
     *
     * @param string $titre
     *
     * @return Article
     */
    public function setTitre($titre)
    {
        $this->titre = $titre;

        return $this;
    }

    /**
     * Get titre
     *
     * @return string
     */
    public function getTitre()
    {
        return $this->titre;
    }

    /**
     * Set contenu
     *
     * @param string $contenu
     *
     * @return Article
     */
    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    /**
     * Get contenu
     *
     * @return string
     */
    public function getContenu()
    {
        return $this->contenu;
    }

    /**
     * Set image
     *
     * @param string $image
     *
     * @return Article
     */
    public function setImage($image)
    {
        $this->image = $image;

        return $this;
    }

    /**
     * Get image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * Set date
     *
     * @param \Date $date
     *
     * @return Article
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \Date
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set categorie
     *
     * @param \ArticleBundle\Entity\Categorie $categorie
     *
     * @return Article
     */
    public function setCategorie(\ArticleBundle\Entity\Categorie $categorie = null)
    {
        $this->categorie = $categorie;

        return $this;
    }

    /**
     * Get categorie
     *
     * @return \ArticleBundle\Entity\Categorie
     */
    public function getCategorie()
    {
        return $this->categorie;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->categorie = new \Doctrine\Common\Collections\ArrayCollection();
        $this->date = new \DateTime();
        $this->temps=new \DateTime();
    }

    /**
     * Add categorie.
     *
     * @param \ArticleBundle\Entity\Categorie $categorie
     *
     * @return Article
     */
    public function addCategorie(\ArticleBundle\Entity\Categorie $categorie)
    {
        $this->categorie[] = $categorie;

        return $this;
    }

    /**
     * Remove categorie.
     *
     * @param \ArticleBundle\Entity\Categorie $categorie
     *
     * @return boolean TRUE if this collection contained the specified element, FALSE otherwise.
     */
    public function removeCategorie(\ArticleBundle\Entity\Categorie $categorie)
    {
        return $this->categorie->removeElement($categorie);
    }

    /**
     * Set temps.
     *
     * @param \DateTime $temps
     *
     * @return Article
     */
    public function setTemps($temps)
    {
        $this->temps = $temps;

        return $this;
    }

    /**
     * Get temps.
     *
     * @return \DateTime
     */
    public function getTemps()
    {
        return $this->temps;
    }
}
