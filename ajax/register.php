<?php
  //allow the config
  define('__CONFIG__', true);
  //Req config
  require_once "../includes/config.php";

  if($_SERVER['REQUEST_METHOD'] == 'POST'){
    //Always return JSON format
    header('Content-Type: application/json');

    $return = [];

    //Make sure user does not exist.

    //Make sure user can be added and is added

    //Return the proper information back to JS to redirect user
    $return['redirect'] = '/dashboard.php';

    $return['name'] = 'me';

    echo json_encode($return, JSON_PRETTY_PRINT); exit;
  }else{
    //Die. Kill script, redirect user.
    exit('test');
  }






?>
