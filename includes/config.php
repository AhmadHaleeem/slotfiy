<?php

ob_start(); // output buffering
session_start();

$timezone = date_default_timezone_set('Europe/Berlin');

$con = mysqli_connect('localhost', 'root', '123123', 'slotify');

if (mysqli_connect_errno()) {
    echo 'Failed to connect ' . mysqli_connect_error();
}