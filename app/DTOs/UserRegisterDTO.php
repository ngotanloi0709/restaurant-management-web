<?php

namespace App\DTOs;

class UserRegisterDTO
{
    private string $username;
    private string $email;
    private string $password;
    private string $passwordConfirmation;

    public function __construct(string $username, string $email, string $password, string $passwordConfirmation)
    {
        $this->username = $username;
        $this->email = $email;
        $this->password = $password;
        $this->passwordConfirmation = $passwordConfirmation;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    public function getPasswordConfirmation()
    {
        return $this->passwordConfirmation;
    }

    public function setPasswordConfirmation($passwordConfirmation)
    {
        $this->passwordConfirmation = $passwordConfirmation;

        return $this;
    }
}
