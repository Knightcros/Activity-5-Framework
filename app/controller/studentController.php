<?php
require_once "../app/models/dictionary.php";

class studentController {
    private $student;

    public function __construct() {
        $this->student = new Student();
    }

    public function index() {
        $students = $this->student->getAll();
        include "../app/views/students.php";
    }

    public function create() {
        if ($_POST) {
            $this->student->create(
                $_POST['student_Id'],
                $_POST['name'],
                $_POST['email'],
                $_POST['phone'],
                $_POST['course'],
                $_POST['department']    
            );
            header("Location: index.php?action=index");
        }
        include "../app/views/addstudent.php";
    }

    public function delete() {
        $this->student->delete($_GET['id']);
        header("Location: index.php?action=index");
    }
}

