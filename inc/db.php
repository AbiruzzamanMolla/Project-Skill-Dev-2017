<?php
ob_start();

$db['db_host'] = "localhost";
$db['db_user'] = "root";
$db['db_pass'] = "";
$db['db_name'] = "project2017";

foreach($db as $key => $value){
    define(strtoupper($key),$value);
}

$connection = mysqli_connect(DB_HOST,DB_USER,DB_PASS) or die(mysqli_error());
mysqli_select_db($connection, DB_NAME);
mysqli_query($connection,'SET CHARACTER SET utf8'); 
mysqli_query($connection,"SET SESSION collation_connection ='utf8_general_ci'");

?>
