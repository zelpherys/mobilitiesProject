<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Station
 *
 * @ORM\Table(name="station", indexes={@ORM\Index(name="station_ville_FK", columns={"id_ville"})})
 * @ORM\Entity(repositoryClass= "App\Repository\StationRepository")
 */
class Station
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_station", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idStation;

    /**
     * @var string
     *
     * @ORM\Column(name="nom_station", type="string", length=100, nullable=false)
     */
    private $nomStation;

    /**
     * @var float
     *
     * @ORM\Column(name="lat_station", type="float", precision=10, scale=0, nullable=false)
     */
    private $latStation;

    /**
     * @var float
     *
     * @ORM\Column(name="long_station", type="float", precision=10, scale=0, nullable=false)
     */
    private $longStation;

    /**
     * @var int
     *
     * @ORM\Column(name="ligne", type="integer", nullable=false)
     */
    private $ligne;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="is_extremite", type="boolean", nullable=true, options={"default"="NULL"})
     */
    private $isExtremite = 'NULL';

    /**
     * @var \Ville
     *
     * @ORM\ManyToOne(targetEntity="Ville")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_ville", referencedColumnName="id_ville")
     * })
     */
    private $idVille;

    public function getIdStation(): ?int
    {
        return $this->idStation;
    }

    public function getNomStation(): ?string
    {
        return $this->nomStation;
    }

    public function setNomStation(string $nomStation): static
    {
        $this->nomStation = $nomStation;

        return $this;
    }

    public function getLatStation(): ?float
    {
        return $this->latStation;
    }

    public function setLatStation(float $latStation): static
    {
        $this->latStation = $latStation;

        return $this;
    }

    public function getLongStation(): ?float
    {
        return $this->longStation;
    }

    public function setLongStation(float $longStation): static
    {
        $this->longStation = $longStation;

        return $this;
    }

    public function getLigne(): ?int
    {
        return $this->ligne;
    }

    public function setLigne(int $ligne): static
    {
        $this->ligne = $ligne;

        return $this;
    }

    public function isIsExtremite(): ?bool
    {
        return $this->isExtremite;
    }

    public function setIsExtremite(?bool $isExtremite): static
    {
        $this->isExtremite = $isExtremite;

        return $this;
    }

    public function getIdVille(): ?Ville
    {
        return $this->idVille;
    }

    public function setIdVille(?Ville $idVille): static
    {
        $this->idVille = $idVille;

        return $this;
    }


}
