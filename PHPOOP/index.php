<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"> 
<title> OOP PHP </title>
<?php include("class_lib.php"); ?>
</head>
<body>
<?php 
	$stefn = new person("stf2");
	$jimmy = new person("jimmy");

	//$stefn->set_name();
	//$jimmy->set_name();

	echo "name 1: " . $stefn->get_name();
	echo "name 2: " . $jimmy->get_name();
?>
</body>
</html>
