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

        $result = $db->query('SELECT id, name, city, link FROM universities ORDER BY id ASC');

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
    
    public function create($name, $city, $link)
    {
        $db = Db::getConnection();
        $create = array();
        
        $create = $db->query("INSERT INTO universities (name, city, link) VALUES ('{$name}', '{$city}', '{$link}')");

    }
}