<?php

namespace App\Entity;

use Symfony\Component\Validator\Constraints as Assert;



class Contact
{
    /**
     * @var string|null
     * @Assert\NotBlank
     * @Assert\Length(
     *      min=2,
     *      max=100,
     *      minMessage="Votre prénom doit comporter au moins {{ limit }} caractères",
     *      maxMessage="Votre prénom doit comporter au maximum {{ limit }} caractères"
     * )
     */
    private $firstname;

    /**
     * @var string|null
     * @Assert\NotBlank
     * @Assert\Length(
     *      min=2,
     *      max=100,
     *      minMessage="Votre nom doit comporter au moins {{ limit }} caractères",
     *      maxMessage="Votre nom doit comporter au maximum {{ limit }} caractères"
     * )
     */
    private $lastname;

    /**
     * @var string|null
     * @Assert\NotBlank
     * @Assert\Email(
     *      message="Cette adresse email n'est pas valide"
     * )
     */
    private $email;

    /**
     * @var string|null
     * @Assert\NotBlank
     * @Assert\Length(
     *      min=10,
     *      minMessage="Votre message doit comporter au moins {{ limit }} caractères"
     * )
     */
    private $message;



    /**
     * Get the value of firstname
     *
     * @return  string|null
     */
    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    /**
     * Set the value of firstname
     *
     * @param  string|null  $firstname
     *
     * @return  self
     */
    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    /**
     * Get the value of lastname
     *
     * @return  string|null
     */
    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    /**
     * Set the value of lastname
     *
     * @param  string|null  $lastname
     *
     * @return  self
     */
    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    /**
     * Get the value of email
     *
     * @return  string|null
     */
    public function getEmail(): ?string
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @param  string|null  $email
     *
     * @return  self
     */
    public function setEmail(?string $email): self
    {
        $this->email = $email;

        return $this;
    }


    /**
     * Get the value of message
     *
     * @return  string|null
     */
    public function getMessage(): ?string
    {
        return $this->message;
    }

    /**
     * Set the value of message
     *
     * @param  string|null  $message
     *
     * @return  self
     */
    public function setMessage(?string $message): self
    {
        $this->message = $message;

        return $this;
    }
}
