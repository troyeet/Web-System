<?php

@include 'connection.php';

session_start();
session_unset();
session_destroy();

header('location: /projects/PROJECT101/login.php');

?>