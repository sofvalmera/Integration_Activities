<?php

include_once (__DIR__ . '/../model/User.php');

class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }

    public function insertuser(array $insertdata) {
        return $this->userModel->insertUser($insertdata);
    }

    public function getallusers() {
        return $this->userModel->getAllUsers();
    }

    public function searchusers(array $search) {
        return $this->userModel->searchusers($search);
    }

    
}
?>
