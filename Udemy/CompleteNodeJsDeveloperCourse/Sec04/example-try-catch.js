
function dowork () {
  throw new Error('Unable to do work do work.');
}

try {
  dowork();
} catch (e) {
  console.log('Somthing went wrong: ' + e.message);
} finally {
  console.log('Finally Block executed!');
}

console.log('try catch ended');
