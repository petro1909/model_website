class Model{
    

    constructor(requestBody) {
        this.Name = requestBody.ModelName;
        this.Surname = requestBody.ModelSurname;
        this.Email = requestBody.ModelEmail;
        this.PhoneNumber = requestBody.ModelPhoneNumber;
        this.Country = requestBody.ModelCountry;
        this.City = requestBody.ModelCity;
    }

    tostring() {
        return "Model Name : " + this.Name +  
        "\ Model Surname : " + this.Surname +
        "\ Model Email : " + this.Email +
        "\ Model PhoneNumber : " + this.PhoneNumber +
        "\ Model Country : " + this.Country +
        "\ Model City : " + this.City + "\ "; 
    }
    
}

module.exports.ModelEntity = Model;