<?php

namespace App\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ResetPasswordType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('newPassword', RepeatedType::class, [
                'type' => PasswordType::class,
                'attr' => ['class' => 'form-group'],
                'invalid_message' => 'Le mot de passe et la confirmation doivent être identique.',
                'required' => true,
                'first_options' => [
                    'label' => 'Votre nouveau mot de passe',
                    'attr' => [
                        'placeholder' => 'Votre nouveau mot de passe'
                    ],
                    'label_attr' => [
                        'class' => 'label-hide'
                    ]
                ],
                'second_options' => [
                    'label' => 'Confirmer votre nouveau mot de passe',
                    'attr' => [
                        'placeholder' => 'Confirmer votre nouveau mot de passe'
                    ],
                    'label_attr' => [
                        'class' => 'label-hide'
                    ]
                ]
            ]);
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults([
            // Configure your form options here
        ]);
    }
}
