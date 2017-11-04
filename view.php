<html>
<head>

<script type="text/javascript" src="test.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<link rel="stylesheet" type="text/css" href="navigation.css">

<title>View Stock</title>    
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
<table border="1" bgcolor=white cellspacing="1"><tr>
        <th>ASSET ID</th>
        <th>ASSET TYPE</th>
        <th>MAKE</th>
        <th>MODEL</th>
        <th>INSTALLATION DATE</th>
		<th>WARRANTY</th>
		<th width=100>RC</th>
		<th>RENTAL Amt.</th>
		<th>SERIAL NO</th>
		<th>LOCAL ID</th>
		<th>IP ADDRESS</th>
		</tr>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "BHEL";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM IT_ASSETS";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "
		<tr>
        <td>".$row["ASSET_ID"]."</td>
        <td>".$row["ASSET_TYPE"]."</td>
        <td>".$row["MAKE"]."</td>
        <td>".$row["MODEL"]."</td>
        <td>".$row["INSTALLATION_DATE"]."</td>
		<td>".$row["WARRANTY"]."</td>
		<td>".$row["RC"]."</td>
		<td>".$row["QUARTERLY_RENTAL_AMOUNT"]."</td>
		<td>".$row["SERIAL_NO"]."</td>
		<td>".$row["LOCAL_ID"]."</td>
		<td>".$row["IP_ADDRESS"]."</td>
        </tr>";
    }
} else {
    echo "0 results";
}

$conn->close();
?>
</table>
</div>
</body>
</html>                