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

    public function actionView($id)
    {
        if ($id) {
            $resultItem = Chair::getChairItemByID($id);
            require_once(ROOT . '/application/views/chair/view.php');
        }

        return true;
    }

    public function actionDelete($id)
    {
        if ($id) {
            $resultItem = Chair::delete($id);
            self::actionIndex();
            return true;
        }
    }

    public function actionEdit($id)
    {
        if (@$_REQUEST['submit']) {
            $edit = Chair::edit($id);
            self::actionView($id);
            return true;
        }

        if ($id) {
            $resultItem = Chair::getChairItemByID($id);
            require_once(ROOT . '/application/views/chair/edit.php');
            return true;
        }

    }
}