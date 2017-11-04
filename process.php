<?
//Get values from the login page.
$username = $_POST['user'];
$password = $_POST['pass'];

$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_escape_string($username);
$password = mysql_escape_string($password);

// To connect to server and select database
mysql_connect("localhost", "root", "");
mysql_select_db("BHEL");

// Query the database for user
$result = mysql_query("select * from users where username='$username' and password='$password'") or die(mysql_error());

$row = mysql_fetch_array($result);
if ($row['username'] == $username && $row['password'] == $password) {
	echo "<script> window.location.assign('task.html'); </script>";
		
} else {
	echo "Unsuccessful";
}
?>

