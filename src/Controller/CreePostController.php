<?php

namespace App\Controller;

use App\Entity\Post;
use App\Form\CreePostType;
use Doctrine\Persistence\ManagerRegistry;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;

class CreePostController extends AbstractController
{
    private ManagerRegistry $managerRegistry;

    private $tokenStorage;

    public function __construct(ManagerRegistry $managerRegistry, TokenStorageInterface $tokenStorage)
    {
        $this->managerRegistry = $managerRegistry;
        $this->tokenStorage = $tokenStorage;
    }

    #[Route('/cree-post', name: 'app_cree_post')]
        public function index(Request $request, UserInterface $user): Response
        {
            $post = new Post();
        $form = $this->createForm(CreePostType::class, $post);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Déjà fait via le formulaire
            // $post->setIdUtlisateur($user);
            $post->setIdUtlisateur($user);
            $entityManager = $this->managerRegistry->getManager();
            $entityManager->persist($post);
            $entityManager->flush();

            // Redirigez l'utilisateur vers la page souhaitée, par exemple la page de confirmation.
            return $this->redirectToRoute('publications', ['id' => $post->getIdPost()]);
        }
    
        return $this->render('cree_post/index.html.twig', [
            'controller_name' => 'CreePostController',
            'form' => $form->createView(),
        ]);
    }
    }