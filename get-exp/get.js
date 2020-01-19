const http = require('http');
const url = require('url');

const block = function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.write('<h1 style="background-color: gray; font-family: helvetica; color: yellow"><form  method="get">First name: <input type="text" name="fname"><br>Last name: <input type="text" name="lname"><br><input type="submit" value="Submit"></form></h1>');
  var q = url.parse(req.url, true);
  res.write("Size of q object is " + Object.keys(q));
  res.end(); 
}

http.createServer(block).listen(4321, ()=>{console.log("listening on 4321")});
