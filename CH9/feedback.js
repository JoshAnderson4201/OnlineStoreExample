// JavaScript Document
// Validate Feedback Form

function validateFeedback()
{	

	
	//alert("Validating");
	
	var firstName = document.getElementById("first_name");
	var lastName = document.getElementById("last_name");
	var email = document.getElementById("Email");
	
	var all_OK = true;
	
	if(!validateName(firstName))
	{
		alert("First Name not Valid");
		all_OK = false;	
	}
	
	if(!validateName(lastName))
	{
		alert("Last Name not Valid");
		all_OK = false;	
	}
	
	if(!validateEmail(email))
	{
		alert("Email not Valid");
		all_OK = false;	
	}
	
	
	if(all_OK)
	{
		return true;	
	}
	else
	{
		return false;	
	}
	
}

function validateName(Name)
{
	var p = Name.value.search(/^[-'\w\s]+$/);
	if (p == 0)	{return true;}
	else {return false;}
}

function validateEmail(Email)
{
	var p = Email.value.search(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/);
	if (p == 0)	{return true;}
	else {return false;}
}