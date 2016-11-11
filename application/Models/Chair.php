<?php

namespace zazanik\hw\Models;
use zazanik\hw\components\Db;

class Chair
{
    public $id;
    public $name;

    public static function getChairList()
    {
        $db = Db::getConnection();
        $chairList = array();
        $result = $db->prepare('SELECT id, name FROM chair ORDER BY id ASC');
        $result->execute();
        $chairList = $result->fetchAll($db::FETCH_CLASS, Chair::class);
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
        $create = $db->prepare("INSERT INTO chair (name) VALUES ('{$name}')");
        $create->execute();
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