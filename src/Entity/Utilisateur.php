<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherAwareInterface;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;

/**
 * Utilisateur
 *
 * @ORM\Table(name="utilisateur")
 * @ORM\Entity(repositoryClass= "App\Repository\UtilisateurRepository")
 */
class Utilisateur  implements UserInterface, PasswordAuthenticatedUserInterface, PasswordHasherAwareInterface
{
    /**
     * @var int
     *
     * @ORM\Column(name="id_utlisateur", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idUtlisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="prenom_utilisateur", type="string", length=50, nullable=false)
     */
    private $prenomUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="email_utilisateur", type="string", length=100, nullable=false)
     */
    private $emailUtilisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="mdp_utlisateur", type="string", length=100, nullable=false)
     */
    private $mdpUtlisateur;

    /**
     * @var string
     *
     * @ORM\Column(name="role_utlisateur", type="string", length=15, nullable=false)
     */
    private $roleUtlisateur;

    /**
     * @var int
     *
     * @ORM\Column(name="compteurPoint", type="integer", nullable=false)
     */
    private $compteurpoint;

    /**
     * @var string
     *
     * @ORM\Column(name="telephone", type="string", length=15, nullable=false)
     */
    private $telephone;

    public function getIdUtlisateur(): ?int
    {
        return $this->idUtlisateur;
    }

    public function getPrenomUtilisateur(): ?string
    {
        return $this->prenomUtilisateur;
    }

    public function setPrenomUtilisateur(string $prenomUtilisateur): static
    {
        $this->prenomUtilisateur = $prenomUtilisateur;

        return $this;
    }

    public function getEmailUtilisateur(): ?string
    {
        return $this->emailUtilisateur;
    }

    public function setEmailUtilisateur(string $emailUtilisateur): static
    {
        $this->emailUtilisateur = $emailUtilisateur;

        return $this;
    }

    public function getMdpUtlisateur(): ?string
    {
        return $this->mdpUtlisateur;
    }

    public function setMdpUtlisateur(string $mdpUtlisateur): static
    {
        $this->mdpUtlisateur = $mdpUtlisateur;

        return $this;
    }

    public function getRoleUtlisateur(): ?string
    {
        return $this->roleUtlisateur;
    }

    public function setRoleUtlisateur(string $roleUtlisateur): static
    {
        $this->roleUtlisateur = $roleUtlisateur;

        return $this;
    }

    public function getCompteurpoint(): ?int
    {
        return $this->compteurpoint;
    }

    public function setCompteurpoint(int $compteurpoint): static
    {
        $this->compteurpoint = $compteurpoint;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

           //--------- UserInterface

    /**

     * The public representation of the user (e.g. a username, an email address, etc.)

     *

     * @see UserInterface

     */

     public function getUserIdentifier(): string

     {
 
         return (string) $this->emailUtilisateur;
 
     }
 
 
 
     /**
 
      * @see UserInterface
 
      */
 
     public function getRoles(): array
 
     {        
 
         $roles[] = $this->roleUtlisateur;
 
         return array_unique($roles);
 
     }
 
 
 
     /**
 
      *
 
      * @see UserInterface
 
      */
 
     public function getSalt(): ?string
 
     {
 
         return null;
 
     }
 
 
 
     /**
 
      * @see UserInterface
 
      */
 
     public function eraseCredentials()
 
     {
 
     }
 
 
 
     /**
 
      * @see PasswordAuthenticatedUserInterface
 
      */
 
     public function getPassword(): string
 
     {
 
         return $this->mdpUtlisateur;
 
     }
 
 
 
     public function getPasswordHasherName(): ?string
 
     {
 
         return null;
 
     }
}
