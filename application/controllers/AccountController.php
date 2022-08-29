<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller
{
    public function loginAction()
    {
        echo 'Страница входа';
    }

    public function registerAction()
    {
        echo 'Страница регистрации';
    }
}