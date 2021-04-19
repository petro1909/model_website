<?php
    
    require_once 'db_connection.php';

    $link = mysqli_connect($host,$user,$password,$database) or die("Ошибка". mysqli_error($link));

    
    function getAllModels() {
        global $link;
        $query = "SELECT * FROM models";
        $result = mysqli_query($link,$query) or die("Ошибка".mysqli_error($link));
        if($result) {
        
            $rows = mysqli_num_rows($result);
    
            for ($i = 0 ; $i < $rows ; ++$i)
            {
                $row = mysqli_fetch_row($result);
                $str_row = implode(",",$row);
                echo "$str_row";
            }
    
            mysqli_free_result($result);
        }
    
    }
    
    function addModel() {
        global $link;
        $query = "INSERT INTO models VALUES(3,'Natal','Bochkaro', 'nat_45@mail.ru','1945-12-12',34,'man',176,56)";
        $result = mysqli_query($link,$query) or die("Ошибка".mysqli_error($link));   
    }
    addModel();
    getAllModels();

    

    mysqli_close($link);
?>