<?php
$fname 		= trim($_POST['fname']); // trim remove white space
$lname 		= trim($_POST['lname']);
$email 		= trim($_POST['email']);
$phone 		= trim($_POST['phone']);
$birth 		= $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];
$gender 	= $_POST['gender'];

//header("Location: index.php");
//exit();
?>