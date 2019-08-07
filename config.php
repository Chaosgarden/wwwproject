<?php	
//database info

define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'root');
define('DB_DATABASE', 'moviegalery');

function connect() {
	
    $connect = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);

    if(mysqli_connect_errno($connect)) die('Failed to connect: ' . mysqli_connect_error());
    mysqli_set_charset($connect, 'utf8');

    return $connect;
}
$conn = connect();

?>
