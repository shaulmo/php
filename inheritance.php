<?php

class User {
    public $firstName;
    public $lastName;
    public $userName;

    public function setAttributes($firstName, $lastName, $userName){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->userName = $userName;
    }
    public function getAttributes(){
        return "<strong>First Name:</strong> $this->firstName<br>
                <strong>Last Name:</strong> $this->lastName<br>
                <strong>Username:</strong> $this->userName<hr>";
    }

}

class Customer extends User {
}

$u = new User;
$u->setAttributes("Jerry", "Seinfeld", "jseinfeld");
echo $u->getAttributes();

$c = new Customer;
$c->setAttributes("George", "Constanza", "gconstanza");
echo $c->getAttributes();

echo get_parent_class($c) . "<br>";

$isSub = is_subclass_of($c, 'User') ? 'Instance is a subclass of User' : 'Instance is not a Subclass of User';
echo $isSub;

$parents = class_parents($c);
echo "<br>";
echo implode(", ", $parents);
