<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'box648.bluehost.com');
define('DB_USERNAME', 'jcubitgr_icteat');
define('DB_PASSWORD', '123zxc');
define('DB_NAME', 'jcubitgr_eat');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(box648.bluehost.com, jcubitgr_icteat, 123zxc, jcubitgr_eat);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>