<?php
require 'vars.php';

if(!isset($_SERVER['PHP_AUTH_USER']) || !isset($_SERVER['PHP_AUTH_PW']) || 
   $_SERVER['PHP_AUTH_USER'] != $user || $_SERVER['PHP_AUTH_PW'] != $pass) {
    header('WWW-Authenticate: Basic realm="Availability Manager"');
    header('HTTP/1.0 401 Unauthorized');
    echo 'You are not authorized to view this page.';
    exit;
}

if(isset($_POST['submit'])) {
    foreach($hours as $hour) {
        foreach($minutes as $min) {
            foreach($days as $day) {
                $slot = "$day-$hour-$min";
                $avail = $mysqli->real_escape_string($_POST[$slot]);
                $mysqli->query("update avail set avail='$avail' where timeslot='$slot'");
            }
        }
    }    
}

$result = $mysqli->query("select * from avail");
while ($row = $result->fetch_object()) {
	$timeslots[$row->timeslot] = $row->avail;
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">
<script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
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
<form name="availability" action="edit.php" method="post">
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
<input type="submit" name='submit' value="Save">
</form>
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