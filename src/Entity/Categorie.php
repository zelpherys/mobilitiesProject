<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categorie
 *
 * @ORM\Table(name="categorie")
 * @ORM\Entity(repositoryClass= "App\Repository\CategorieRepository")
 */
class Categorie
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_Categorie", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="lib_categorie", type="string", length=50, nullable=false)
     */
    private $libCategorie;

    /**
     * @var string
     *
     * @ORM\Column(name="logo_categorie", type="string", length=50, nullable=false)
     */
    private $logoCategorie;

    public function getIdCategorie(): ?int
    {
        return $this->idCategorie;
    }

    public function getLibCategorie(): ?string
    {
        return $this->libCategorie;
    }

    public function setLibCategorie(string $libCategorie): static
    {
        $this->libCategorie = $libCategorie;

        return $this;
    }

    public function getLogoCategorie(): ?string
    {
        return $this->logoCategorie;
    }

    public function setLogoCategorie(string $logoCategorie): static
    {
        $this->logoCategorie = $logoCategorie;

        return $this;
    }


}
