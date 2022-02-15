var http = require("http");
var server = http.createServer(function(request,response){
    //your own logic
    console.log("Request send");
    // response.setHeader("Content-type","text/plain");
    response.setHeader("Content-type","text/html");
    response.writeHead(404);
    response.write("<h1>404 Page Not Found</h1");
    response.end();
});

//server active mode
server.listen(7070,function(){
    console.log("Server Started Listening....");
});

