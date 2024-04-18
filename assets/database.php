<?php

function connectionDB()  {

$db_host = "localhost";
$db_user = "Bohumil_Krucky";
$db_password = "Jirinka123";
$db_name = "recnze-moje-skoda";

$connection = mysqli_connect($db_host, $db_user, $db_password, $db_name);
 if (mysqli_connect_error()) {echo mysqli_connect_error();
exit;}

return $connection;
}