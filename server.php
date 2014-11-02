<?php
$number = $_POST["number"];
$carrier = $_POST["carrier"];
$hour = $_POST["hour"]; 
$minute = $_POST["minute"];

$time = $hour * 60 + $minute;

$to  = "$number@$carrier";
$subject = 'REMINDER';
$message = $_POST["message"];
$from = "__from__";

shell_exec("echo \"echo '$message' | mail -s '$subject' -r '$from' '$to'\" | at -q s now + $time minutes");
?>
