<?php
//connect to the tadabase
require 'configur/constants.php';

$connection = new mysqli(DB_HOST,DB_USER,DB_PASS,DB_NAME);

if (mysqli_errno($connection)){
    die(mysqli_errnor($connection));
}