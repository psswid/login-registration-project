<?php
  //If constant __CONFIG__ is not defined, do not load this file
  if(!defined('__CONFIG__')){
    exit('CFG not found');
  }

  //CFG

  //include DB
  include_once "classes/DB.php";

  $con = DB::getConnection();
