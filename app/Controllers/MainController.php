<?php

namespace app\Controllers;

use app\libs\DB;
use core\Controller;

class MainController extends Controller {

    public function index() {
        $db = new DB();
        $this->view->render('Главная страница');
    }

}