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

            $notification->notify($contact);

            $this->addFlash('success', 'Votre email a bien été envoyer, je vous répondrais dans les plus brefs délais.');
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
