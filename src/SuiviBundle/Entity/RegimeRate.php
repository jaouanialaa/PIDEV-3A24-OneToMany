<?php

namespace SuiviBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * RegimeRate
 *
 * @ORM\Table(name="regime_rate")
 * @ORM\Entity(repositoryClass="SuiviBundle\Repository\RegimeRateRepository")
 */
class RegimeRate
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
     * @var int
     *
     * @ORM\Column(name="valeur", type="integer")
     */
    private $valeur;

    /**
     * @var int
     *
     * @ORM\Column(name="id_user", type="integer",)
     */
    private $idUser;

    /**
     * @var int
     *
     * @ORM\Column(name="id_regime", type="integer")
     */
    private $idRegime;


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
     * Set valeur
     *
     * @param integer $valeur
     *
     * @return RegimeRate
     */
    public function setValeur($valeur)
    {
        $this->valeur = $valeur;

        return $this;
    }

    /**
     * Get valeur
     *
     * @return int
     */
    public function getValeur()
    {
        return $this->valeur;
    }

    /**
     * Set idUser
     *
     * @param string $idUser
     *
     * @return RegimeRate
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

    /**
     * Set idRegime
     *
     * @param integer $idRegime
     *
     * @return RegimeRate
     */
    public function setIdRegime($idRegime)
    {
        $this->idRegime = $idRegime;

        return $this;
    }

    /**
     * Get idRegime
     *
     * @return int
     */
    public function getIdRegime()
    {
        return $this->idRegime;
    }
}

