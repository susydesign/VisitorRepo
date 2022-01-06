<?php
    require_once('../../model/connect.php');

    $sql_in = "INSERT INTO  r_nyitvatartas (rendelo_id) VALUES (:rendelo_id)";
    
    $result_in = $conn->prepare($sql_in);

    $result_in->bindParam(':rendelo_id', $rendelo_id);

    if(isset($_POST["rendelo_id"])){
        $rendelo_id = $_POST["rendelo_id"];
    }else{
        $rendelo_id = "Nincs post";
    };

    $result_in->execute();
    if($result_in){        
        $msg = array(
            'error'=>'0'
        );
    }else{
        $msg = array('error'=>'1');        
    }
        echo json_encode($msg);

?>