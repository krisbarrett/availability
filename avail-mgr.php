<?php
$days = array('sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat');
$hours = array('12','1','2','3','4','5','6','7');
$minutes = array('00','30');
$user = 'avail_user';
$pass = 'avail_pass';
$mysqli_host = 'localhost';
$mysqli_user = 'avail_user';
$mysqli_pass = 'avail_pass';
$mysqli_db = 'avail';

if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || 
   $_SERVER['PHP_AUTH_USER'] != $user || $_SERVER['PHP_AUTH_PW'] != $pass) {
    header('WWW-Authenticate: Basic realm="Availability Manager"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You are not authorized to view this page.';
    exit;
}

$mysqli = new mysqli($mysqli_host,$mysqli_user,$mysqli_pass,$mysqli_db);

if(isset($_POST['submit'])) {
    foreach($hours as $hour) {
        foreach($minutes as $min) {
            foreach($days as $day) {
                $slot = "$day-$hour-$min";
                $mysqli->query("update avail set avail='$_POST[$slot]' where timeslot='$slot'");
            }
        }
    }    
}

$result = $mysqli->query("select * from avail");

$timeslots = array();

while ($row = $result->fetch_object()) {
	/* echo "$row->id: $row->timeslot: $row->avail\n"; */
	$timeslots[$row->timeslot] = $row->avail;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="avail-style.css">
<script type="text/javascript" src="jquery-1.6.1.min.js"></script>
<script type="text/javascript">
$(document).ready(function(){
  $("td").click(function(){
    if($(this).hasClass("avail")) {
        $(this).removeClass("avail");
        $(this).addClass("unavail");
        $(this).find("input").val("unavail");
        
    }
    else if($(this).hasClass("unavail")) {
        $(this).removeClass("unavail");
        $(this).addClass("avail");
        $(this).find("input").val("avail");
    }
  });
});
</script>
<title>Availability Manager</title>
</head>
<body>
<div class="wrapper">
<h1>Availability Manager</h1>
<table>
<tr>
<td></td>
<?php
foreach($days as $day) {
    echo "<th>" . ucfirst($day) . "</th>";
}
?>
</tr>
<form name="availability" action="avail-mgr.php" method="post">
<?php
foreach($hours as $hour) {
    foreach($minutes as $min) {
        echo "<tr><td>$hour:$min</td>";
        foreach($days as $day) {
            $slot = "$day-$hour-$min";
            echo "<td class=\"$timeslots[$slot]\"><input type=\"hidden\" name=\"$slot\" value=\"$timeslots[$slot]\"></td>";
        }
        echo "</tr>";
    }
}
?>
</table>
<br>
<table>
<tr>
<td>Available</td><td class="avail"></td>
</tr>
<tr>
<td>Unavailable</td><td class="unavail"></td>
</tr>
</table>
<br>
<input type="submit" name='submit' value="Save">
</form>
</div>
</body>
</html>