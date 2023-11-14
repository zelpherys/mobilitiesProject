<?php

namespace App\Controller;

use App\Entity\Utilisateur; 
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Form\AdminLoginType;




class AdminConnectionController extends AbstractController
{
    #[Route('/admin/connection', name: 'app_admin_connection')]
    public function index(): Response
    {
        $user = $this->getUser();

        if ($user->getRoleUtlisateur() == 'ROLE_ADMIN') {
            // Rediriger l'administrateur vers le tableau de bord de l'admin
            return $this->redirectToRoute('app_dashboard_admin');
        } elseif ($user->getRoleUtlisateur() == 'ROLE_USER') {
            // Rediriger l'utilisateur vers le tableau de bord de l'utilisateur
            return $this->redirectToRoute('app_dashboard_utilisateur');
        } else {
            // Gérer d'autres rôles au besoin
            throw $this->createAccessDeniedException('Accès refusé.');
        }
    }
    
    // ... autres méthodes
}

