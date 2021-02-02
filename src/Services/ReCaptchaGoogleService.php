<?php

namespace App\Services;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class ReCaptchaGoogleService
{
    private $params;

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }

    public function checkGoogle($recaptchaResponse)
    {
        $recaptchaUrl = 'https://www.google.com/recaptcha/api/siteverify';
        $recaptchaSecretKey = $this->params->get('google_captcha_secret_key');

        //On fait la requette
        $recaptcha = file_get_contents($recaptchaUrl . '?secret=' . $recaptchaSecretKey . '&response=' . $recaptchaResponse);
        $recaptcha = json_decode($recaptcha);

        // Si  success
        if ($recaptcha->success === true) {
            // on fixe le score minimum souhaité
            if ($recaptcha->score >= 0.7) {
                return true;
            }
        } else {
            return false;
        }
    }
}
