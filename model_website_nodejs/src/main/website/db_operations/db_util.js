const connection = require("./connection");
const Model = require("../model/Model");

let array;

function getAllModels() {
    
    connection.query("select * from models", 
  
    function(error,result,fields) {
       array = result;
    });
    
    return array;
}

function addModel(requertBody) {
    let model = new Model.ModelEntity(requertBody);
    connection.query("INSERT INTO models" +    
    "(ModelId, ModelName, ModelSurname, ModelEmail, " + 
    "ModelPhoneNumber, ModelCountry, ModelCity) VALUES (?,?,?,?,?,?,?)",
    [null, model.Name, model.Surname, model.Email, 
        model.PhoneNumber, model.Country, model.City], function(err,data) {
        if(err) return console.log(err);
        console.log(data);
    });
}

function updateModel() {

}

function deleteModel() {
    
}

module.exports.getAllModels = getAllModels;
module.exports.addModel = addModel;