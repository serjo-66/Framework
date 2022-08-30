<?php

namespace application\controllers;

use application\core\Controller;
use application\lib\Db;

class MainController extends Controller
{
    public function indexAction()
    {
        $this->view->render('Главная страница');
    }
}
