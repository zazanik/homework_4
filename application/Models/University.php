<?php

namespace zazanik\hw\Models;
use zazanik\hw\components\Db;

class University
{
    public $id;
    public $name;
    public $city;
    public $link;

    /**
     * Returns an array of university items
     */
    public static function getList() 
    {
        $db = Db::getConnection();
        $sth = $db->prepare('SELECT id, name, city, link FROM university ORDER BY id ASC');
        $sth->execute();
        $universityList = $sth->fetchAll($db::FETCH_CLASS, University::class);
        return $universityList;
    }
    
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

    public static function delete($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('DELETE FROM university WHERE id=' . $id);

            return true;
        }
    }
    
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
        }
    }
}