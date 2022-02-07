var mongoose = require("mongoose");
var EmpSchema = new mongoose.Schema({emp_id : Number, emp_name : String, class : String});
var EmpModel = mongoose.model("Model",EmpSchema,"emp");

mongoose.connect("mongodb://localhost:27017/company",{ 
    useNewUrlParser: true,
    useUnifiedTopology: true 
});

//find : Array : Collection Object
//findOne : Object

EmpModel.findOne({emp_id:1002},function(error,data){

   if(error==null){
        if(typeof(data) == 'object'){
            if(Array.isArray(data)){
            // console.log("Data is Array of Object ");
            
        }else{
            // console.log("Data is Object");
            console.log(` The Emp Id : ${data.emp_id} `);
            console.log(` The Emp Name : ${data.emp_name} `);
            console.log(` The Emp Qualification : ${data.class} `);
        }
    }
   }else{
       console.log("Exception or Error Occured");
   }
   
   mongoose.disconnect();
});





