<?php

namespace App\Notification;

use App\Entity\Contact;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Twig\Environment;

class ContactNotification
{
    /**
     * @var \Swift_Mailer
     */
    private $mailer;

    /**
     * @var Environment
     */
    private $renderer;

    /**
     * @param ParameterBagInterface 
     */
    private $params;


    public function __construct(\Swift_Mailer $mailer, Environment $renderer, ParameterBagInterface $params)
    {
        $this->mailer = $mailer;
        $this->renderer = $renderer;
        $this->params = $params;
    }

    public function notify(Contact $contact)
    {
        $adminMail = $this->params->get('admin_mail');

        $message = (new \Swift_Message('Message de cyannlab.com'))
            ->setFrom($contact->getEmail())
            ->setTo($adminMail)
            ->setReplyTo($contact->getEmail())
            ->setBody($this->renderer->render('emails/contact.html.twig', [
                'contact' => $contact
            ]), 'text/html');

        $this->mailer->send($message);
    }
}
