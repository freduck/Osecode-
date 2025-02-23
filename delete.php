<?php

$nconn= new mysqli("localhost","detsconl_projectdb","detsconl_projectdb","detsconl_projectdb");
if(isset ($_GET['id'])){

$id=$_GET['id'];
$table=$_GET['table'];

$d=$nconn->query(" DELETE FROM $table WHERE id=$id");
if($d){

header ("location: dashboard.php?url=tables");
}
}