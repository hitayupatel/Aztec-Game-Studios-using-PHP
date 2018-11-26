<?php

namespace AztecGameStudios\Domain;

class Player {
    protected $id;
    protected $firstName;
    protected $lastName;
    protected $screenName;
    protected $email;
    protected $password;
    protected $encryptedPassword;
    protected $plaintextPassword;
    protected $dob;
    protected $gamesPlayed;
    protected $gamesPurchased;
    protected $dateJoined;
    protected $lastLogin;
    protected $role;

    public function __construct() {}

    public static function create() {
        $instance = new self();
        return $instance;
    }

    public function setId($id) {
        $this->id = $id;
        return $this;
    }

    public function getId() { 
        return $this->id;
    }

    public function getFirstName() { 
        return $this->firstName;
    }

    public function setFirstName($firstName) {
        $this->firstName = $firstName;
        return $this;
    }

    public function getLastName() { 
        return $this->lastName;
    }

    public function setLastName($lastName) {
        $this->lastName = $lastName;
        return $this;
    }

    public function getScreenName() { 
        return $this->screenName;
    }

    public function setScreenName($screenName) {
        $this->screenName = $screenName;
        return $this;
    }

    public function getEmail() { 
        return $this->email;
    }

    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }

    public function getPassword() { 
        return $this->password;
    }

    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }

    public function getEncryptedPassword() { 
        return $this->encryptedPassword;
    }

    public function setEncryptedPassword($encryptedPassword) {
        $this->encryptedPassword = $encryptedPassword;
        return $this;
    }

    public function getPlainTextPassword() { 
        return $this->plaintextPassword;
    }

    public function setPlainTextPassword($plaintextPassword) {
        $this->plaintextPassword = $plaintextPassword;
        return $this;
    }

    public function getDob() { 
        return $this->dob;
    }

    public function setDob($dob) {
        $this->dob = $dob;
        return $this;
    }

    public function getGamesPlayed() { 
        return $this->gamesPlayed;
    }

    public function setGamesPlayed($gamesPlayed) {
        $this->gamesPlayed = $gamesPlayed;
        return $this;
    }

    public function getGamesPurchased() { 
        return $this->gamesPurchased;
    }

    public function setGamesPurchased($gamesPurchased) {
        $this->gamesPurchased = $gamesPurchased;
        return $this;
    }

    public function getDateJoined() { 
        return $this->dateJoined;
    }

    public function setDateJoined($dateJoined) {
        $this->dateJoined = $dateJoined;
        return $this;
    }

    public function getLastLogin() { 
        return $this->lastLogin;
    }

    public function setLastLogin($lastLogin) {
        $this->lastLogin = $lastLogin;
        return $this;
    }

    public function getRole() { 
        return $this->role;
    }

    public function setRole($role) {
        $this->role = $role;
        return $this;
    }
}