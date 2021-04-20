<?php
class Model {
    public $name;
    public $surname;
    public $email;
    public $birthday;
    public $age;
    public $gender;
    public $height;
    public $weight;


    function __construct($array)
    {
        $this->name = $array[1];
        $this->surname = $array[2];
        $this->email = $array[3];
        $this->birthday = $array[4];
        $this->age = $array[5];
        $this->gender = $array[6];
        $this->height = $array[7];
        $this->weight = $array[8];
    }

    function toString() {
        echo "Model Name - $this->name.<br>".
             "Model Surname - $this->surname.<br>".
             "Model email - $this->email.<br>".
             "Model birthday - $this->birthday.<br>".
             "Model age - $this->age.<br>".
             "Model gender - $this->gender.<br>".
             "Model height - $this->height.<br>".
             "Model weight - $this->weight.<br>";
    }

}
?>