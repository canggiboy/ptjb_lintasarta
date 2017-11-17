<?php

include_once 'connect.php';

$response = array("error" => FALSE);

if (isset($_POST['username']) && isset($_POST['password'])) {
 
 $username = htmlspecialchars($_POST['username']);
 $password = htmlspecialchars($_POST['password']);

 $encrypted_password = password_verify($password, $hash);// encrypted password
        
 $sql = $MySQLiconn->query("SELECT * FROM user_android WHERE username='$username' AND password='$password'");

 if(mysqli_num_rows($sql) > 0){
  while($row = $sql->fetch_array()){
   $response["error"] = FALSE;
       $response["message"] = "Login Successfull";
       $response["data"]["id"] = $row['id'];
       $response["data"]["nik"] = $row['nik'];
       $response["data"]["username"] = $row['username'];
       $response["data"]["level"] = $row['level'];
      }

  echo json_encode($response);
   }else{
    $response["error"] = TRUE;
     $response["message"] = "Incorrect Email or Password!";

  echo json_encode($response);
   }
}

?>