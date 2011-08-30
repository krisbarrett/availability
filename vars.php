<?php
$user = 'avail_user';
$pass = 'avail_pass';
$mysqli_host = 'localhost';
$mysqli_user = 'avail_user';
$mysqli_pass = 'avail_pass';
$mysqli_db = 'avail';

$days = array('sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat');
$hours = array('12','1','2','3','4','5','6','7');
$minutes = array('00','30');

$mysqli = new mysqli($mysqli_host,$mysqli_user,$mysqli_pass,$mysqli_db);

$timeslots = array();
?>