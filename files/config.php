<?php
   define('DB_SERVER', 'mysql1.cs.clemson.edu');
   define('DB_USERNAME', 'jwk');
   define('DB_PASSWORD', 'cpsc!4140');
   define('DB_DATABASE', 'TwitchDoesTownHall');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>