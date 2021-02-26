<?php

namespace App\Controller\Security;

use App\Entity\ResetPassword;
use App\Form\ResetPasswordType;
use App\Notification\ContactNotification;
use App\Repository\ResetPasswordRepository;
use App\Repository\UserRepository;
use App\Services\CheckDateByHour;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;

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
                $this->addFlash('notice', 'Un email vous a été envoyé avec la marche à suivre pour modifier votre mot de passe.');
            } else {
                $this->addFlash('notice', 'Cet email ne correspond à aucun utilisateur');
            }
        }

        return $this->render('security/resetPassword.html.twig', [
            'pageTitle' => 'Mot de passe oublié',
        ]);
    }


    /**
     * @Route("/modifier-mon-mot-de-passe/{token}", name="update_password")
     */
    public function updatePassword($token, ResetPasswordRepository $resetPasswordRepository, CheckDateByHour $checkDateByHour, Request $request, UserPasswordEncoderInterface $encoder, EntityManagerInterface $entityManager): Response
    {
        $resetPassword = $resetPasswordRepository->findOneByToken($token);

        // Vérifier que le token (passé en GET) correspond à un resetPassword
        if (!$resetPassword) return $this->redirectToRoute('reset_password');


        // Vérifier si le resetPassword a été créé il y à moins de 3h
        if ($checkDateByHour->check($resetPassword->getCreatedAt(), 3)) {
            $this->addFlash('notice', 'Votre demande de chagement de mot de passe à exipirée (plus de 3h). Merci de la renouveler');
            return $this->redirectToRoute('reset_password');
        }

        $form = $this->createForm(ResetPasswordType::class);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $newPassword = $form->get('newPassword')->getData();
            $user = $resetPassword->getUser();

            // Encoder le nouveau MDP et l'enregistrer en bdd
            $password = $encoder->encodePassword($user, $newPassword);
            $user->setPassword($password);
            $entityManager->flush();

            // Rediriger vers la page de connexion
            $this->addFlash('notice', 'Votre mot de passe a bien été mis à jour.');
            return $this->redirectToRoute('app_login');
        }

        return $this->render('security/updatePassword.html.twig', [
            'pageTitle' => 'Réinitialiser mon mot de passe',
            'form' => $form->createView(),
        ]);
    }
}
