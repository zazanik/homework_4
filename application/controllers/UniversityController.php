<?php

namespace zazanik\hw\controllers;
use zazanik\hw\Models\Chair;
use zazanik\hw\Models\University;

/**
 * Class UniversityController
 * @package zazanik\hw\controllers
 */
class UniversityController
{
    /**
     * @return bool
     */
    public function actionIndex()
    {
        $universitiesList = University::getList();
        require_once(ROOT . '/application/views/university/index.php');
        return true;
    }

    /**
     * @return bool
     */
    public function actionCreate()
    {
        $postInfo = $_POST;

        if ($postInfo){
            $post = University::create($postInfo['name'], $postInfo['city'], $postInfo['link']);
        }
        require_once (ROOT . '/application/views/university/create.php');
        return true;
    }

    /**
     * @param $id integer
     * @return bool
     */
    public function actionView($id)
    {
        if ($id) {
            $universitiesItem = University::getUniversityItemByID($id);
            $chairList = University::getChairList($id);
            $chairItem = University::getChairListNotInclude($id);
            require_once(ROOT . '/application/views/university/view.php');
        }

        return true;
    }
    
    public function actionAddchair($university_id, $chair_id)
    {
        $universityAddChair = University::addChairToUniversity($university_id, $chair_id);
        return header("Location: /university/{$university_id}");
    }

    /**
     * @param $id integer
     * @return bool
     */
    public function actionDelete($id)
    {
        if ($id) {
            $universityDelete = University::delete($id);
            self::actionIndex();
            return true;
        }
    }

    /**
     * @param $id integer
     * @return bool
     */
    public function actionEdit($id)
    {
        if (@$_REQUEST['submit']) {
            $edit = University::edit($id);
            self::actionView($id);
            return true;
        }

        if ($id) {
            $universitiesItem = University::getNewsItemByID($id);
            require_once(ROOT . '/application/views/university/edit.php');
            return true;
        }

    }

}
