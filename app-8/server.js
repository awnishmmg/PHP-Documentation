var http = require("http"); //http module
var fs = require("fs"); // fs module
var query = require("querystring"); // Query String : method type : get

//server have been created
var server = http.createServer(function(request,response){
    //response set
    response.setHeader("Content-Type","text/html");

    var url = request.url;
    if(url=="/"){
        var  filename = "login.html";
    }else if(url.startsWith("/afterLogin") && request.method == "POST"){

        response.writeHead(200);
        // response.write("Form Submitted");

        //Process :- 

        request.on("data",function(queryParams){
            //we will get response as Buffer
            let params = queryParams.toString();
            //Now convert the Buffer to, toString.
            let postData = query.parse(params);

            var users={
                email : "awnish@gmail.com",
                password: 1234,
            };

            if(postData.email == users.email && postData.password == users.password){
                    response.write("Login Successfull.");
            }else{
                 response.write("Invalid User name or Password.");
            }
            response.end();


        });






        
        

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