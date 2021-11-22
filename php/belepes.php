<?php
require_once('../model/connect.php');



if(isset($_POST["felh_nev"])){
    $parameter = $_POST["felh_nev"];
    $para_pw = $_POST["jelszo"];
}else{
    $parameter="";    
}

$sql = "SELECT * FROM user WHERE felh_nev=:parameter";
$result = $conn->prepare($sql);
$result->execute(['parameter' => $parameter]);


if($result)  // Sikeres utasítás
{
    $count = $result->rowCount();
    
    if($count>0) // Van eredményünk
    {
        while ($row = $result->fetch(PDO::FETCH_ASSOC)){
            $db_felh_nev = $row['felh_nev'];
            $db_felh_id = $row['felh_id'];
            $db_felh_role = $row['role'];
            $db_jelszo = $row['jelszo'];
            $msg = array(
                        'felh_nev'=>$db_felh_nev, 
                        'felh_id' => $db_felh_id, 
                        'role' => $db_felh_role,                       
                        'error' => ""
                    ); 
        }

        if(password_verify($para_pw,$db_jelszo)){
            $msg['jelszo']="jó";
        }else{
            $msg=array('error'=>'NEM JÓ A JELSZÓ!');
        }

    }else{ //nincs ilyen felhasználó      
        $msg=array('error'=>'Nincs ilyen felhasználó!');
    }
    
    echo json_encode($msg);
    

}else {
    echo json_encode(array('error'=>'0-result'));
}


?>