<?php
$db_host = "us-cdbr-east-05.cleardb.net";
$db_user =  "bb51f1b46e281b";
$db_pass =  "acccf375";
$db_name =  " heroku_bc7b5a7cff19790"

$connect = mysqli_connect ($db_host, $db_user, $db_pass, $db_name) or die ("database connection error");