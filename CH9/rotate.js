// JavaScript Document

var imageArray = new Array(5);

imageArray[0] = "images/Deck1.jpg";
imageArray[1] = "images/Deck2.jpg";
imageArray[2] = "images/Deck3.jpg";
imageArray[3] = "images/Deck4.jpg";
imageArray[4] = "images/Deck5.jpg";

var imageCounter = 1;

function rotate()
{
	if (imageCounter == 5)
		imageCounter = 0;
	
	var imageObject = document.getElementById('placeHolder');
	//Sets source of placeholder to one of the images in array
	imageObject.src = imageArray[imageCounter];
	++imageCounter;
}

function startRotation()
{
	document.getElementById('placeHolder').scr="images/Deck1.jpg";
	setInterval('rotate()', 5000);
}

