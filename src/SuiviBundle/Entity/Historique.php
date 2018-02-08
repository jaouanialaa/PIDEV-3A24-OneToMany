<?php

namespace SuiviBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Historique
 *
 * @ORM\Table(name="historique")
 * @ORM\Entity(repositoryClass="SuiviBundle\Repository\HistoriqueRepository")
 */
class Historique
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
     * @var float
     *
     * @ORM\Column(name="poids", type="float")
     */
    private $poids;

    /**
     * @var string
     *
     * @ORM\Column(name="date", type="string", length=255)
     */
    private $desciption;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dateH", type="date")
     */
    private $dateH;


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
     * Set poids
     *
     * @param float $poids
     *
     * @return Historique
     */
    public function setPoids($poids)
    {
        $this->poids = $poids;

        return $this;
    }

    /**
     * Get poids
     *
     * @return float
     */
    public function getPoids()
    {
        return $this->poids;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Historique
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set dateH
     *
     * @param \DateTime $dateH
     *
     * @return Historique
     */
    public function setDateH($dateH)
    {
        $this->dateH = $dateH;

        return $this;
    }

    /**
     * Get dateH
     *
     * @return \DateTime
     */
    public function getDateH()
    {
        return $this->dateH;
    }
}

