<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'project');

$con = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

if(!$con){
    die("Sorry, connection falied due to :". mysqli_connect_error());
}
else{
    //echo "Connection is successful";
}
?>
