<html>
<head>
	<title>Add Data</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$ename = mysqli_real_escape_string($mysqli, $_POST['ename']);
	$etopic = mysqli_real_escape_string($mysqli, $_POST['etopic']);
	$espeakers = mysqli_real_escape_string($mysqli, $_POST['espeakers']);
	$vname = mysqli_real_escape_string($mysqli, $_POST['vname']);
	$eorganizers = mysqli_real_escape_string($mysqli, $_POST['eorganizers']);
	$evolunteers = mysqli_real_escape_string($mysqli, $_POST['evolunteers']);
	$estartdateandtime = mysqli_real_escape_string($mysqli, $_POST['estartdateandtime']);
	$eenddateandtime = mysqli_real_escape_string($mysqli, $_POST['eenddateandtime']);
	$acount = mysqli_real_escape_string($mysqli, $_POST['acount']);
	$rate = mysqli_real_escape_string($mysqli, $_POST['rate']);
	$tgivername = mysqli_real_escape_string($mysqli, $_POST['tgivername']);
	$testinomial = mysqli_real_escape_string($mysqli, $_POST['testinomial']);
	$fileupload = addslashes(file_get_contents($_FILES["fileupload"]["tmp_name"]));
	
	
		//insert data to database*/	
		$result = mysqli_query($mysqli, "INSERT INTO users(ename,etopic,espeakers,vname,eorganizers,evolunteers,estartdateandtime,eenddateandtime,acount,rate,tgivername,testinomial,fileupload) VALUES('$ename','$etopic','$espeakers','$vname','$eorganizers','$evolunteers','$estartdateandtime','$eenddateandtime','$acount','$rate','$tgivername','$testinomial','$fileupload')");
		
		//display success message
		echo "<font color='green'>Data added successfully.";
		echo "<br/><a href='index1.php'>View Result</a>";
	
}
?>
</body>
</html>
