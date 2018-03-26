<!doctype html>
<html>
<head>

<meta charset="utf-8">
<title>Pick-Pocket Longboards</title>

<link href="PickPocketCSS.css" rel="stylesheet" type="text/css">

</head>

<body>

<?php 
session_start();
include "Menu.php";
?>
<?php include "DB.php";?>
<div id="Wrapper">

<br>

<h2> Shopping Cart </h2>

<?php 
if (isset($_SESSION["email"]) and isset($_GET['cost']))
{
	$deck = $_GET["prod"];
	$cost = $_GET["cost"];
	$email = $_SESSION["email"];
	$date = date("Y/m/d");
	$total_cost = 0;
	
	unset($_GET['cost']);
	unset($_GET['prod']);
	
	$sql = "INSERT INTO Transactions (
		Deck_ID,
		email,
		date,
		cost
		)
	VALUES (
		'$deck',
		'$email',
		'$date',
		'$cost'
	)";
	
	if (isset($cost))
	{
		mysqli_query($db_Connection, $sql);
	}
	

	$order = mysqli_query($db_Connection, "SELECT * FROM Transactions WHERE email = '".$_SESSION["email"]."'") or die (mysql_error());
	$numRecords = mysqli_num_rows($order);
	
	echo "<table id='tableformat'>";
	echo "<tr>
		<th>Deck ID</th>
		<th>Email</th>
		<th>Date</th>
		<th>Cost</th>
		</tr>";
		for ($i = 0; $i < $numRecords; $i++)
		{
			$row = mysqli_fetch_array($order);
			echo "<tr>";
			echo "<td width='25%'>".$row["Deck_ID"]."</td>";
			echo "<td width='25%'>".$row["email"]."</td>";
			echo "<td width='25%'>".$row["date"]."</td>";
			echo "<td width='25%'>".$row["cost"]."</td>";
			echo "</td>";
			echo "</tr>";
			$total_cost = $total_cost + $row["cost"];
		}
	
	echo "<tr> <td></td> <td></td> <td>Total: </td> <td>";
	printf("$%.2f",$total_cost);
	echo "</td> </tr>";
	echo "</table";
}
else
{
	echo "You must first login to make a purchase<br><br>";
	echo "<a href='SignIn.php'>LOGIN</a>";
}

mysqli_close($db_Connection);
?>
<?php include "footer.php" ?>
</div>
</body>
</html>