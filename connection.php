<?php

class Db {
  
    private static $instance = NULL;

    public static function getInstance() {
        if (!isset(self::$instance)) {
          $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
          $pdo_options[PDO::ATTR_DEFAULT_FETCH_MODE] = PDO::FETCH_ASSOC;
          self::$instance = new PDO('mysql:host=localhost;dbname=db_name_here', 'db_user_here', 'db_password_here', $pdo_options);
        }
        return self::$instance;
      }
}