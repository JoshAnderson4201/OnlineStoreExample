<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Pick-Pocket Longboards</title>

<link href="PickPocketCSS.css" rel="stylesheet" type="text/css">
<link href="../Ch9/DecksCSS.css" rel="stylesheet" type="text/css">

<?php session_start();?>

</head>

<body>


<?php include "Menu.php";?>
<?php include "DB.php";?>

<div id="Wrapper">

<br>


<form id="newprod" method="post" action="<?php echo $PHP_SELF;?>">

	<fieldset id="newProd">
		<legend>Enter New Product Info</legend>
        Product Name:<input type="text" id="name" name="name"><br>
		Description:<textarea name="discription" id="description" cols="50" rows="10"></textarea><br>
        Price:<input type="text" id="price" name="price"><br>
       	Quantity:<input type="text" id="quantity" name="quantity"><br>
        Image:<input type="text" id="image" name="image"><br>
        Type:<input type="text" id="type" name="type"><br>
        <br><br>
        <input type="submit" class="submit">
	</fieldset>
</form>

<?php 


$sql = "INSERT INTO Products (name, description, price, quantity, image, type) VALUES 
('".$_POST['name'].
"','"
.$_POST['discription'].
"','"
.$_POST['price'].
"','"
.$_POST['quantity'].
"','"
.$_POST['image'].
"','"
.$_POST['type'].
"')";

//echo($sql);

mysqli_query($db_Connection, $sql) or die("Insert didn't work");

mysqli_close($db_Connection);
?>


</div>
</body>
</html>