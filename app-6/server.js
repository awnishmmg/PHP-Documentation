var http = require("http");
var fs = require("fs");

var server = http.createServer(function(request,response){
    response.setHeader("Content-Type","text/html");
    
    switch(request.url){
        case "/home":
         var  filename = "home.html";
        break;
        
        case "/about":
            var filename = "about.html";
        break;

        case "/contact":
            var filename = "contact.html";
        break;

        default:
            response.writeHead(404);
            response.write("Page Not Found");
            response.end();

    }

    fs.readFile("./pages/"+filename,"utf8",function(error,data){
        
        if(error==null){
            
            response.writeHead(200);
            response.write(data);
            response.end();
        }

    });
    

});

server.listen(7000,function(){
    console.log("Listening to the server started...");
})