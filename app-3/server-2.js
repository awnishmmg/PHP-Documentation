var http = require("http");

//server active mode
server.listen(7070,function(){
    console.log("Server Started Listening....");
});

function processSomething(response){
    response.write("<h1>This is Response from the Server</h1");
}

var server = http.createServer(function(request,response){
    //your own logic
    console.log("Request send");
    processSomething(response);
    response.end();
});

