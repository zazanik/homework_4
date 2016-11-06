<?php 

namespace zazanik\hw\controllers;

class IndexController
{
    public function actionIndex()
    {
        require_once (ROOT . '/application/views/index/index.php');
    }
}