<?php
// including the database connection file
include_once("config.php");
//getting id from url
$id = isset($_GET['id']) ? $_GET['id'] : '';
//selecting data associated with this particular id
//$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id");
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id=$id") or die("Error: " . mysqli_error($mysqli));
while($res = mysqli_fetch_array($result))
{
  $ename= $res['ename'];
  $etopic= $res['etopic'];
  $espeakers= $res['espeakers'];
  $vname= $res['vname'];
  $eorganizers= $res['eorganizers'];
  $evolunteers= $res['evolunteers'];
  $estartdateandtime= $res['estartdateandtime'];
  $eenddateandtime= $res['eenddateandtime'];
  $acount= $res['acount'];
  $rate= $res['rate'];
  $tgivername= $res['tgivername'];
  $testinomial= $res['testinomial'];
  $fileupload= $res['fileupload'] ;
}
?>
<html>
<head>  
  <title>View Data</title>
   <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
   <style>
div {
  margin-top: 10px;
  margin-bottom: 100px;
  margin-right: 150px;
  margin-left: 80px;  
}

</style>
</head>

<body><br><div>
  <a href="index1.php">Home</a>
  <br/><br/>


    <b><h3>Event Information:</h3></b><br>
  <b>Event Name:</b> <?php echo $ename;?>
  <br><br>
  <b>Event Topic: </b><?php echo $etopic;?>
  <br><br>
   <b>Event Speakers:</b> <?php echo $espeakers;?>
  <br><br>
  <b>Venue Name:</b> <?php echo $vname;?>
  <br> <br>
  <b>Event Organizers:</b> <?php echo $eorganizers;?>
  <br><br>
  <b>Event Volunteers:</b> <?php echo $evolunteers;?>
  <br> <br>
  <b>Event Start Date and Time:</b> <?php echo $estartdateandtime;?>
  <br><br>
  <b>Event End Date and Time:</b> <?php echo $eenddateandtime;?>
  <br><br>
 <b><h3>Feedback Section:</h3></b><br>
  <b>Audience Count:</b> <?php echo $acount;?>
  <br><br>
  <b>Feedback in numbers:</b><?php echo $rate;?>
  <br><br>
  
   <b>Testimonial Giver Name:</b> <?php echo $tgivername;?>
  <br><br>
  <b>Testinomial:</b><?php echo $testinomial;?>
  <br> <br>
  
 <b><h3>Gallery:</h3></b><br> <?php echo '  
                          
                              
  <img src="data:fileupload/jpeg;base64,'.base64_encode($fileupload ).'" height="200" width="200" class="img-thumnail" /> ';  ?>
    <br> 
<br>
</div>
</body>
</html>