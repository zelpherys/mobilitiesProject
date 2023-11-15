<?php

namespace App\Controller;

use App\Entity\Post;
use App\Entity\Avispost;
use Doctrine\ORM\EntityManagerInterface;
use App\Repository\UtilisateurRepository;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Security;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use App\Entity\Commentaire; // Assurez-vous d'ajouter l'importation pour la classe Commentaire

class DashboardAdminController extends AbstractController
{
    #[Route('/dashboard/admin', name: 'app_dashboard_admin')]
    public function index(EntityManagerInterface $entityManager, Security $security,UtilisateurRepository $userRepo): Response
    {
        // Si l'utilisateur n'est pas connecté en tant qu'admin, redirigez-le vers la page de connexion admin
        if (!$security->isGranted('ROLE_ADMIN')) {
            return $this->redirectToRoute('app_dashboard_utilisateur');
        }

        $users = $userRepo -> findAll();

        return $this->render('dashboard_admin/index.html.twig', [
            'controller_name' => 'DashboardAdminController',
            'users' => $users,
        ]);
    }

    // #[Route('/dashboard/admin/supprimer-post/{id}', name: 'supprimer_post_admin', methods: ['GET', 'POST'])]
    // public function supprimerPost(Request $request, $id, EntityManagerInterface $entityManager, Security $security): Response
    // {
    //     // Si l'utilisateur n'est pas connecté en tant qu'admin, redirigez-le vers la page de connexion admin
    //     if (!$security->isGranted('ROLE_ADMIN')) {
    //         return $this->redirectToRoute('app_admin_connection');
    //     }

    //     $post = $entityManager->getRepository(Post::class)->find($id);

    //     if (!$post) {
    //         throw $this->createNotFoundException('Le post n\'existe pas.');
    //     }

    //     // Supprimez d'abord les enregistrements dans la table avispost liés à ce post
    //     $avisposts = $entityManager->getRepository(Avispost::class)->findBy(['idPost' => $post]);

    //     foreach ($avisposts as $avispost) {
    //         $entityManager->remove($avispost);
    //     }

    //     // Supprimez les commentaires liés à ce post
    //     $commentaires = $entityManager->getRepository(Commentaire::class)->findBy(['idPost' => $post]);

    //     foreach ($commentaires as $commentaire) {
    //         $entityManager->remove($commentaire);
    //     }

    //     // Supprimez le post
    //     $entityManager->remove($post);
    //     $entityManager->flush();

    //     // Redirigez l'utilisateur vers la page d'accueil du tableau de bord admin
    //     return $this->redirectToRoute('app_dashboard_admin');
    // }
}
