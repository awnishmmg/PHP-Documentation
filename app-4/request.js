var http = require("http");
var server = http.createServer(function(request,response){
    //your own logic
    console.log("Request send");
    // response.setHeader("Content-type","text/plain");
    response.setHeader("Content-type","text/html");
    response.writeHead(200);
    response.write("<h1>Member of Request</h1>");
    response.write("<br/>");
    //Member of Request Object.
    response.write("Url = "+request.url);
    response.write("<br/>");
    response.write("method = "+request.method);
    response.write("<br/>");
    response.write("Accept Header = "+request.headers["accept"]);
    response.write("<br/>");
    response.write("Host Name from Header = "+request.headers["host"]);
    response.write("<br/>");
    response.end();
});

//server active mode
server.listen(7070,function(){
    console.log("Server Started Listening....");
});

