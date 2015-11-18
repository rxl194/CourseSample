var argv = require('yargs').argv;
var command = argv._[0];

/*
if (argv._[0] === 'hello' ) {
	console.log('Hello world!');
}
*/

console.log(argv);


if (command === 'hello' && typeof argv.name !== 'undefined' && typeof argv.lastname !== 'undefined') {
	console.log('Hello ' + argv.name + ' ' + argv.lastname + '!');
} else if (command === 'hello' && typeof argv.name !== 'undefined') {
	console.log('Hello ' + argv.name + '!');
} else if (command === 'hello') {
	console.log('Hello world!');
}
