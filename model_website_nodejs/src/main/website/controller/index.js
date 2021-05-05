const db_utils = require("../db_operations/db_util");
const express = require("express");
const bodyParser = require("body-parser");
const Model = require("../model/Model");
const hbs = require("hbs");



const app = express();
hbs.registerPartials(__dirname.replace("js_util","") + "/view/html/parts");
app.set("view engine","hbs");
app.set("views",__dirname.replace("js_util","") + "/view/html");
//hbs.registerPartials(__dirname.replace("js_util","") + "/view/html", function(err) {});
const urlencodedParser = bodyParser.urlencoded({extended : false});

app.get("/list", urlencodedParser, function(requert,response){
    var array = db_utils.getAllModels();
    
    response.render("index.hbs", {
        users : array
    });
});

app.get("/form", urlencodedParser, function(requert,response){
    
    response.sendFile(__dirname.replace("js_util","") +"/view/html/form.html");
});

app.post("/form", urlencodedParser, function(request,response) {
    if(!request.body) return response.sendStatus(400);
    db_utils.addModel(request.body);





    


    response.redirect("/list");
});

app.get("/about",function(requert,response){
    response.send("<h1>About</h1>")
});



app.use(express.static(__dirname.replace("js_util","")+"/view/css"));
// app.get("/", function(request,response) {
//     connection.query("select * from models",
//     function(error,result,fields) {
//         array = result;
//     });
//     response.send(array);
//    // response.sendFile(__dirname + "/view/html/index.html");
// });


app.use("/error",function(request,response) {
    response.status(404).send("Resourse not found");
});
app.listen(3000);

