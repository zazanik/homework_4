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
        
    }

}
