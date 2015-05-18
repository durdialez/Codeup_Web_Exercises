'use strict';

while(true) {
	var random = Math.floor((Math.random()*50)+1);

	if(random %2 != 0) {
		break;
	}
}

	console.log('Random odd number to skip is: ' + random);

	for (var i = 1; i <= 50; i+=2) {
		if(random == i) {
			console.log('Yikes! Skipping number: ' + i);
			continue;
		}
			console.log('Here is an odd number: ' + i);
		
	}	





