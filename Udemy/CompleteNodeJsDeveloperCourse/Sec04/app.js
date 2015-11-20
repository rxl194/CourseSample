console.log('starting password manager');

var storage = require('node-persist');
storage.initSync();

var argv = require('yargs')
	.command('create', 'Create a new account', function (yargs) {
		yargs.options({
			name: {
				demand: true,
				alias: 'n',
				description: 'Account name (eg: Twitter, Facebook)',
				type: 'string'
			},
			username: {
				demand: true,
				alias: 'u',
				description: 'Account username or email',
				type: 'string'
			},
			password: {
				demand: true,
				alias: 'p',
				description: 'Account password',
				type: 'string'
			}
		}).help('help create');
	})
	.command('get', 'Get an existing account', function (yargs) {
		yargs.options({
			name: {
				demand: true,
				alias: 'n',
				description: 'Account name (eg: Twitter, Facebook)',
				type: 'string'
			}
		}).help('help get');
	})
	.help('help')
	.argv;

var command = argv._[0];

//storage.setItemSync('name', 'Andrew');
/*
storage.setItemSync('accounts',[{
	username: 'Andrew',
	balance: 0
}]);
*/

//var name =storage.getItemSync('name');
//console.log('Save name is: ' + name);

// var accounts = storage.getItemSync('accounts');

// push on a new account

/*
accounts.push({
	username: 'Jen',
	balance: 75
});
*/

// save using setItemSync
// storage.setItemSync('accounts',accounts);

// console.log(accounts);

// account.name, e.g. Facebook
// account.username, e.g. User12!
// account.password, Password123!
function createAccount (account) {
	var accounts = storage.getItemSync('accounts');

	if (typeof accounts === 'undefined' ) 
		accounts = [];

	accounts.push(account);
	storage.setItemSync('accounts',accounts);

	return accounts;
}

function getAccount(accountName) {
	var accounts = storage.getItemSync('accounts');
	var matchedAccount;

	if (typeof accounts === 'undefined' ) 
		accounts = [];

	// iterate over array, return matching account, else undefined
	accounts.forEach(function(account) {
		if (account.name === accountName) {
			matchedAccount = account;
		}
	});

	return matchedAccount;
}

/*
createAccount({
	name: 'Facebook',
	username: 'someemail@gmail.com',
	password: 'Password123!'
});
*/

/*
var facebookAccount = getAccount('Facebook');
console.log(facebookAccount);
*/

if (command === 'create') {
	var createdAccount = createAccount({
		name: argv.name,
		username: argv.username,
		password: argv.password
	});
	console.log('Account created');
	console.log(createdAccount);
} else if (command === 'get') {
	var fetchedAccount = getAccount(argv.name);
	if (typeof fetchedAccount === 'undefined') {
		console.log('Account not found');
	} else {
		console.log('Account found!');
		console.log(fetchedAccount);
	}
} else {
	console.log('Unkown command: ' + command);
}
