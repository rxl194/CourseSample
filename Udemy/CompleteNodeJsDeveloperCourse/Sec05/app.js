

var weather = require('./weather.js');
var location = require('./location.js');

// setup yargs to have a --location or -l arguments
var argv = require('yargs')
    .option('location', {
      alias: 'l',
      demand: false,
      describe: 'Location to fetch weather for',
      type: 'string'
    })
    .help('help')
    .argv;

/*
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
*/

// if location provided
//   call weather(location, callback)
// else
//   call location,
//   call weather(location, callback)
if (typeof argv.l === 'string' && argv.l.length > 0 ) {
  console.log('has location');
  weather(argv.l, function(currentWeather) {
    console.log(currentWeather);
  });
} else {
  console.log('No location');
  location(function(location){
    if (location) {
      weather(location.city, function(currentWeather) {
        console.log(currentWeather);
      });
    } else {
      console.log('Unable to guess location');
    }
  });
}

