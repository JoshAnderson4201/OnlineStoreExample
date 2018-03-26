<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Pick-Pocket Longboards</title>

<link href="PickPocketCSS.css" rel="stylesheet" type="text/css">
<link href="signupCSS.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="feedback.js"></script>
</head>

<body>
<?php include "Menu.php";?>
<?php include "DB.php";?>
<div id="Wrapper">
<br>

<h2>Create an Account</h2>

<form id="register" method="post" action="<?php echo $PHP_SELF;?>" onSubmit="return validateFeedback()">

	<fieldset id="Contact">
		<legend>Enter Personal Information</legend>
        First Name:<input type="text" id="first_name" name="first_name"><br>
		Last Name:<input type="text" id="last_name" name="last_name"><br>
        E-Mail:<input type="text" id="Email" name="Email"><br>
        Password:<input type="text" id="password" name="password"><br>
        Admin:<input type="checkbox" id="admin" name="admin" value="value1"><br>
        <br><br>
        <input type="submit" class="submit">
	</fieldset>
</form>

<?php 
if (isset($_POST["admin"]) && !empty($_POST["admin"]))
{
	$is_Admin = 1;	
}
else
{	
	$is_Admin = 0;
}

$sql = "INSERT INTO Customers (fname, lname, email, password, admin) VALUES 
('".$_POST['first_name'].
"','"
.$_POST['last_name'].
"','"
.$_POST['Email'].
"','"
.$_POST['password'].
"','"
.$is_Admin.
"')";

//echo($sql);

mysqli_query($db_Connection, $sql) or die("Insert didn't work");

mysqli_close($db_Connection);
?>

<?php include "footer.php" ?>

</div> <!-- close wrapper -->

</body>
</html>