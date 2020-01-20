const http = require('http');
const url = require('url');

const block = function (req, res) {
  res.writeHead(200, {'Content-Type': 'text/html'});
  res.write('<h1 style="background-color: gray; font-family: helvetica; color: yellow"><form  method="get">First name: <input type="text" name="fname"><br>Last name: <input type="text" name="lname"><br><input type="submit" value="Submit"></form></h1>');
  let q = url.parse(req.url, true);
  // res.write("Size of q object is " + Object.keys(q));
  let elements = "<p>";
  let keys = Object.keys(q);
  for(let i = 0; i < keys.length; i++){
    elements += "Key: " + keys[i] + "key is an: " + typeof keys[i] + "Q[keys[i]] is : " +  JSON.stringify( q[keys[i]]) +  "<br />";
  }
  elements += "</p>"
  res.write(elements);
  res.end(); 
}

http.createServer(block).listen(4321, ()=>{console.log("listening on 4321")});
