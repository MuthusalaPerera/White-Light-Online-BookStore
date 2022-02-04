<?php

function _404(){
  die('404 page not found !');
}

function redirect($url, $isFull = FALSE){
  if (!$isFull) {
    header("Location: " . PROOT . '/' . $url . '.php');
    exit;
  }else{
    header("Location: " . $url );
    exit;
  }

}


function addUser(){
  global $conn;
  $fname = mysqli_real_escape_string($conn, $_POST['fname']);
  $lname = mysqli_real_escape_string($conn, $_POST['lname']);
  $country = $_POST['country'];
  $gender = $_POST['gender'];
  $bod = mysqli_real_escape_string($conn, $_POST['bod']);
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $username = mysqli_real_escape_string($conn, $_POST['username']);

  $password =  $_POST['password'];
  $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

  $sql = "INSERT INTO users (fname, lname, email, country, gender, bod, username, password) ";
  $sql .= " VALUES ('{$fname}', '{$lname}', '{$email}', '{$country}', '{$gender}', '{$bod}', '{$username}' , '{$hashed_pass}')";

  if (!mysqli_query($conn, $sql)) {
    die("Error: " . mysqli_error($conn));
  }else{
    return mysqli_insert_id($conn);
  }

return false;

}


function hasAccess(){
  if (!isset($_SESSION['logged'])) {
    redirect('login');
  }
}

function findUser($username){
  global $conn;
  $sql = "SELECT * FROM users WHERE username = '{$username}' LIMIT 1";
  $result = mysqli_query($conn, $sql);
  if ($result) {
    if (mysqli_num_rows($result) > 0) {
       return mysqli_fetch_assoc($result);
    }
  }
  return false;
}


function isLogged(){
  if (isset($_SESSION['logged'])) {
    return TRUE;
  }
  return FALSE;
}



function dnd($data){
  echo '<pre>';
  print_r($data);
  echo '</pre>';
  die();
}



 ?>
