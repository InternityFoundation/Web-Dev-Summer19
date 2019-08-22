<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = isset($_GET['id']) ? $_GET['id'] : '';

//deleting the row from table
$result = mysqli_query($mysqli, "DELETE FROM users where id='$id'") or die("Error: " . mysqli_error($mysqli));

//redirecting to the display page (index.php in our case)
header("location:index1.php");
?>