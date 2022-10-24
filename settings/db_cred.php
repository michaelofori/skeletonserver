<?php
//Database credentials
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'us-cdbr-east-06.cleardb.net');
define('DB_USERNAME', 'b5880261eaf58f');
define('DB_PASSWORD', '7039c06d');
define('DB_NAME', 'heroku_be8205cf6fda2b0');
 
/* Attempt to connect to MySQL database */

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
mysqli_set_charset ($conn,"utf8");
// Check connection
if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>


<!-- mysql://b5880261eaf58f:7039c06d@us-cdbr-east-06.cleardb.net/heroku_be8205cf6fda2b0?reconnect=true -->