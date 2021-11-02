<?php

namespace App\Controller;

use App\Form\UserType;
use App\Services\Persist;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class UsersController extends AbstractController
{
    /**
     * Create User entity and store in Session to persist service
     * @param Persist $persist
     * @param Request $request
     * @param SessionInterface $session
     * @return Response
     * @Route("/users", name="users")
     */
    public function index(Persist $persist, Request $request, SessionInterface $session): Response
    {
        $form = $this->createForm(UserType::class);
        $form->handleRequest($request);
        $users = [];
        if ($form->isSubmitted() && $form->isValid()) {
            $users = $persist->saveData($form->getData(), $session);
        }
        return $this->render('users/index.html.twig', [
            'form' => $form->createView(),
            'users' => $users
        ]);
    }
}
