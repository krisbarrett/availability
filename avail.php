<?php
$days = array('sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat');
$hours = array('12','1','2','3','4','5','6','7');
$minutes = array('00','30');

$mysqli_host = 'localhost';
$mysqli_user = 'avail_user';
$mysqli_pass = 'avail_pass';
$mysqli_db = 'avail';

$mysqli = new mysqli($mysqli_host,$mysqli_user,$mysqli_pass,$mysqli_db);
$result = $mysqli->query("select * from avail");

$timeslots = array();

while ($row = $result->fetch_object()) {
	$timeslots[$row->timeslot] = $row->avail;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="avail-style.css">
<title>Availability</title>
</head>
<body>
<div class="wrapper">
<h1>Availability</h1>
<div class="matrix">
<table>
<tr>
<td></td>
<?php
foreach($days as $day) {
    echo "<th>" . ucfirst($day) . "</th>";
}
?>
</tr>
<?php
foreach($hours as $hour) {
    foreach($minutes as $min) {
        echo "<tr><td>$hour:$min</td>";
        foreach($days as $day) {
            $slot = "$day-$hour-$min";
            echo "<td class=\"$timeslots[$slot]\"></td>";
        }
        echo "</tr>";
    }
}
?>
</table>
</div>
<div class="key">
<table>
<tr>
<td>Available</td><td class="key1"></td>
</tr>
<tr>
<td>Unavailable</td><td class="key2"></td>
</tr>
</table>
</div>
</div>
</body>
</html>