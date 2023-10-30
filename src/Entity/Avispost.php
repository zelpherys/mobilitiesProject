<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Avispost
 *
 * @ORM\Table(name="avispost", indexes={@ORM\Index(name="avisPost_utilisateur_FK", columns={"id_utlisateur"}), @ORM\Index(name="avisPost_post0_FK", columns={"id_post"})})
 * @ORM\Entity(repositoryClass= "App\Repository\AvispostRepository")
 */
class Avispost
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_avis", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAvis;

    /**
     * @var bool
     *
     * @ORM\Column(name="isVrai", type="boolean", nullable=false)
     */
    private $isvrai;

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
     * @var \Post
     *
     * @ORM\ManyToOne(targetEntity="Post")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_post", referencedColumnName="id_post")
     * })
     */
    private $idPost;

    public function getIdAvis(): ?int
    {
        return $this->idAvis;
    }

    public function isIsvrai(): ?bool
    {
        return $this->isvrai;
    }

    public function setIsvrai(bool $isvrai): static
    {
        $this->isvrai = $isvrai;

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

    public function getIdPost(): ?Post
    {
        return $this->idPost;
    }

    public function setIdPost(?Post $idPost): static
    {
        $this->idPost = $idPost;

        return $this;
    }


}
