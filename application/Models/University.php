<?php

namespace zazanik\hw\Models;
use zazanik\hw\components\Db;

class University
{
    /**
     * Returns an array of news items
     */
    public static function getList() {

        $db = Db::getConnection();
        $universitiesList = array();

        $result = $db->query('SELECT id, name, city, link FROM university ORDER BY id ASC');

        $i = 0;
        while($row = $result->fetch()) {
            $universitiesList[$i]['id'] = $row['id'];
            $universitiesList[$i]['name'] = $row['name'];
            $universitiesList[$i]['city'] = $row['city'];
            $universitiesList[$i]['link'] = $row['link'];
            $i++;
        }

        return $universitiesList;

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
        
        $create = $db->query("INSERT INTO university (name, city, link) VALUES ('{$name}', '{$city}', '{$link}')");

    }

    public static function getNewsItemByID($id)
    {
        $id = intval($id);

        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM university WHERE id=' . $id);
            $result->setFetchMode(\PDO::FETCH_ASSOC);
            $universitiesItem = $result->fetch();
            return $universitiesItem;
        }

    }
}