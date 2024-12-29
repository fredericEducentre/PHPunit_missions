<?php

declare(strict_types=1);
class User
{
    private $pseudo;
    private $email;
    private $passwordHash;

    public function __construct($pseudo, $email, $password)
    {
        $this->pseudo = $pseudo;
        $this->email = $email;
        $this->passwordHash = password_hash($password, PASSWORD_BCRYPT);
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getHashPassword()
    {
        return $this->passwordHash;
    }

    public function verifyPassword($password)
    {
        return password_verify($password, $this->passwordHash);
    }
}

# Voici comment créer un objet et utiliser ses méthodes
/* 
$user1 = new User("John","johndoe@gmail.com", "mypassword");
print($user1->getEmail()."\n");
print($user1->getHashPassword()."\n");
print($user1->verifyPassword("mypassword")."\n");
*/