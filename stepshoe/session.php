<?php
include('dbconnection.php');
session_start();
if(empty($_SESSION['login_user'])){
    $_SESSION['login_user']="";
}
$user_check=$_SESSION['login_user'];
$userCol = $db->Users;
$row = $userCol->findOne(['username' => $user_check]);
if (empty($row)){
    $login_session = "";
    $login_userid = "";
}
else{
    $login_session = $row['username'];
}

?>