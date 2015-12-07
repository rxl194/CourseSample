
var request = require('request');

module.exports = function(location, callback) {
  // move url into here
  var encodedLocation = encodeURIComponent(location);
  var url = 'http://api.openweathermap.org/data/2.5/weather?q='+ 
      encodedLocation + 
      '&units=imperial&appid=2de143494c0b295cca9337e1e96b00e0';

  if (!location) {
    return callback('No location provided');
  }
  // console.log(url);

  request({
    url:  url, 
    json: true
  }, function(error, response, body) {
  	if (error) {
    	callback('Unable to fetch weather.');
  	} else {
    	// console.log(JSON.stringify(body,null,4));	
    	// It's 77.777 in Philadelphia!
    	callback('It\'s ' + body.main.temp + ' in ' + body.name + '!');
  	}
  });
}
	
