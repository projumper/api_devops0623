<?php

error_reporting(0);

$username= $_GET['username'];
$password = $_GET['password'];

if (!isset($username))  die(json_encode("01"));
if (!isset($password))  die(json_encode("02"));


//TODO
//$sql = "select * from user where username=$usernaem and password=$password";
//$mysql = mysqli();
//$res = $mysqli->query($sql);

if(true){
      echo json_encode("OK");
}
else {
    echo json_encode("Error");
}
