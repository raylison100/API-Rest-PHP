<?php
/**
 * Created by PhpStorm.
 * User: raylison100
 * Date: 26/10/18
 * Time: 10:33
 */
require_once 'config.php';

class Conexao
{
    private static $instance;
    public static function getInstance(){
        if(!isset(self::$instance)){
            try {
                    self::$instance = new PDO('mysql:host=127.0.0.1;port=3306;dbname=API-REST;charset=utf8','root','99291072');
                self::$instance->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                self::$instance->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            } catch (PDOException $e) {
                echo $e->getMessage();
            }
        }
        return self::$instance;
    }

    public static function prepare($sql){
        return self::getInstance()->prepare($sql);
    }
}