<html>
<head>

<script type="text/javascript" src="test.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js">
</script>

<link rel="stylesheet" type="text/css" href="navigation.css">
<link rel="stylesheet" type="text/css" href="form.css">

<title>Update Stock</title>    
</head>
<body>
<img id="preload" onload="fadeIn(this)" src="logo.png" style="position: relative;" />
<b style="color: white; font-size:35px; position: absolute; margin-left: 5px;">Bharat Heavy Electricals Limited</b>
<b style="color: white; font-size:15px; position: absolute; margin-left: 5px; margin-top: 45px;: ">www.bhel.com</b>

<ul>
  <li><a class="active" href="task.html">Home</a></li>
  <li><a href="http://www.bhel.com/press_release/press.php">News</a></li>
  <li><a href="http://www.bhel.com/qms/qcat_display.php">Contact</a></li>
  <li><a href="http://www.bhel.com/about.php">About</a></li>
  <li><a href="index.html">Logout</a></li>
</ul>
</div>
<div id="main_area">
<form name="form4" action="updateprocess.php" method = "post" enctype = "multipart/form-data" >    
<br><br><label>Fill The Following Details</label> <br><br> 
     
     
     <label>ASSET_ID</label>
     <input type="text" name="ASSET_ID" value="" required />  <br><br>

     <label>ASSET_TYPE</label>
     <input type="text" name="ASSET_TYPE" value="" required />  <br><br>

     <label>MAKE</label>
     <input type="text" name="MAKE" value="" required />  <br><br>

     <label>MODEL</label>
     <input type="text" name="MODEL" value="" required/>  <br><br>

     <label>INSTALLATION DATE</label>
     <input type="date" name="INSTALLATION_DATE" value="" required/>  <br><br>

     <label>WARRANTY</label>
     <input type="numeric" name="WARRANTY" value="" required/>  <br><br>

     <label>RC</label>
     <input type="text" name="RC" value=""/>  <br><br>

     <label>RENTAL AMOUNT</label>
     <input type="text" name="QUARTERLY_RENTAL_AMOUNT" value=""/>  <br><br>

     <label>SERIAL NO</label>
     <input type="text" name="SERIAL_NO" value="" required/>  <br><br>

     <label>LOCAL ID</label>
     <input type="text" name="LOCAL_ID" value="" required/>  <br><br>

     <label>IP ADDRESS</label>
     <input type="text" name="IP_ADDRESS" value=""/>  <br><br>

	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

	<input type="reset" name="Reset" value="Reset">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<input type="submit" name="submit5" value="Update">

</body>
</html>