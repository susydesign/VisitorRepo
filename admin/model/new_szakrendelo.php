<?php
    require_once('../../model/connect.php');

    $sql_in = "INSERT INTO  szakrendelo (klinika_id, szak_id) VALUES (:klinika_id, :szak_id)";
    
    $result_in = $conn->prepare($sql_in);

    $result_in->bindParam(':klinika_id', $klinika_id);
    $result_in->bindParam(':szak_id', $szak_id);

    if(isset($_POST["klinika_id"])){
        $klinika_id = $_POST["klinika_id"];
    }else{
        $klinika_id = "Nincs post";
    };
    if(isset($_POST["szak_id"])){
        $szak_id = $_POST["szak_id"];
    }else{
        $szak_id = "Nincs post";
    };

    $result_in->execute();

    //Vissza olvassuk az utoldó recordot

    if($result_in){        
        $sql_szr = "SELECT MAX(rendelo_id) as rendelo_id FROM szakrendelo";
        $result_szr = $conn->query($sql_szr);
        $count = $result_szr->rowCount();

        if($count>0) // Van eredményünk
        {
            $rows = $result_szr->fetchAll(PDO::FETCH_ASSOC);
            foreach($rows as $row){
                $msg = array(
                        'rendelo_id'=>$row['rendelo_id'],
                        'error'=>'0'
                );

            }
        }else{
            $msg = array('error'=>'1');        
        }
        echo json_encode($msg);
    }else{
        echo json_encode(array('error'=>'1-result m_szakrendelo_php'));
    }

?>