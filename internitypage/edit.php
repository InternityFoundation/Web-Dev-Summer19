<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['update']))
{	

	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	
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
	// checking empty fields
	
		//updating the table
		$result = mysqli_query($mysqli, "UPDATE users SET ename='$ename',etopic='$etopic',espeakers='$espeakers',vname='$vname',eorganizers='$eorganizers',evolunteers='$evolunteers',estartdateandtime='$estartdateandtime',eenddateandtime='$eenddateandtime',acount='$acount',rate='$rate',tgivername='$tgivername',testinomial='$testinomial',fileupload='$fileupload' WHERE id=$id");
		
		//redirectig to the display page. In our case, it is index.php
		header("index1.php");
	
}
?>
<?php
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
	$fileupload= $res['fileupload'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
   <link rel="stylesheet" type="text/css" href="bootstrap-4.3.1-dist/css/bootstrap.min.css">
    <style>
div {
  margin-top: 20px;
  
  margin-right: 50px;
  margin-left: 50px;
  
}
input[type=text], select, textarea {
  width: 90%;
  padding: 12px 20px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 10px;
  margin-bottom: 16px; 
  margin-left: 14px;
  resize: vertical;
  transition: width 0.4s ease-in-out;
}
</style>
</head>

<body><div>
	<a href="index1.php">Home</a>
	<br/><br/>

<form action="edit.php" name="form1" enctype="multipart/form-data" method="post">
<fieldset>
    <legend><b>Event Information:</b></legend><br>
    
  Event Name:<br>
 <input type="text" name="ename" value="<?php echo $ename;?>">
  <br><br>
  Event Topic:<br>
 <input type="text" name="etopic" value="<?php echo $etopic;?>">
  <br><br>
   Event Speakers:<br>
 <input type="text" name="espeakers" value="<?php echo $espeakers;?>">
  <br><br>
  Venue Name:<br>
 <input type="text" name="vname" value="<?php echo $vname;?>">
  <br> <br>
  Event Organizers:<br>
 <input type="text" name="eorganizers" value="<?php echo $eorganizers;?>">
  <br><br>
  Event Volunteers:<br>
 <input type="text" name="evolunteers" value="<?php echo $evolunteers;?>">
  <br> <br>
  Event Start Date and Time:<br>
 <input type="text" name="estartdateandtime" value="<?php echo $estartdateandtime;?>">
  <br><br>
  Event End Date and Time:<br>
 <input type="text" name="eenddateandtime" value="<?php echo $eenddateandtime;?>">
  <br><br>
  </fieldset>
  
 
<br>


<fieldset>
    <legend><b>Feedback Section:</b></legend><br>
  Audience Count:<br>
 <input type="text" name="acount" value="<?php echo $acount;?>">
  <br><br>
  FeedBack in No like 5 stars–30, 4 stars–22, 3 stars-16, 2 stars-10 1 star-6:<br><br>
 <div class="rate">
        <input type="radio" id="star5" name="rate" value="<?php echo $rate;?>" /><label for="star5" title="star5">5 stars</label>
        <input type="radio" id="star4" name="rate" value="<?php echo $rate;?>" /><label for="star4" title="star4">4 stars</label>
        <input type="radio" id="star3" name="rate" value="<?php echo $rate;?>" /><label for="star3" title="star3">3 stars</label>
        <input type="radio" id="star2" name="rate" value="<?php echo $rate;?>" /><label for="star2" title="star2">2 stars</label>
        <input type="radio" id="star1" name="rate" value="<?php echo $rate;?>" /><label for="star1" title="star1">1 star</label>
    </div>
  <br><br><br>
  <input type="checkbox" id="myCheck" onChange="myFunction()">&nbsp Click here to enable Testinomial Section<br><br>
   Testimonial Giver Name:<br>
 <input type="text" name="tgivername" value="<?php echo $tgivername;?>" class="child1" disabled>
  <br><br>
  Testinomial:<br><textarea input type="text" name="testinomial" value="<?php echo $testinomial;?>" class="child1" disabled>
 </textarea>
  <br> <br>
  
  </fieldset>
  <br>
  <fieldset>
    <legend><b>Upload Gallery:</b></legend><br>
  <input type="file" id="fileElem" multiple accept="image/*" name="fileupload" value="<?php echo '<img src="data:fileupload/jpeg;base64,'.base64_encode($res['fileupload'] ).'" height="200" width="200" class="img-thumnail" />  
                              
                            
                     ';?>
    <br>
 </fieldset>
 <input type="hidden" name="id" value=<?php echo isset($_GET['id']) ? $_GET['id'] : '';?>><br>
		<input type="submit" name="update" value="Update">
</form> 
<br>
<script>
function myFunction() {

  var elements = document.getElementsByClassName("child1");
  var el = document.getElementById("myCheck");

  for (var i = 0; i < elements.length; i++) {
    if (el.checked) {
      elements[i].disabled = false;
    } else {
      elements[i].disabled = true;
    }
  }
}
</script>
</div>
</body>
</html>
