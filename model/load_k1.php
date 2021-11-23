<?php
/* load_klinika.js hívja a prof_klinika.php betöltésekor*/
require_once('connect.php');

if(isset($_POST["klinika_id"])){
    $parameter = $_POST["klinika_id"];
}else{
    $parameter=15;    
}

$sql = "SELECT * FROM klinika WHERE klinika_id=:parameter";

$result = $conn->prepare($sql);
$result->execute(['parameter' => $parameter]);


if($result)  // Sikeres utasítás
{
    $count = $result->rowCount();

    
    if($count>0) // Van eredményünk
    {
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $klinika= array();
        $klinkak= array();
        $i=0;
        foreach ($rows as $row ){

            $klinika=array(
                'klinika_id'=>$row['klinika_id'], 
                'klinika_nev' => $row['klinika_nev'], 
                'k_address_varos' => $row['k_address_varos'],                       
                'k_address_utca' => $row['k_address_utca'],                       
                'k_address_hsz' => $row['k_address_hsz'],                       
                'k_phone' => $row['k_phone'],                       
                'k_logo' => $row['k_logo'],                       
                'k_rolunk' => $row['k_rolunk'],
                'geoframe' => $row['geoframe'],
                'error' => "",
                'index' => $i
            );

            array_push($klinkak,$klinika);

            $i++;

        };

        echo json_encode($klinkak);

        
    }else{ //nincs ilyen felhasználó      
        $klinika=array('error'=>'Nincs még Magánklinika');
    }


}else {
    echo json_encode(array('error'=>'0-result'));
}


?>