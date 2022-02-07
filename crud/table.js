var mongoose = require("mongoose");
var CT = require("console.table");
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
            let table = [];

            for(let i in data){
                table.push({"Employee ID": data[i].emp_id} );
                table.push({"Employee Name" : data[i].emp_name});
                table.push({"Employee Qualification" : data[i].class});
            }

            //console.log(table);
            console.log("The Data in tabular Format")
            console.table(table);    
        }else{
            // console.log("Data is Object");
            
        }
    }
   }else{
       console.log("Exception or Error Occured");
   }
   mongoose.disconnect();
});










