<?php
$date=date("Y/m/d");
echo '<br><br>'.$date.'';
$myObj->date = $date;
$myObj->city = "New York";
$myObj->value = 2.11;
$myJSON = json_encode($myObj);
echo '<br><br>'.$myJSON;
?>
