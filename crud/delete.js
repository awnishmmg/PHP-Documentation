var mongoose = require("mongoose");
var EmpSchema = new mongoose.Schema(
        {emp_id : Number, emp_name : String, class : String},
        {versionKey:false}
    );
var EmpModel = mongoose.model("Model",EmpSchema,"emp");
mongoose.connect("mongodb://localhost:27017/company",{ 
    useNewUrlParser: true,
    useUnifiedTopology: true 
});

//How to Delete the Record
//remove Method is deprecated, we can use deleteOne, deleteMany
EmpModel.remove({emp_id:1007},function(error,data){
  if(error==null){
      console.log("Record Deleted");

  }else{
      console.log("Exception Occured...");
  }
   mongoose.disconnect();
});





