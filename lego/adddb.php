<?php
 $connection = mysql_connect('localhost','root','Kushal@123');
mysql_select_db('hero');

$sno =      $_POST ['Book_Number'];
$Book_Title =       $_POST ['Book_Title'];
$Book_Description=  $_POST['Book_Description'];
$Author =           $_POST ['Author'];
$Publisher  =       $_POST['Publisher'];
$Year_Published =   $_POST['Year_Published'];


$query = 
"INSERT INTO student
(Book_Number,Book_Title)

values

('$sno','$sname')";

$result = mysql_query($query);
Echo "Database Saved"; 
mysql_close($connection);
?>