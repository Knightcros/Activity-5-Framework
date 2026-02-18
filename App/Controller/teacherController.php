<?php
require_once "../app/models/dictionary.php";

class teacherController {
    private $teachers;

    public function __construct() {
        $this->teachers = new teachers();
    }

    public function index() {
        $teachers = $this->teachers->getAll();
        include "../app/views/teachers.php";
    }

    public function create() {
        if ($_POST) {
            $this->teachers->create(
                $_POST['teacher_Id'],
                $_POST['name'],
                $_POST['email'],
                $_POST['phone'],
                $_POST['department']    
            );
            header("Location: index.php?action=index");
        }
        include "../app/views/addteacher.php";
    }

    public function delete() {
        $this->teachers->delete($_GET['id']);
        header("Location: index.php?action=index");
    }
}