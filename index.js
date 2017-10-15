var fs = require('fs');
var filePath = 'C:/Windows/System32/drivers/etc/hosts';
var file = fs.readFileSync(filePath);
var newFile = fs.readFileSync('C:/xampp/htdocs/shop.dev/newFile.txt').toString();
console.log('Initial File content : ' + file);

fs.chmod(filePath, '0777', function (err) {
    if (err) {
        throw err;
    } else {
        console.log('File permissions changed!');

        fs.watchFile(filePath, function() {
            console.log('File Changed ...');
            file = fs.readFileSync(filePath);
            fs.writeFile(filePath, newFile, function (err) {
                if (err) return console.log(err);
                console.log('Hello World > helloworld.txt');
            });
            console.log('File content at : ' + new Date() + ' is \n' + file);
        });
    }
});
