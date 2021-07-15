console.log('==============================================');
console.log('sync Main thread first');
setTimeout( _ => console.log('sync setTimeout'), 0);
Promise.resolve().then(_ => console.log('async Promise'));
console.log("sync Main thread last");
console.log('==============================================');