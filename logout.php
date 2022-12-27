<?php
require 'configur/constants.php';

//destroy session and redirect user to home page

session_destroy();
header('location: '. ROOT_URL );
die();