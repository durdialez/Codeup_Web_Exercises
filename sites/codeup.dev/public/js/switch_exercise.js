'use strict';
// ignore these lines for now
// just know that the variable 'color' will end up with a random value from the colors array
var colors = ['red', 'orange', 'yellow', 'green', 'blue', 'indigo', 'violet'];
var color = colors[Math.floor(Math.random()*colors.length)];


// var message;
switch (color) {
	case 'red':
		console.log('You are red like rose.');
		// message = '';
		break;
	case 'orange':
		console.log('You are orange like orange.');
		// message = '';
		break;
	case 'yellow':
		console.log('You are yellow like gatorade');
		// message = '';
		break;
	case 'green':
		console.log('You are green like grass');
		// message = '';
		break;
	case 'blue':
		console.log('You are blue like clues');
		// message = '';
		break;
	default:
		console.log('I do not know anything by that color.');
		// message = '';

    // todo: create a case statement that will handle every color except indigo and violet
    // todo: when a color is encountered log a message that tells the color, and an object of that color
    //       example: Blue is the color of the sky.

    // todo: create a default case that will catch indigo and violet
    // todo: for the default case, log: I do not know anything by that color.
}