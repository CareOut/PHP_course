<?php

class task
{
private string $description;
private DateTime $dateCreated;
private DateTime $dateUpdated;
private DateTime $dateDone;
private int $priority;
private bool $isDone = false;
private User $user;
private Array $comments = [];


public function __construct(User $user, string $description = null, int $priority = 1)
{
    $this->user = $user;
    $this->description = $description;
    $this->priority = $priority;
    $this->setDateCreated(new DateTime());
}

public function markIsDone():variant_mod
{
$this->setDateUpdated(new DateTime);
$this->setDateDone(new DateTime);
$this->setIsDone();
}

public function getDescription():string 
{
    return $this->description;
}

public function getDateCreated():DateTime 
{
    return $this->dateCreated;
}

public function getDateUpdated():DateTime 
{
    return $this->dateUpdated;
}


public function getDateDone():DateTime 
{
    return $this->dateDone;
}

public function getPriority():DateTime 
{
    return $this->priority;
}

public function setPriority(int $priority):void 
{
 $this->priority = $priority;
}

private function setIsDone():void 
{
    $this->isDone = true;
}

public function setUser(User $user):void 
{
    $this->user = $user;
}

public function setComment(Comment $comment):void 
{

}

public function getUser():User
{
return $this->user;
}

public function getComments():array
{
return $this->comments;
}

public function setDescription(string $description):void
{
 $this->setDateUpdated(new DateTime);
 $this->description = $description;
}




}