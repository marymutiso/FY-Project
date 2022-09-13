<?php
if(defined('DB_SERVER')){
    $db = mysqli_connect('localhost','root','','db_salon');
}else{
    define('DB_SERVER', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_DATABASE', 'db_salon');
    $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
}


?>