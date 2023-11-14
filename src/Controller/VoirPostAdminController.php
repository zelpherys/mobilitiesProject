<?php

namespace App\Controller;

use App\Repository\PostRepository;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class VoirPostAdminController extends AbstractController
{
    #[Route('/voir-post-admin/{id}', name: 'app_voir_post_admin')]
    public function index(PostRepository $postRepo,$id): Response
    {
        //créer une nouvelle variable -> on appelle le repo ->
        $posts = $postRepo -> findByIdUtlisateur($id);
    
        return $this->render('voir_post_admin/index.html.twig', [
            'posts' => $posts,
        ]);
    }
}
