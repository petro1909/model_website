<?php
    
    require_once 'db_connection.php';

    $link = mysqli_connect($host,$user,$password,$database) or die("Ошибка". mysqli_error($link));
    $name;

    function getAllModels($query) {
        
        $result = getResult($query);

        if($result) {
        
            $rows = mysqli_num_rows($result);
    
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result);
                $str_row = implode(",",$row);
                echo "<br/>";
                echo "$str_row";
            }
    
            mysqli_free_result($result);
        } 
    
    }
    
    function addModel() {

        $name = $_POST['model_name'];
        $surname = $_POST['model_surname'];
        $email = $_POST['model_email'];
        $birthday = $_POST['model_birthday'];
        
        $age = getAge($birthday);
        $gender = $_POST['model_gender'];
        $height = $_POST['model_height'];
        $weight = $_POST['model_weight'];
        
        $query = "INSERT INTO models VALUES(NULL,
            '$name','$surname','$email','$birthday','$age','$gender','$height','$weight')";


        getResult($query);

    }

    function deleteModel() {

    }

    function updateModel() {

    }
    if(isset($_POST['model_name'])) {
         addModel();
         header('Location: ../view/page/list.php');
        exit;
    } else {
        getAllModels("SELECT * FROM models");
    }

    function getResult($query) {
        global $link;
        $result = mysqli_query($link,$query) or die("Ошибка ".mysqli_error($link));
        return $result;
    };


    function getAge($birthday) {

        $date1 = new DateTime($birthday);
        $currentdate = date("Y-m-d");
        $date2 = new DateTime($currentdate);

        $diff = $date2->diff($date1);
        $age = $diff->format('%Y');
        return $age;
    }


    mysqli_close($link);
?>