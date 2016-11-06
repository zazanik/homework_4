<?php

namespace zazanik\hw\Models;
use zazanik\hw\components\Db;

class Chair
{
    public static function getChairList()
    {
        $db = Db::getConnection();
        $chairList = array();
        $result = $db->query('SELECT id, name FROM chair ORDER BY id ASC');
        $i = 0;
        while($row = $result->fetch()) {
            $chairList[$i]['id'] = $row['id'];
            $chairList[$i]['name'] = $row['name'];
            $i++;
        }

        return $chairList;
    }

    public static function create($name)
    {
        $name = trim($name);

        if ( empty($name) ){
            $error['empty-name'] = "Введіть назву університету";
            return $error;
        }
        
        $db = Db::getConnection();
        $create = array();
        $create = $db->query("INSERT INTO chair (name) VALUES ('{$name}')");
    }
}