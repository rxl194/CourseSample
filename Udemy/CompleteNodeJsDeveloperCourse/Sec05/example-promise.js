
var Promise = require('bluebird');
var request = require('request');

function doWork(data, callback) {
  callback('done');
}


function doWorkPromise(data) {
  return new Promise(function(resolve, reject) {
/*
    setTimeout(function() {
      resolve('everything worked!');
		},1000);
*/
    setTimeout(function() {
      reject('everything is broken!');
		},1000);
  });
}

/*
doWorkPromise('some data').then(function(data) {
  console.log(data);
}, function(error) {
	console.log(error);
});
*/

function getWeather(location) {
  return new Promise(function(resolve, reject) {
	  // return promise
    var encodedLocation = encodeURIComponent(location);
    var url = 'http://api.openweathermap.org/data/2.5/weather?q='+ 
        encodedLocation + 
        '&units=imperial&appid=2de143494c0b295cca9337e1e96b00e0';

    if (!location) {
      reject('No location provided');
    }
    // console.log(url);

    request({
      url:  url, 
      json: true
    }, function(error, response, body) {
  	  if (error) {
    	  reject('Unable to fetch weather.');
  	  } else {
    	  // console.log(JSON.stringify(body,null,4));	
    	  // It's 77.777 in Philadelphia!
    	  resolve('It\'s ' + body.main.temp + ' in ' + body.name + '!');
  	  }
    });
	});
}


getWeather('new york').then(function(currentWeather) {	
	console.log(currentWeather);
}, function(error) {
	console.log(error);
});
