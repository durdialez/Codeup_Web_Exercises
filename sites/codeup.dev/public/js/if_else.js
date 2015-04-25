'use strict';
// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];

var favorite = 'green'; 

var message;

if (color = 'violet') {
	message = 'Color is violet';
} else if (color = indigo) {
	message = 'Color is indigo';
} else {
	message = 'I do not know anything by that color';
}


// TODO: When a color is encountered log a message that tells the color, and an object of that color.
//       Example: Blue is the color of the sky.

if ('red') {
	message = 'Red is the color of cherries.';
}


// TODO: Have a final else that will catch indigo and violet.


// TODO: In the else, log: I do not know anything by that color.

// TODO: Using the ternary operator, conditionally log a statement that
//       says whether the random color matches your favorite color.

var favoriteMessage = (favorite == color) ? 'my favorite color'	: 'not my fave'; 
console.log(favoriteMessage);