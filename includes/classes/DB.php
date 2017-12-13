<?php
//If constant __CONFIG__ is not defined, do not load this file
if(!defined('__CONFIG__')){
  exit('CFG not found');
}

class DB {
  protected static $con;

  private function __construct(){

    try{

      self::$con = new PDO('mysql:charset=utf8mb4;host=localhost;port=3306;dbname=login_course', 'admin', 'admin' );
      self::$con->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
      self::$con->setAttribute( PDO::ATTR_PERSISTENT, false );

    } catch (PDOException $e) {
      echo "could not connect to database. \r\n";
      exit;
    }

  }

  public static function getConnection(){
    //If this instance was not been started, start it.
    if (!self::$con){
      new DB();
    }

    //Return the writeable db connection_aborted
    return self::$con;
  }
}

?>
