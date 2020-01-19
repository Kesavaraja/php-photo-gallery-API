const http = require('http');



const block = function (req, res) {
  res.write('Hello World!'); //write a response to the client
  res.end(); 
}

http.createServer(block).listen(4321, ()=>{console.log("listening on 4321")});