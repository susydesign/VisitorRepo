<?php
/* load_klinika.js hívja a prof_klinika.php betöltésekor*/
require_once('../../model/connect.php');


$sql = "SELECT * FROM klinika";

$result = $conn->prepare($sql);
$result->execute();


if($result)  // Sikeres utasítás
{
    $count = $result->rowCount();

    
    if($count>0) // Van eredményünk
    {
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $klinika= array();
        $klinikak= array();
        $i=0;
        foreach ($rows as $row ){

            $klinika=array(
                'klinika_id'=>$row['klinika_id'], 
                'klinika_nev' => $row['klinika_nev'], 
                'k_address_irsz' => $row['k_address_irsz'],                       
                'k_address_varos' => $row['k_address_varos'],                       
                'k_address_utca' => $row['k_address_utca'],                       
                'k_address_hsz' => $row['k_address_hsz'],                       
                'k_phone' => $row['k_phone'],                       
                'k_mobil' => $row['k_mobil'],                       
                'k_email' => $row['k_email'],
                'k_web' => $row['k_web'],
                'k_logo' => $row['k_logo'],
                'k_rolunk' => $row['k_rolunk'],
                'geoframe' => $row['geoframe'],
                'error' => "0",
                'index' => $i
            );

            array_push($klinikak,$klinika);

            $i++;

        };

        echo json_encode($klinikak);

        
    }else{ //nincs ilyen felhasználó      
        $klinikak=array('error'=>'Nincs még Otthon jelentkező');
    }


}else {
    echo json_encode(array('error'=>'0-result'));
}


?>