var http = require("http");
var fs = require("fs");
var query = require("querystring");


var server = http.createServer(function(request,response){
    response.setHeader("Content-Type","text/html");

    var url = request.url;
    
    if(url=="/login"){
        var  filename = "login.html";
    }else if(url.startsWith("/afterLogin")){

        response.writeHead(200);
        response.write("Form Submitted");

        let params = url.split("?");
        console.log(query.parse(params[1]));
        response.end();

    }else{
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

    console.log(request.url);
    

});

server.listen(7000,function(){
    console.log("Listening to the server started...");
})