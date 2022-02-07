var mongoose = require("mongoose");
var EmpSchema = new mongoose.Schema({emp_id : Number, emp_name : String, class : String});
var EmpModel = mongoose.model("Model",EmpSchema,"emp");

mongoose.connect("mongodb://localhost:27017/company",{ 
    useNewUrlParser: true,
    useUnifiedTopology: true 
});

//find : Array : Collection Object
//findOne : Object

EmpModel.findOne({emp_id:1001},function(error,data){
   if(typeof(data) == 'object'){
       if(Array.isArray(data)){
           console.log("Data is Array of Object ");
           
       }else{
           console.log("Data is Object");
       }
   }
   mongoose.disconnect();
});





