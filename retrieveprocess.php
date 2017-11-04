<html>
<head>

<script type="text/javascript" src="test.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<link rel="stylesheet" type="text/css" href="navigation.css">

<title>Retrieve</title>    
</head>
<body>

<img id="preload" onload="fadeIn(this)" src="logo.png" style="position:relative;" />
<b style="color: white; font-size:35px; position: absolute; margin-left: 5px;">Bharat Heavy Electricals Limited</b>
<b style="color: white; font-size:15px; position: absolute; margin-left: 5px; margin-top: 45px;: ">www.bhel.com</b>

<ul>
  <li><a class="active" href="task.html">Home</a></li>
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

$sql="UPDATE ASSET_MASTER SET EMPLOYEE_ID= NULL, DEPARTMENT= NULL, DATE_OF_ISSUE=NULL, REMARK=NULL WHERE ASSET_ID='".$_POST['select1']."'"; 


if ($conn->query($sql) === TRUE){
	echo "Asset Retrieved Successfully.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
<br><br><br>
<a href="retrieve.php"><input type="button" value="New Retrieve"></a>
<a href="task.html"><input type="button" value="Main Page"></a>
</body>
</html>