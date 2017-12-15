<?php
  //allow the config
  define('__CONFIG__', true);
  //Req config
  require_once "../includes/config.php";
  if($_SERVER['REQUEST_METHOD'] == 'POST' or 1==1){
    //Always return JSON format
    //header('Content-Type: application/json');
    $return = [];
    //Make sure user does not exist.
		$email = Filter::String( $_POST['email'] );
		$findUser = $con->prepare("SELECT user_id FROM users WHERE email = LOWER(:email) LIMIT 1");  //Tu się z $findUser cos wali
		$findUser->bindParam(':email', $email, PDO::PARAM_STR);
		$findUser->execute();

		if($findUser->rowCount() == 1){
			//User exist
			$return['error'] = 'you have acc';
			$return['is_logged_in'] = false;
		} else {
			//add unexisting user

			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

			$addUser = $con->prepare("INSERT INTO users(email, password) VALUES(LOWER(:email), :password)");
			$addUser->bindParam(':email', $email, PDO::PARAM_STR);
			$addUser->bindParam(':password', $password, PDO::PARAM_STR);
			$addUser->execute();

			$user_id = $con->lastInsertId();

			$_SESSION['user_id'] = (int) $user_id;
			$return['redirect'] = '/dashboard.php?message=welcome';

		}
    //Make sure user can be added and is added
    //Return the proper information back to JS to redirect user

    $return['name'] = 'me';
    echo json_encode($return, JSON_PRETTY_PRINT); exit;
  }else{
    //Die. Kill script, redirect user.
    exit('test');
  }
?>
