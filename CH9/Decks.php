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

<h2>Decks</h2>
<?php 
$decks = mysqli_query ($db_Connection, "SELECT * FROM Products") or die("Query didn't run.");

$numRecords = mysqli_num_rows($decks);
//echo $numRecords. " number of shoes in the table";

$Count = 0;
$currShoe = "";
echo "<table id='tableformat'>";
echo "<tr>
	  <th>Name</th>
	  <th>Description</th>
	  <th>Price</th>
	  <th>Quantity</th>
	  <th>Image</th>
	  <th>Buy</th>
	  </tr>";

for ($i=0; $i<$numRecords; $i++)
{
	$row = mysqli_fetch_array ($decks); 
	
	echo "<tr>";
	echo "<td width='15%'>".$row["name"]."</td>";
	echo "<td width='30%'>".$row["description"]."</td>";
	echo "<td width='10%'>";
	printf("$%.2f",$row["price"]);
	echo "</td>";
	echo "<td width='10%'>".$row["quantity"]."</td>";
	echo "<td width='25%'><img width='150px' src='images/".$row["image"]."'></td>";
	echo "<td width='10%'><a href=\"purchase.php?prod=".$row[Deck_ID]."&cost=".$row[price]."\">Buy</a></td>";
	echo "</tr>";
}
echo "</table>";

mysqli_close($db_Connection);
?>

<br>
<?php include "footer.php" ?>

</div> <!-- close wrapper -->

</body>
</html>