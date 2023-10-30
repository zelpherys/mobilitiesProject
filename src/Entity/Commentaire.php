<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Commentaire
 *
 * @ORM\Table(name="commentaire", indexes={@ORM\Index(name="commentaire_utilisateur_FK", columns={"id_utlisateur"}), @ORM\Index(name="commentaire_post0_FK", columns={"id_post"})})
 * @ORM\Entity(repositoryClass= "App\Repository\CommentaireRepository")
 */
class Commentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_commentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idCommentaire;

    /**
     * @var string
     *
     * @ORM\Column(name="contenu_commentaire", type="string", length=300, nullable=false)
     */
    private $contenuCommentaire;

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
     * @var \Post
     *
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post", referencedColumnName="id_post")
     * })
     */
    private $idPost;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utlisateur", referencedColumnName="id_utlisateur")
     * })
     */
    private $idUtlisateur;

    public function getIdCommentaire(): ?int
    {
        return $this->idCommentaire;
    }

    public function getContenuCommentaire(): ?string
    {
        return $this->contenuCommentaire;
    }

    public function setContenuCommentaire(string $contenuCommentaire): static
    {
        $this->contenuCommentaire = $contenuCommentaire;

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

    public function getIdPost(): ?Post
    {
        return $this->idPost;
    }

    public function setIdPost(?Post $idPost): static
    {
        $this->idPost = $idPost;

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


}
