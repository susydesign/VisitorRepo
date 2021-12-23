<?php
/* load_klinika.js hívja a prof_klinika.php betöltésekor*/
require_once('../../model/connect.php');

    $parameter=15;    

$sql = "SELECT * FROM jel_otthon WHERE o_status=0";

$result = $conn->prepare($sql);
$result->execute();


if($result)  // Sikeres utasítás
{
    $count = $result->rowCount();

    
    if($count>0) // Van eredményünk
    {
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $otthon= array();
        $otthonok= array();
        $i=0;
        foreach ($rows as $row ){

            $otthon=array(
                'jel_o_id'=>$row['jel_o_id'], 
                'o_nev' => $row['o_nev'], 
                'o_irsz' => $row['o_irsz'],                       
                'o_varos' => $row['o_varos'],                       
                'o_utca' => $row['o_utca'],                       
                'o_telefon' => $row['o_telefon'],                       
                'o_email' => $row['o_email'],                       
                'o_kapcs' => $row['o_kapcs'],                       
                'o_status' => $row['o_status'],
                'jel_o_db' => $count,
                'error' => "0",
                'index' => $i
            );

            array_push($otthonok,$otthon);

            $i++;

        };

        echo json_encode($otthonok);

        
    }else{ //nincs ilyen felhasználó      
        $$otthonok=array('error'=>'Nincs még Otthon jelentkező');
    }


}else {
    echo json_encode(array('error'=>'0-result'));
}


?>