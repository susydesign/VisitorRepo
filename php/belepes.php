<?php
require_once('connect.php');



if(isset($_POST["felh_nev"])){
    $parameter = $_POST["felh_nev"];
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
            $msg = array('felh_nev'=>$db_felh_nev, 'felh_id' => $db_felh_id);
        }

    }else{ //nincs ilyen felhasználó      
        $msg=array('felh_nev'=>'Nincs');
    }
    
    echo json_encode($msg);
    

}else {
    echo json_encode(array('error'=>'0-result'));
}


?>