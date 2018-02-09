<?php

namespace ArticleBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ArticleRate
 *
 * @ORM\Table(name="article_rate")
 * @ORM\Entity(repositoryClass="ArticleBundle\Repository\ArticleRateRepository")
 */
class ArticleRate
{

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var int
     *
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="Article")
     * @ORM\JoinColumn(name="article_id", referencedColumnName="id")
     */

    private $idArticle;

    /**
     * @var int
     * @ORM\Id
     * @ORM\OneToOne(targetEntity="GUBundle\Entity\Utilisateur")
     *
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $idUser;


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
     * Set date
     *
     * @param \DateTime $date
     *
     * @return ArticleRate
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set idArticle
     *
     * @param integer $idArticle
     *
     * @return ArticleRate
     */
    public function setIdArticle($idArticle)
    {
        $this->idArticle = $idArticle;

        return $this;
    }

    /**
     * Get idArticle
     *
     * @return int
     */
    public function getIdArticle()
    {
        return $this->idArticle;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     *
     * @return ArticleRate
     */
    public function setIdUser($idUser)
    {
        $this->idUser = $idUser;

        return $this;
    }

    /**
     * Get idUser
     *
     * @return string
     */
    public function getIdUser()
    {
        return $this->idUser;
    }
}
