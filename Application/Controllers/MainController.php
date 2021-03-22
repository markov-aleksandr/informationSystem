<?php


namespace Application\Controllers;


use Application\Models\MainModel;
use Core\Controller;

class MainController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new MainModel();
    }

    public function index()
    {
        $this->view->generate('createStudent.php' );
    }
}