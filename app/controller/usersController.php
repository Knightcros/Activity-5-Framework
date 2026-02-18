<?php
require_once "../app/models/dictionary.php";

class usersController {
    private $users;

    public function __construct() {
        $this->users = new users();
    }

    public function index() {
        $users = $this->users->getAll();
        include "../app/views/users.php";
    }

    public function create() {
        if ($_POST) {
            $this->users->create(
                $_POST['username'],
                $_POST['password']    
            );
            header("Location: index.php?action=index");
        }
        include "../app/views/addusers.php";
    }

    public function delete() {
        $this->users->delete($_GET['id']);
        header("Location: index.php?action=index");
    }
}
