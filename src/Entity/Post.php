<?php

namespace App\Entity;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

/**
 * Post
 *
 * @ORM\Table(name="post", indexes={@ORM\Index(name="post_station1_FK", columns={"id_station"}), @ORM\Index(name="post_utilisateur_FK", columns={"id_utlisateur"}), @ORM\Index(name="post_categorie0_FK", columns={"id_Categorie"})})
 * @ORM\Entity(repositoryClass= "App\Repository\PostRepository")
 */
class Post
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_post", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idPost;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_post", type="text", length=65535, nullable=false)
     */
    private $contenuPost;

    /**
     * @var int
     *
     * @ORM\Column(name="post_confirmer", type="integer", nullable=false)
     */
    private $postConfirmer;

    /**
     * @var int
     *
     * @ORM\Column(name="post_infirmer", type="integer", nullable=false)
     */
    private $postInfirmer;

    /**
     * @var float|null
     *
     * @ORM\Column(name="lat_post", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $latPost = NULL;

    /**
     * @var float|null
     *
     * @ORM\Column(name="long_post", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $longPost = NULL;

    /**
     * @var \Station
     *
     * @ORM\ManyToOne(targetEntity="Station")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_station", referencedColumnName="id_station")
     * })
     */
    private $idStation;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utlisateur", referencedColumnName="id_utlisateur")
     * })
     */
    private $idUtlisateur;

    /**
     * @var \Categorie
     *
     * @ORM\ManyToOne(targetEntity="Categorie")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_Categorie", referencedColumnName="id_Categorie")
     * })
     */
    private $idCategorie;

    public function getIdPost(): ?int
    {
        return $this->idPost;
    }

    public function getContenuPost(): ?string
    {
        return $this->contenuPost;
    }

    public function setContenuPost(string $contenuPost): static
    {
        $this->contenuPost = $contenuPost;

        return $this;
    }

    public function getPostConfirmer(): ?int
    {
        return $this->postConfirmer;
    }

    public function setPostConfirmer(int $postConfirmer): static
    {
        $this->postConfirmer = $postConfirmer;

        return $this;
    }

    public function getPostInfirmer(): ?int
    {
        return $this->postInfirmer;
    }

    public function setPostInfirmer(int $postInfirmer): static
    {
        $this->postInfirmer = $postInfirmer;

        return $this;
    }

    public function getLatPost(): ?float
    {
        return $this->latPost;
    }

    public function setLatPost(?float $latPost): static
    {
        $this->latPost = $latPost;

        return $this;
    }

    public function getLongPost(): ?float
    {
        return $this->longPost;
    }

    public function setLongPost(?float $longPost): static
    {
        $this->longPost = $longPost;

        return $this;
    }

    public function getIdStation(): ?Station
    {
        return $this->idStation;
    }

    public function setIdStation(?Station $idStation): static
    {
        $this->idStation = $idStation;

        return $this;
    }

    public function getIdUtlisateur(): ?Utilisateur
    {
        return $this->idUtlisateur;
    }

    public function setIdUtlisateur(?Utilisateur $idUtlisateur): static
    {
        $this->idUtlisateur = $idUtlisateur;

        return $this;
    }

    public function getIdCategorie(): ?Categorie
    {
        return $this->idCategorie;
    }

    public function setIdCategorie(?Categorie $idCategorie): static
    {
        $this->idCategorie = $idCategorie;

        return $this;
    }


}
