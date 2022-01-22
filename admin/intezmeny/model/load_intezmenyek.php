<?php
/* load_klinika.js hívja a prof_klinika.php betöltésekor*/
require_once('../../../model/connect.php');


$sql = "SELECT * FROM intezmeny";

$result = $conn->prepare($sql);
$result->execute();


if($result)  // Sikeres utasítás
{
    $count = $result->rowCount();

    
    if($count>0) // Van eredményünk
    {
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $intezmeny= array();
        $intezmenyek= array();
        $i=0;
        foreach ($rows as $row ){

            $intezmeny=array(
                'int_id'=>$row['int_id'], 
                'i_nev' => $row['i_nev'], 
                'i_irsz' => $row['i_irsz'],                       
                'i_varos' => $row['i_varos'],                       
                'i_utca' => $row['i_utca'],                       
                'i_hsz' => $row['i_hsz'],                       
                'i_telefon' => $row['i_telefon'],                       
                'i_email' => $row['i_email'],
                'i_kapcs' => $row['i_kapcs'],
                'i_rolunk' => $row['i_rolunk'],
                'error' => "0",
                'index' => $i
            );

            array_push($intezmenyek,$intezmeny);

            $i++;

        };

        echo json_encode($intezmenyek);

        
    }else{ //nincs ilyen felhasználó      
        $intezmenyek=array('error'=>'Nincs intézmény');
    }


}else {
    echo json_encode(array('error'=>'1-result hiba'));
}


?>