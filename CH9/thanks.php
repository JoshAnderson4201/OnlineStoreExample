<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta charset="utf-8">

<title>Pick-Pocket Longboards</title>

<link href="../HW4/HomeStyle.css" rel="stylesheet" type="text/css">
<link href="PickPocketCSS.css" rel="stylesheet" type="text/css">

</head>

<body>
<?php include "Menu.php";?>
<div id="Wrapper">
<br>

<h2 style:"margin-left:15px">Thank you <?php echo $_POST["first_name"]; ?> for submitting feedback.</h2>
<br>

<?php 

$messageToBusiness = 
	"\r\nFrom: ".$_POST['first_name']." ".$_POST['last_name']."\r\n".
	"Email address: ".$_POST['Email']."\r\n".
	"Subject: Feedback from web site\r\n".
	"\r\nProducts Message: \r\n".$_POST["prodComments"]."\r\n";

$headerToBusiness = "From: $_POST[Email]\r\n";
mail("ja160637@scots.edinboro.edu", "Pick-Pocket Longboards Feedback Message", $messageToBusiness, $headerToBusiness);

$fileVar = fopen("feedback.txt", "a")
	or die("Error: Could not open the log file.");
fwrite($fileVar, "\n------------------------------------------\r\n")
	or die("Error: Could not write to the log file.");
fwrite($fileVar, "Date received: ".date("jS \of F, Y \a\\t H:i:s\r\n"))
	or die ("Error: Could not write to the log file.");
fwrite($fileVar, $messageToBusiness)
	or die("Error: Could not write to the log file.");


//Client Message

$messageToClient = 
	"Dear ".$_POST['first_name']." ".$_POST['last_name'].":\r\n".
	"The following message was received from you by Pick-Pocket Longboards:\r\n".
	$messageToBusiness.
	"--------------\r\nThank you for the feedback and your loyalty to our company!\r\n".
	"The Pick-Pocket Longboards Team\r\n--------------\r\n";

$headerToClient = "From: Josh Anderson\r\n";
mail($_POST['Email'], "Re: message from Pick-Pocket Longboards", $messageToClient, $headerToClient);


?>

</div>
</body>
</html>