var fs = require('fs');
var Stripe = require('stripe');

module.exports = function(wagner) {
  var stripe =

  // TODO: Make Stripe depend on the Config service and use its `stripeKey`
  // property to get the Stripe API key.
  wagner.factory('Stripe', function() {
    return Stripe(process.env.STRIPE_API_KEY);
  });

  wagner.factory('fx', function(Config) {
    return require('./fx')(Config);
  });

  wagner.factory('Config', function() {
    return JSON.parse(fs.readFileSync('./config.json').toString());
  });
};
