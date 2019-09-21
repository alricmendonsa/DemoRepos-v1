<?php
$db_name = "ldsandroidapp";
$mysql_username = "root";
$mysql_password = "root@123";
$server_name = "localhost";
$conn =  mysqli_connect($server_name, $mysql_username, $mysql_password, $db_name);
if ($conn) {
    echo "Connection successfull";
}
else {
    echo "Connection unsuccessfull";
}

?>