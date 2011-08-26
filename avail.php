<?php
$days = array('sun', 'mon', 'tue', 'wed', 'thu', 'fri', 'sat');
$hours = array('12','1','2','3','4','5','6','7');
$minutes = array('00','30');
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
<title>Availability</title>
</head>
<body>
<div class="wrapper">
<h1>Availability</h1>
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
            echo "<td class=\"unavail\"><input type=\"hidden\" name=\"$day-$hour-$min\" value=\"unavail\"></td>";
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
</div>
</body>
</html>