<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta charset="utf-8">

<title>Pick-Pocket Longboards</title>

<link href="PickPocketCSS.css" rel="stylesheet" type="text/css">
<link href="FeedbackForm.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="feedback.js"></script>
</head>

<body>

<?php 
session_start();
include "Menu.php";?>
<div id="Wrapper">

<br>

<h2> E-Mail Us Your Info To Start Your Custom Graphic Order </h2>

<fieldset id="Purchased">
    	<legend style="font-weight: normal"><strong> What deck do you want your custom graphic on? </strong></legend>
            <input type="checkbox" name="WhichProducts" value="Shoes" id="WhichProducts_0">
        	<label>Cruiser</label>
            <br/>
			<input type="checkbox" name="WhichProducts" value="Shoes" id="WhichProducts_1">
        	<label>Drop</label>
            <br/>
            <input type="checkbox" name="WhichProducts" value="Shoes" id="WhichProducts_2">
        	<label>Downhill</label>
            <br/>
            <input type="checkbox" name="WhichProducts" value="Shoes" id="WhichProducts_3">
        	<label>Slide</label>
            <br/>
            <input type="checkbox" name="WhichProducts" value="Shoes" id="WhichProducts_4">
        	<label>Carver</label>
            <br/>
</fieldset>

<fieldset id="Contact">
	  <legend><strong>Contact Information:</strong></legend>
		<label>First Name: </label><span style="margin-left:48px;"><input name="first_name" type="text" class="contactbox" id="first_name" size=				"30"></span><br/>
		<label>Last Name:  </label><span style="margin-left:50px;"><input name="last_name" type="text" class="contactbox" id="last_name" size="30"></span><br/>
		<label>Email:      </label><span style="margin-left:94px;"><input name="Email" type="text" class="contactbox" id="Email" size="30"></span><br/>
</fieldset>
    
<fieldset>
	<input name="Submit" type="submit" class="button_style" value="Start Order" >
	&nbsp; &nbsp;
	<input name="Reset" type="reset" class="button_style" value="Reset Form" />
</fieldset>
<?php include "footer.php" ?>
</div>
</body>
</html>