<?php

namespace App\Controller\Pages;

use App\Entity\Contact;
use App\Form\ContactType;
use App\Notification\ContactNotification;
use App\Repository\PageRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ContactController extends AbstractController
{
    /**
     * @Route("/contact", name="contact")
     */
    public function conatct(PageRepository $pageRepository, Request $request, ContactNotification $notification): Response
    {
        $page = $pageRepository->findOneByName('contact');

        $contact = new Contact();
        $form = $this->createForm(ContactType::class, $contact);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            // Google recaptcha
            //-----------------------------------
            $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
            $recaptchaSecretKey = $this->getParameter('google_captcha_secret_key');
            $recaptchaResponse = $form->get('recaptcha')->getData();

            // On fait la requette
            $recaptcha = file_get_contents($recaptchaUrl . '?secret=' . $recaptchaSecretKey . '&response=' . $recaptchaResponse);
            $recaptcha = json_decode($recaptcha);
            var_dump($recaptcha->success);
            // Si  success
            if ($recaptcha->success === true) {
                var_dump($recaptcha->score);
                // on fixe le score minimum souhaité
                if ($recaptcha->score >= 0.6) {
                    $notification->notify($contact);
                    $this->addFlash('success', 'Votre email a bien été envoyer, je vous répondrais dans les plus brefs délais.');
                }
            }

            $this->redirectToRoute('contact');
        }

        return $this->render('pages/contact.html.twig', [
            'pageTitle' => $page->getTitle(),
            'pageDescription' => $page->getDescription(),
            'header' => $page->getHeroHeader(),
            'form' => $form->createView(),
        ]);
    }
}
