<?php

class User
{
public string $userName;
public string $email;
public ?string $sex;
public ?int $age;
public bool $isActive = true;
public DateTime $dateCreated;

function __construct (string $userName, string $email)
{
    $this->userName = $userName;
    $this->email = $email;
    $this->dateCreated = new DateTime();
}

}