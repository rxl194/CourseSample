

var weather = require('./weather.js');
var location = require('./location.js');

weather(function(message){
	console.log(message);
});

location(function(location){
	if (!location) {
		console.log('Unable to guess location');
		return;
	}
	console.log('city: ' + location.city);
	console.log('log/lat: ' + location.loc);
});
