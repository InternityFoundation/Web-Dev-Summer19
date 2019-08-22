<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
//$result = mysql_query("SELECT * FROM users ORDER BY id DESC"); // mysql_query is deprecated
$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC"); // using mysqli_query instead
?>

<html>
<head>	
	<title>Homepage</title>
	 <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
	  <style>
div {
  margin-top: 20px;
  
  margin-right: 50px;
  margin-left: 50px;
  
}

</style>
</head>

<body><div>
<a href="amrit.html">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<tr bgcolor='#CCCCCC'>
		<td>Event Name</td>
		<td>Event Topic</td>
		<td>Event Image</td>
		<td>View Full Details</td>
		<td>Update</td>
	</tr>
	<?php 
	//while($res = mysql_fetch_array($result)) { // mysql_fetch_array is deprecated, we need to use mysqli_fetch_array 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['ename']."</td>";
		echo "<td>".$res['etopic']."</td>";
		echo '  
                          
                               <td>  
                                    <img src="data:fileupload/jpeg;base64,'.base64_encode($res['fileupload'] ).'" height="100" width="100" class="img-thumnail" />  
                               </td>  
                            
                     ';  
		echo "<td><a href=\"viewform.php?id=$res[id]\">View Full Details</a></td>";	
		echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> | <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table></div>
</body>
</html>
