
<?php
  //If constant __CONFIG__ is not defined, do not load this file
  if(!defined('__CONFIG__')){
    exit('CFG not found');
  }
  //CFG
  error_reporting(-1);
  ini_set('display_errors','On');
  //include DB
  include_once "classes/DB.php";
  include_once "classes/Filter.php";
  $con = DB::getConnection();
