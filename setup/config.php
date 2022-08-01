<?php
/* Put MySQL database login info here */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'revtube');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Error if connection failed
if($link === false){
    die("Fatal Error: RevTube has encountered a SQL error. Please contact us on Twitter @RevTube_" . mysqli_connect_error());
}
?>