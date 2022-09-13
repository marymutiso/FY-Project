<?php
include('connection.php');
session_start();
$user_check=$_SESSION['username'];
$client_sql = mysqli_query($db,"SELECT username FROM myclientinfo WHERE username='$user_check' ");

$worker_sql = mysqli_query($db,"SELECT username FROM myworkersinfo WHERE username='$user_check' ");

if(mysqli_num_rows($client_sql) > 0){
    $row = mysqli_fetch_array($client_sql);

    $login_user=$row['username'];

}else if (mysqli_num_rows($worker_sql) > 0){
    $row = mysqli_fetch_array($worker_sql);

    $login_user=$row['username'];
}else{
    if(!isset($user_check))
    {
        header("Location: index.php");
    }
}
?>