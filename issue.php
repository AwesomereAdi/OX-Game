<html>
<head>

<script type="text/javascript" src="test.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<link rel="stylesheet" type="text/css" href="navigation.css">
<link rel="stylesheet" type="text/css" href="form.css">

<title>Issue</title>    
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
</div><br><br>
<?php  
       $servername = "localhost";  
       $username = "root";  
       $password = "";
       $dbname="BHEL";

       $conn = new mysqli ($servername , $username , $password, $dbname);
       if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$query="SELECT ASSET_ID
FROM ASSET_MASTER
WHERE DATE_OF_ISSUE IS NULL";
$result1= mysqli_query($conn,$query);
?>

<form name="form5" action="issueprocess.php" method="post">

<label>Choose The Serial No: &nbsp;</label><br>
	<select name="select1">
	<? while ($row=mysqli_fetch_array($result1)):;?>
	<option><? echo $row[0]; ?></option>
	<? endwhile; ?>		
	</select>
  
  <br><br>

<label>Enter The Employee ID:</label><br>
<input type="text" name="eid" id="eid" /><br><br>

<label>Enter The Department:</label><br>
<input type="text" name="dname" id="dname" /><br><br>

<label>Select The Date :</label><br>
<input type="Date" name="idate" id="idate" /><br><br>

<label>Remark If Any:</label><br>
<input type="text" name="remark" id="remark" /><br><br>

<input type="submit" value="Issue" name="submit5">
<a href="task.html"><input type="button" value="Cancel"></a>
</form>