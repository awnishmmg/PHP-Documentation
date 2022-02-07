var mongoose = require("mongoose");
var EmpSchema = new mongoose.Schema(
    {emp_id : Number, emp_name : String, class : String},
    {versionKey:false}
    );
var EmpModel = mongoose.model("Model",EmpSchema,"emp");

var emp = new EmpModel({emp_id:1007,emp_name:"Pushpa Raj",class:"NA"});
mongoose.connect("mongodb://localhost:27017/company",{ 
    useNewUrlParser: true,
    useUnifiedTopology: true 
});

//How to Insert the Record
emp.save(function(error,data){
  if(error==null){
      console.log("Data Inserted");

  }else{
      console.log("Exception Occured...");
  }
   mongoose.disconnect();
});





