<?php
include('header.php');
include('session.php');
$id=$_GET['del'];
$result = mysql_query("DELETE FROM marks1 where usn='$id'");
header("location: students1.php");
?>