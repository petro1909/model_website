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
    
    function addModel($query) {
        getResult($query);

    }

    function deleteModel() {

    }

    function updateModel() {

    }

    if(isset($_POST['model_name'])) {
        $name = $_POST['model_name'];
        $query = "INSERT INTO models VALUES(7,'$_POST[model_name]','dsads','dsadsa@mail.ru','2019-04-04',34,'man',143,56)";
         addModel($query);
    } else{
        getAllModels("SELECT * FROM models");
    }

    function getResult($query) {
        global $link;
        $result = mysqli_query($link,$query) or die("Ошибка".mysqli_error($link));
        return $result;
    };
    mysqli_close($link);
?>