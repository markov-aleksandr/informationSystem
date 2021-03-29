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
        $this->view->generate('main-view.php' );
    }
    public function create()
    {
        $this->view->generate('createStudent-view.php' );
    }
    public function output()
    {
        $this->view->generate('outputStudent.php' );
    }
        public function rating()
    {
        $this->view->generate('rating-view.php' );
    }
}
