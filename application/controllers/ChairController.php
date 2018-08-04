<?php

namespace zazanik\hw\controllers;
use zazanik\hw\Models\Chair;

/**
 * Class ChairController
 * @package zazanik\hw\controllers
 */
class ChairController
{
    /**
     * @return mixed
     */
    public function actionIndex()
    {
        $chairList = Chair::getChairList();
        return require_once(ROOT . '/application/views/chair/index.php');
    }

    /**
     * @return bool
     */
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

    /**
     * @param $id integer
     * @return bool
     */
    public function actionView($id)
    {
        if ($id) {
            $resultItem = Chair::getChairItemByID($id);
            require_once(ROOT . '/application/views/chair/view.php');
        }

        return true;
    }

    /**
     * @param $id integer
     */
    public function actionDelete($id)
    {
        if ($id) {
            $resultItem = Chair::delete($id);
            return header("Location: /chair/index");
        }
    }

    /**
     * @param $id integer
     * @return bool|void
     */
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