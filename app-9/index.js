var express = require("express");
var app = express();

app.listen(8000,function(){
    console.log("Listing to port 8000");
});

app.get("/",function(request,response){
    response.write("This is Some Method Running");
    response.end();
});

app.get("/login",function(request,response){
    response.write("login method is Running Now");
    response.end();
});