var mongoose = require("mongoose");
var EmpSchema = new mongoose.Schema({emp_id : Number, emp_name : String, class : String});
var EmpModel = mongoose.model("Model",EmpSchema,"emp");

mongoose.connect("mongodb://localhost:27017/company",{ 
    useNewUrlParser: true,
    useUnifiedTopology: true 
});

//find : Array : Collection Object
//findOne : Object

EmpModel.find({},function(error,data){

   if(error==null){
        if(typeof(data) == 'object'){
            if(Array.isArray(data)){
            // console.log("Data is Array of Object ");

            for(let i in data){

                console.log(` The Emp Id : ${data[i].emp_id} `);
                console.log(` The Emp Name : ${data[i].emp_name} `);
                console.log(` The Emp Qualification : ${data[i].class} `);
                console.log(`------------`);
            }
            
        }else{
            // console.log("Data is Object");
            
        }
    }
   }else{
       console.log("Exception or Error Occured");
   }
   
   mongoose.disconnect();
});










