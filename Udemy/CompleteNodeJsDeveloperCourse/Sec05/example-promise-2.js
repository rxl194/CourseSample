
var Promise = require('bluebird');
var request = require('request');
var weather = require('./weather.js');

/*
function doWork(shouldFail) {
	return new Promise(function(resolve, reject) {
		setTimeout(function() {
			//console.log('done!');
			if (typeof shouldFail === 'boolean' && shouldFail === true ) {
				reject('error message');
			} else {
				resolve('success');
			}
		}, 1000);
	});
}


doWork().then(function(message) {
	console.log(message);
	return doWork(true);
}).then(function(message) {
	console.log(message);
	//console.log('all done!');
}).catch(function(error) {
	console.log(error);
});
*/

function getLocation() {
	return new Promise(function(resolve, reject) {
		resolve('Philadelphia');
	});
}


function getWeather(location) {
	return new Promise(function(resolve, reject) {
  	weather(location, function(currentWeather) {
    	resolve(currentWeather);
  	});
	});
}


getLocation().then(function(location) {
 	return getWeather(location)
}).then(function(currentWeather) {
	console.log(currentWeather);
});
