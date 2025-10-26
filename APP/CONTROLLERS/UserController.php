<?php
require_once __DIR__ . '/../MODEL/User.php';
class UserController {
    private $model;
    public function __construct() {
        $this->model = new User();
    }
    public function index() {
        $users = $this->model->all();
        include __DIR__ . '/../VIEWS/USERS/index_view.php';
    }
    public function create() {
        include __DIR__ . '/../VIEWS/USERS/create.php';
    }
    public function store() {
        $this->model->create($_POST, $_FILES['photo']);
        header("Location: index.php");
    }
}
?>