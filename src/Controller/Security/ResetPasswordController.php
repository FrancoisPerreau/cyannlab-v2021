<?php

namespace App\Controller\Security;

use App\Entity\ResetPassword;
use App\Notification\ContactNotification;
use App\Repository\ResetPasswordRepository;
use App\Repository\UserRepository;
use App\Services\CheckDateByHour;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ResetPasswordController extends AbstractController
{
    /**
     * @Route("/mot-de-passe-oublie", name="reset_password")
     */
    public function resetPassword(Request $request, UserRepository $userRepository, EntityManagerInterface $entityManager, ContactNotification $notification): Response
    {
        // Si l'utilisateur est déjà connecté on le redirige vers la home
        if ($this->getUser()) return $this->redirectToRoute(('home'));

        // On recupère l'email passé dans le formulaire
        if ($request->get('email')) {
            $user = $userRepository->findOneBy(['email' => $request->get('email')]);
            // Si l'email correspond à un utilisateur
            if ($user) {
                // Enregitrement en BDD la demande de reset_password
                $resetPassword = new ResetPassword();
                $resetPassword->setUser($user);
                $resetPassword->setToken(uniqid());
                $resetPassword->setCreatedAt(new \DateTime());

                $entityManager->persist($resetPassword);
                $entityManager->flush();


                // Envoi d'un email à l'utilisateur avec un lien pour changer de MDP
                $url = $this->generateUrl('update_password', ["token" => $resetPassword->getToken()]);
                $notification->resetPasswordMail($user->getEmail(), $url);
            } else {
                dd('oupsssssss');
            }
        }

        return $this->render('security/resetPassword.html.twig', [
            'pageTitle' => 'Mot de passe oublié',
        ]);
    }


    /**
     * @Route("/modifier-mon-mot-de-passe/{token}", name="update_password")
     */
    public function updatePassword($token, ResetPasswordRepository $resetPasswordRepository, CheckDateByHour $checkDateByHour): Response
    {
        $resetPassword = $resetPasswordRepository->findOneByToken($token);

        // Vérifier que le token (passé en GET) correspond à un resetPassword
        if (!$resetPassword) return $this->redirectToRoute('reset_password');


        // Vérifier si le resetPassword a été créé il y à moins de 3h
        if ($checkDateByHour->check($resetPassword->getCreatedAt(), 3)) {
            $this->addFlash('notice', 'Votre demande de chagement de mot de passe à exipirée (plus de 3h). Merci de la renouveler');
            return $this->redirectToRoute('reset_password');
        }

        dd($resetPassword);

        return $this->render('security/resetPassword.html.twig', [
            'pageTitle' => 'Mot de passe oublié',
        ]);
    }
}
