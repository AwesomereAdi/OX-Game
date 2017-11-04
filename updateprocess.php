<html>
<head>

<script type="text/javascript" src="test.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<link rel="stylesheet" type="text/css" href="navigation.css">

<title>Update</title>  
</head>
<body>

<img id="preload" onload="fadeIn(this)" src="logo.png" style="position:relative;" />
<b style="color: white; font-size:35px; position: absolute; margin-left: 5px;">Bharat Heavy Electricals Limited</b>
<b style="color: white; font-size:15px; position: absolute; margin-left: 5px; margin-top: 45px;: ">www.bhel.com</b>

<ul>
  <li><a class="active" href="#">Home</a></li>
  <li><a href="http://www.bhel.com/press_release/press.php">News</a></li>
  <li><a href="http://www.bhel.com/qms/qcat_display.php">Contact</a></li>
  <li><a href="http://www.bhel.com/about.php">About</a></li>
  <li><a href="index.html">Logout</a></li>
</ul>

<div id="main_area">
<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "";
       $dbname="BHEL";

       $conn = new mysqli ($servername , $username , $password, $dbname);
       if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
  

$ASSET_ID=$_POST['ASSET_ID'];
$ASSET_TYPE=$_POST['ASSET_TYPE'];
$MAKE=$_POST['MAKE'];
$MODEL=$_POST['MODEL'];
$INSTALLATION_DATE=$_POST['INSTALLATION_DATE'];
$WARRANTY=$_POST['WARRANTY'];
$RC=$_POST['RC'];
$RENTAL_AMOUNT=$_POST['QUARTERLY_RENTAL_AMOUNT'];
$SERIAL_NO=$_POST['SERIAL_NO'];
$LOCAL_ID=$_POST['LOCAL_ID'];
$IP_ADDRESS=$_POST['IP_ADDRESS'];
 
//Execute the query
 
$sql="INSERT INTO IT_ASSETS(ASSET_ID,ASSET_TYPE,MAKE,MODEL,INSTALLATION_DATE,WARRANTY,RC,QUARTERLY_RENTAL_AMOUNT,SERIAL_NO,LOCAL_ID,IP_ADDRESS)VALUES('$ASSET_ID','$ASSET_TYPE','$MAKE','$MODEL','$INSTALLATION_DATE','$WARRANTY','$RC','$RENTAL_AMOUNT','$SERIAL_NO','$LOCAL_ID','$IP_ADDRESS')"; 

$sql1="INSERT INTO ASSET_MASTER(ASSET_ID)VALUES('$ASSET_ID')"; 


if ($conn->query($sql) === TRUE){
	$conn->query($sql1);
	echo "New Record Added Successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br><br><br>
<a href="update.php"><input type="button" value="Add New Record"></a>
<a href="task.html"><input type="button" value="Main Page"></a>

</div>
</body>
</html>
