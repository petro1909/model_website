<?php
    
    require_once 'db_connection.php';
    require_once($_SERVER['DOCUMENT_ROOT'].'/model_website/model_website/src/entities/Model.php');
    //require_once '../../entities/Model.php';
    

    $link = mysqli_connect($host,$user,$password,$database) or die("Ошибка". mysqli_error($link));

    function getResult($query) {
        global $link;
        $result = mysqli_query($link,$query) or die("Ошибка ".mysqli_error($link));
        return $result;
    };

    function getAllModels($query) {
        
        $result = getResult($query);

        if($result) {
            
            $rows = mysqli_num_rows($result);

            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result);

                $model = new Model($row);
                $model->toString();
                
                echo "<form name='delete_model' action=../../database/db_models_operations.php method='POST'>
                <input type='hidden' name='id' value=$row[0]>
                <input type='submit' value='delete'>
                </form>";

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

    function deleteAllMOdels() {
        $query = "DELETE FROM models";
        getResult($query);
    }

    function deleteModel() {
        $id = $_POST['id'];
        $query = "DELETE FROM models where ModelId = '$id'";
        getResult($query);
    }

    function updateModel() {

    }





    if(isset($_POST['model_name'])) {
         addModel();
         header('Location: ../view/page/list.php');
        exit;
    } else if(isset($_POST['id'])) {
        deleteModel();
        header('Location: ../view/page/list.php');
    } else {
        getAllModels("SELECT * FROM models");
    }




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