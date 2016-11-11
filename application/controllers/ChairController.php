<?php

namespace zazanik\hw\controllers;
use zazanik\hw\Models\Chair;
class ChairController
{
    public function actionIndex()
    {
        $chairList = Chair::getChairList();
        require_once(ROOT . '/application/views/chair/index.php');
        return true;
    }

    public function actionNew()
    {
        require_once (ROOT . '/application/views/chair/create.php');
        return true;
    }

    public function actionCreate()
    {
        $postInfo = $_POST;
        if ($postInfo){
            $post = Chair::create($postInfo['name']);
        }
        return header('Location: /chair/index');
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
            return header("Location: /chair/index");
        }
    }

    public function actionEdit($id)
    {
        if (@$_REQUEST['submit']) {
            $edit = Chair::edit($id);
            return header("Location: /chair/{$id}");
        }

        if ($id) {
            $resultItem = Chair::getChairItemByID($id);
            require_once(ROOT . '/application/views/chair/edit.php');
            return true;
        }

    }
}