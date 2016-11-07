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

    public static function getChairItemByID($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('SELECT * FROM chair WHERE id=' . $id);
            $result->setFetchMode(\PDO::FETCH_ASSOC);
            $resultItem = $result->fetch();
            return $resultItem;
        }
    }

    public static function delete($id)
    {
        $id = intval($id);
        if ($id) {
            $db = Db::getConnection();
            $result = $db->query('DELETE FROM chair WHERE id=' . $id);

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
            $result = $db->query("UPDATE chair SET name='$post[0]' WHERE id='$id'");
        }
    }
}