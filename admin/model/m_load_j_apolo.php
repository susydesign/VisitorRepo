<?php
/* load_klinika.js hívja a prof_klinika.php betöltésekor*/
require_once('../../model/connect.php');

$sql = "SELECT * FROM jel_apolo WHERE a_status=0";

$result = $conn->prepare($sql);
$result->execute();


if($result)  // Sikeres utasítás
{
    $count = $result->rowCount();

    
    if($count>0) // Van eredményünk
    {
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $apolo= array();
        $apolok= array();
        $i=0;
        foreach ($rows as $row ){

            $apolo=array(
                'jel_a_id'=>$row['jel_a_id'], 
                'a_nev' => $row['a_nev'], 
                'a_fenykep' => $row['a_fenykep'],
                'a_szul' => $row['a_szul'],
                'a_irsz' => $row['a_irsz'],                       
                'a_varos' => $row['a_varos'],                       
                'a_utca' => $row['a_utca'],                       
                'a_hsz' => $row['a_hsz'],                       
                'a_telefon' => $row['a_telefon'],                       
                'a_email' => $row['a_email'],                       
                'a_v_megnev' => $row['a_v_megnev'],                       
                'a_v_ido' => $row['a_v_ido'],                       
                'a_v_doksi' => $row['a_v_doksi'],                       
                'a_oradij' => $row['a_oradij'],
                'a_minosites' => $row['a_minosites'],                       
                'a_status' => $row['a_status'],
                'jel_a_db' => $count,
                'error' => "0",
                'index' => $i
            );

            array_push($apolok,$apolo);

            $i++;

        };

        echo json_encode($apolok);

        
    }else{ //nincs ilyen felhasználó      
        $apolok=array('error'=>'Nincs még Otthon jelentkező');
    }


}else {
    echo json_encode(array('error'=>'1-result'));
}


?>