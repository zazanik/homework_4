<?php

namespace zazanik\hw\controllers;
use zazanik\hw\Models\Chair;
class ChairController
{
    public function actionIndex()
    {
        $chairList = array();
        $chairList = Chair::getChairList();
        require_once(ROOT . '/application/views/chair/index.php');
        return true;
    }

    public function actionCreate()
    {
        $postInfo = $_POST;

        if ($postInfo){
            $post = Chair::create($postInfo['name']);
        }
        require_once (ROOT . '/application/views/chair/create.php');
        return true;
    }
}