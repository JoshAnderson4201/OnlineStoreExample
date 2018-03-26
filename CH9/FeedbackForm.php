<!doctype html>
<html>
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<meta charset="utf-8">

<title>Pick-Pocket Longboards</title>

<link href="PickPocketCSS.css" rel="stylesheet" type="text/css">
<link href="FeedbackForm.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../HW4/rotate.js"></script>
<script type="text/javascript" src="feedback.js"></script>

</head>

<?php 
session_start();
include "Menu.php";?>
<div id="Wrapper">

<br>

<form name = "feedback" id="feedback" action ="thanks.php" method="post" onSubmit="return validateFeedback()">

<h2>Customer Feedback</h2>

	<fieldset id="Purchased">
    	<legend style="font-weight: normal"><strong> What deck did you purchase? </strong></legend>
            <input type="checkbox" name="WhichProducts" value="Shoes" id="WhichProducts_0">
        	<label>Cruiser Deck/Complete</label>
            <br/>
			<input type="checkbox" name="WhichProducts" value="Shoes" id="WhichProducts_1">
        	<label>Drop Deck/Complete</label>
            <br/>
            <input type="checkbox" name="WhichProducts" value="Shoes" id="WhichProducts_2">
        	<label>Downhill Deck/Complete</label>
            <br/>
            <input type="checkbox" name="WhichProducts" value="Shoes" id="WhichProducts_3">
        	<label>Slide Deck/Complete</label>
            <br/>
            <input type="checkbox" name="WhichProducts" value="Shoes" id="WhichProducts_4">
        	<label>Carver Deck/Complete</label>
            <br/>
    </fieldset>
    
    <fieldset id="Satisfied">
    	<legend><strong>How satisfied were you with your custom graphic?</strong></legend>
        	<input type="radio" name="HowSatisfied" value="1" id="HowSatisfied_0">
        	<label>Extremely satisfied</label>
            <br/>
            <input type="radio" name="HowSatisfied" value="1" id="HowSatisfied_1">
        	<label>Very satisfied</label>
            <br/>
            <input type="radio" name="HowSatisfied" value="1" id="HowSatisfied_2">
        	<label>Neutral</label>
            <br/>
            <input type="radio" name="HowSatisfied" value="1" id="HowSatisfied_3">
        	<label>Very dissatisfied</label>
            <br/>
            <input type="radio" name="HowSatisfied" value="1" id="HowSatisfied_4">
        	<label>Extremely dissatisfied</label>
            <br/>
	</fieldset>
	
    <fieldset>
    	<legend> <strong>Additional comments: </strong></legend>
        <textarea name="prodComments" cols="50" rows="10"></textarea>
	</fieldset>

	<fieldset id="Contact">
	  <legend><strong>Contact Information:</strong></legend>
		<label>First Name: </label><span style="margin-left:48px;"><input name="first_name" type="text" class="contactbox" id="first_name" size=				"30"></span><br/>
		<label>Last Name:  </label><span style="margin-left:50px;"><input name="last_name" type="text" class="contactbox" id="last_name" size="30"></span><br/>
		<label>Email:      </label><span style="margin-left:94px;"><input name="Email" type="text" class="contactbox" id="Email" size="30"></span><br/>
	</fieldset>
<fieldset>
	<input name="Submit" type="submit" class="button_style" value="Send Feedback" >
	&nbsp; &nbsp;
	<input name="Reset" type="reset" class="button_style" value="Reset Form" />
</fieldset>
    
</form>
<?php include "footer.php" ?>
</div> <!-- close wrapper -->
</div>