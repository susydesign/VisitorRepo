<?php

require_once('connect.php');


$sql_in = "INSERT INTO szakrendelo (klinika_id,szak_id,felnot,gyermek,szemelyes,online,nonstop,gondozas,r_telefon,ar) 
            VALUES (:klinika_id,:szak_id,:felnot,:gyermek,:szemelyes,:online,:nonstop,:gondozas,:r_telefon,:ar)";

$result_in = $conn->prepare($sql_in);

$result_in->bindParam(':klinika_id', $klinika_id);
$result_in->bindParam(':szak_id', $szak_id);
$result_in->bindParam(':felnot', $felnot);
$result_in->bindParam(':gyermek', $gyermek);
$result_in->bindParam(':szemelyes', $szemelyes);
$result_in->bindParam(':online', $online);
$result_in->bindParam(':nonstop', $nonstop);
$result_in->bindParam(':gondozas', $gondozas);
$result_in->bindParam(':r_telefon', $r_telefon);
$result_in->bindParam(':ar', $ar);

if(isset($_POST["klinika_id"])){
    $klinika_id = $_POST["klinika_id"];
}else{
    $klinika_id = "Nincs post";
};
if(isset($_POST["szak_id"])){
    $szak_id = $_POST["szak_id"];
}else{
    $szak_id = "";
};
if(isset($_POST["felnot"])){
    $felnot = 1;
}else{
    $felnot = 0;
};
if(isset($_POST["gyermek"])){
    $gyermek = 1;
}else{
    $gyermek = 0;
};
if(isset($_POST["szemelyes"])){
    $szemelyes = 1;
}else{
    $szemelyes = 0;
};
if(isset($_POST["online"])){
    $online = 1;
}else{
    $online = 0;
};
if(isset($_POST["nonstop"])){
    $nonstop = 1;
}else{
    $nonstop = 0;
};
if(isset($_POST["gondozas"])){
    $gondozas = 1;
}else{
    $gondozas = 0;
};
if(isset($_POST["r_telefon"])){
    $r_telefon = 1;
}else{
    $r_telefon = 0;
};
if(isset($_POST["ar"])){
    $ar = 1;
}else{
    $ar = 0;
};


$result_in->execute();

if($result_in)  // Sikeres INSER utasítás
    
{
    $parameter = $klinika_id;

    $sql = "SELECT * FROM szakrendelo WHERE klinika_id=:parameter ORDER BY rendelo_id DESC LIMIT 1";
    $result = $conn->prepare($sql);
    $result->execute(['parameter' => $parameter]);
    
    if($result)  // Sikeres SELECT utasítás
    {
        $count = $result->rowCount();
    
        if($count>0) // Van eredményünk
        {

            while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                
                $db_rendelo_id = $row['rendelo_id'];
                $db_klinika_id = $row['klinika_id'];
                $db_szak_id = $row['szak_id'];
                $db_felnot = $row['felnot'];
                $db_gyermek = $row['gyermek'];
                $db_szemelyes = $row['szemelyes'];
                $db_online = $row['online'];
                $db_nonstop = $row['nonstop'];
                $db_gondozas = $row['gondozas'];
                $db_r_telefon = $row['r_telefon'];
                $db_ar = $row['ar'];
                
                $msg = array(
                    'rendelo_id' => $db_rendelo_id,
                    'klinika_id' => $db_klinika_id,
                    'szak_id'=>$db_szak_id, 
                    'felnot' => $db_felnot,
                    'gyermek' => $db_gyermek,
                    'szemelyes' => $db_szemelyes,
                    'online' => $db_online,
                    'nonstop' => $db_nonstop,
                    'gondozas' => $db_gondozas,
                    'r_telefon' => $db_r_telefon,
                    'ar' => $db_ar,
                    'error' => '0'
                );
            }

        }else{ //nincs ilyen felhasználó      
            $msg=array('error'=>'Nem rögzült a User');
        }
    
        echo json_encode($msg);
    
    }else {
        echo json_encode(array('error'=>'SELEC error reg_rendelo_php dobja'));
    }


}else {
    echo json_encode(array('error'=>'INSER error reg_renedlo_php dobja'));
}

?>