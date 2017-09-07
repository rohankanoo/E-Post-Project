<?php
$connect = mysql_connect("localhost", "root", "") or die(mysql_error());
mysql_select_db("e_post") or die(mysql_error());

// create a variable
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
$name=$_POST['person_name'];
$phone=$_POST['person_phone'];
$address=$_POST['address'];
$city=$_POST['city'];

//Execute the query
$query = "INSERT INTO `e_post`.`registration` (`username`, `password`, `email`, `name`, `phone`, `address`, `city`) VALUES ('$username', '$password', '$email', '$name', '$phone', '$address', '$city');";
mysql_query($query);
?>