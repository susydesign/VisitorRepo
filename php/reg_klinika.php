<?php

require_once('connect.php');


$sql_in = "INSERT INTO klinika (klinika_nev,k_address_orszag,k_address_irsz,k_address_varos,k_address_utca,k_address_hsz,k_phone,k_mobil,k_web,k_logo,k_rolunk,geoframe) 
            VALUES (:klinika_nev,:k_address_orszag,:k_address_irsz,:k_address_varos,:k_address_utca,:k_address_hsz,:k_phone,:k_mobil,:k_web,:k_logo,:k_rolunk,:geoframe)";

$result_in = $conn->prepare($sql_in);

$result_in->bindParam(':klinika_nev', $klinika_nev);
$result_in->bindParam(':k_address_orszag', $k_address_orszag);
$result_in->bindParam(':k_address_irsz', $k_address_irsz);
$result_in->bindParam(':k_address_varos', $k_address_varos);
$result_in->bindParam(':k_address_utca', $k_address_utca);
$result_in->bindParam(':k_address_hsz', $k_address_hsz);
$result_in->bindParam(':k_phone', $k_phone);
$result_in->bindParam(':k_mobil', $k_mobil);
$result_in->bindParam(':k_web', $k_web);
$result_in->bindParam(':k_logo', $k_logo);
$result_in->bindParam(':k_rolunk', $k_rolunk);
$result_in->bindParam(':geoframe', $geoframe);

if(isset($_POST["klinika_nev"])){
    $klinika_nev = $_POST["klinika_nev"];
}else{
    $klinika_nev = "Nincs post";
};
if(isset($_POST["k_address_orszag"])){
    $k_address_orszag = $_POST["k_address_orszag"];
}else{
    $k_address_orszag = "";
};
if(isset($_POST["k_address_irsz"])){
    $k_address_irsz = $_POST["k_address_irsz"];
}else{
    $k_address_irsz = "";
};
if(isset($_POST["k_address_varos"])){
    $k_address_varos = $_POST["k_address_varos"];
}else{
    $k_address_varos = "";
};
if(isset($_POST["k_address_utca"])){
    $k_address_utca = $_POST["k_address_utca"];
}else{
    $k_address_utca = "";
};
if(isset($_POST["k_address_hsz"])){
    $k_address_hsz = $_POST["k_address_hsz"];
}else{
    $k_address_hsz = "";
};
if(isset($_POST["k_phone"])){
    $k_phone = $_POST["k_phone"];
}else{
    $k_phone = "";
};
if(isset($_POST["k_mobil"])){
    $k_mobil = $_POST["k_mobil"];
}else{
    $k_mobil = "";
};
if(isset($_POST["k_web"])){
    $k_web = $_POST["k_web"];
}else{
    $k_web = "";
};
if(isset($_POST["k_logo"])){
    $k_logo = $_POST["k_logo"];
}else{
    $k_logo = "";
};
if(isset($_POST["k_rolunk"])){
    $k_rolunk = $_POST["k_rolunk"];
}else{
    $k_rolunk = "";
};
if(isset($_POST["geoframe"])){
    $geoframe = $_POST["geoframe"];
}else{
    $geoframe = "";
};


$result_in->execute();

if($result_in)  // Sikeres INSER utasítás
{
        $msg=array('klinika_nev'=>$klinika_nev);
        echo json_encode($msg);
}else {
    echo json_encode(array('error'=>'INSER error reg_klinika_php dobja'));
}

?>