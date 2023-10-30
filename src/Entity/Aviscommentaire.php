<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Aviscommentaire
 *
 * @ORM\Table(name="aviscommentaire", indexes={@ORM\Index(name="avisCommentaire_utilisateur_FK", columns={"id_utlisateur"}), @ORM\Index(name="avisCommentaire_commentaire0_FK", columns={"id_commentaire"})})
 * @ORM\Entity(repositoryClass= "App\Repository\AviscommentaireRepository")
 */
class Aviscommentaire
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_avisCommentaire", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idAviscommentaire;

    /**
     * @var bool
     *
     * @ORM\Column(name="isVrai", type="boolean", nullable=false)
     */
    private $isvrai;

    /**
     * @var \Commentaire
     *
     * @ORM\ManyToOne(targetEntity="Commentaire")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_commentaire", referencedColumnName="id_commentaire")
     * })
     */
    private $idCommentaire;

    /**
     * @var \Utilisateur
     *
     * @ORM\ManyToOne(targetEntity="Utilisateur")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_utlisateur", referencedColumnName="id_utlisateur")
     * })
     */
    private $idUtlisateur;

    public function getIdAviscommentaire(): ?int
    {
        return $this->idAviscommentaire;
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

    public function getIdCommentaire(): ?Commentaire
    {
        return $this->idCommentaire;
    }

    public function setIdCommentaire(?Commentaire $idCommentaire): static
    {
        $this->idCommentaire = $idCommentaire;

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
