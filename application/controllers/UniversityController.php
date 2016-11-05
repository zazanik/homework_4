<?php

namespace zazanik\hw\controllers;
use zazanik\hw\Models\University;



class UniversityController
{
    public function actionIndex()
    {
        $universitiesList = array();
        $universitiesList = University::getList();
        require_once(ROOT . '/application/views/university/index.php');
        return true;
    }

    public function actionCreate()
    {
        $postInfo = $_POST;

        if ($postInfo){
            $post = University::create($postInfo['name'], $postInfo['city'], $postInfo['link']);
        }
        require_once (ROOT . '/application/views/university/create.php');
        return true;
    }

}
