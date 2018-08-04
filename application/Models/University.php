<?php

namespace zazanik\hw\Models;
use zazanik\hw\components\Db;

/**
 * Class University
 * @package zazanik\hw\Models
 */
class University
{
    /**
     * @var integer
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @var string
     */
    public $city;

    /**
     * @var string
     */
    public $link;

    /**
     * @return array
     */
    public static function getList() 
    {
        $db = Db::getConnection();
        $sth = $db->prepare('SELECT id, name, city, link FROM university ORDER BY id ASC');
        $sth->execute();
        $universityList = $sth->fetchAll($db::FETCH_CLASS, University::class);
        return $universityList;
    }

    /**
     * @param $id
     * @return array
     */
    public static function getChairList($id)
    {
        $db = Db::getConnection();
        $sth = $db->prepare("
          SELECT c.id, c.name 
          FROM univesity_chair u_c 
          LEFT OUTER JOIN chair c ON u_c.chair_id = c.id
          WHERE unisersity_id ={$id}
        ");

        $sth->execute();
        $chairList = $sth->fetchAll($db::FETCH_CLASS, Chair::class);
        return $chairList;
    }

    /**
     * @param $id
     * @return array
     */
    public static function getChairListNotInclude($id)
    {
        $db = Db::getConnection();
        $sth = $db->prepare("
          SELECT id, name 
          FROM univesity_chair 
          LEFT OUTER JOIN chair ON chair_id = id
          WHERE unisersity_id ={$id}
        ");

        $sth->execute();
        $chairItem = $sth->fetchAll($db::FETCH_CLASS, Chair::class);
        return $chairItem;
    }

    /**
     * 
     * @param $university_id
     * @param $chair_id
     * @return bool
     */
    public static function addChairToUniversity($university_id, $chair_id)
    {
        $db = Db::getConnection();
        $sth = $db->prepare("
          INSERT INTO `hw`.`univesity_chair` (`unisersity_id`, `chair_id`) 
          VALUES ('{$university_id}', '{$chair_id}') ");
        $sth->execute();
        return true;
    }

    /**
     * @param $name string
     * @param $city string
     * @param $link string
     * @return bool
     */
    public static function create($name, $city, $link)
    {
        $name = trim($name);
        
        if ( empty($name) ){
            $error['empty-name'] = "Введіть назву університету";
            return $error;
        }

        $city = trim($city);

        if ( empty($city) ){
            return false;
        }

        $link = trim($link);

        $db = Db::getConnection();
        $create = array();
        
        $create = $db->prepare("INSERT INTO university (name, city, link) VALUES ('{$name}', '{$city}', '{$link}')");
        $create->execute();

    }

    /**
     * @param $id integer
     * @return array
     */
    public static function getUniversityItemByID($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->prepare('SELECT * FROM university WHERE id=' . $id);
            $result->setFetchMode(\PDO::FETCH_ASSOC);
            $result->execute();
            $universitiesItem = $result->fetchAll($db::FETCH_CLASS, University::class);
            return $universitiesItem;
        }
    }

    /**
     * @param $id string
     * @return bool
     */
    public static function delete($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('DELETE FROM university WHERE id=' . $id);

            return true;
        }
    }

    /**
     * @param $id integer
     * @return bool
     */
    public static function edit($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();

            $post = array();
            $post[0] = $_POST['name'];
            $post[1] = $_POST['city'];
            $post[2] = $_POST['link'];
            $result = $db->prepare("UPDATE university SET name='$post[0]', city='$post[1]', link='$post[2]' WHERE id='$id'");
            $result->execute();
            return true;
        }
        return false;

    }
}