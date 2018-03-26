<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta charset="utf-8">

<title>Pick-Pocket Longboards</title>

<link href="PickPocketCSS.css" rel="stylesheet" type="text/css">
</head>
<body>
<?php  
session_start();
include "DB.php";

if (isset($_SESSION["fname"]))
{
	$error = "You are already logged in!";
}
elseif (isset($_POST['email']))
{
	//try to login
	$sql = "SELECT * FROM Customers WHERE email = '".$_POST['email']."'";
	$rowsWithMatchingLogin = mysqli_query($db_Connection, $sql) or die("ERROR");
	$numRecords = mysqli_num_rows($rowsWithMatchingLogin);
	if ($numRecords == 1)
	{
		$row = mysqli_fetch_array($rowsWithMatchingLogin);
		if ($_POST['password'] == $row['password'])
		{
			$_SESSION["fname"] = $row['fname'];
			$_SESSION["lname"] = $row['lname'];
			$_SESSION["email"] = $row['email'];
			$_SESSION["password"] = $row['password'];
			$_SESSION["admin"] = $row['admin'];
		}
		else
		{
			$error = "Password is incorrect";
		}
	}
	else
	{
		$error = "Email not found.";
	}
}
mysqli_close($db_connection);
?>


<?php include "Menu.php";?>
<div id="Wrapper">
<br>

<h2> Login </h2>

<form name="addCustomer" method="post" action="SignIn.php">

<fieldset id="contact">
Enter Your Information <br>
Email: <input type="text" id="email" name="email"><br>
Password: <input type="text" id="password" name="password"><br><br>
<input type="submit" value="Login"><br>
</fieldset>
</form>

<?php 
if (isset($error))
{
	echo $error;
}
elseif (isset($_SESSION["fname"]))
{
	echo"<table id='tableformat'>";
	echo "<tr>
	<th>Last Name</th>
	<th>First Name</th>
	<th>Email Address</th>
	</tr>";
	echo "<tr>";
	echo "<td align='center'>";
	echo $_SESSION["lname"];
	echo "<td align='center'>";
	echo $_SESSION["fname"];
	echo "<td align='center'>";
	echo $_SESSION["email"];
	echo "</td></tr>";
	echo "</table>";
}
?>


<?php include "footer.php" ?>
</div>
</body>
</html>