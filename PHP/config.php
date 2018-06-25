<?php
define('DB_SERVER', 'us-cdbr-iron-east-04.cleardb.net');
define('DB_USERNAME', 'b9fdd61686eabb');
define('DB_PASSWORD', '536c2c77');
define('DB_NAME', 'heroku_281864c389c4011');

/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

//if($link == true){
  //  print("Success!");
//}
?>
