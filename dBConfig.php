<?php

define ("DB_HOST", "localhost"); // set database host

define ("DB_USER", "ritu"); // set database user

define ("DB_PASS","ritu@12"); // set database password

define ("DB_NAME","mydatabase"); // set database name



$link = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME) or die("Couldn't make connection.");

$db = mysqli_select_db($link, DB_NAME) or die("Couldn't select database");

?>