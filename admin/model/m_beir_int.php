<?php

require_once('../../model/connect.php');

$sql_in = "INSERT INTO intezmeny (i_nev,i_irsz,i_varos,i_utca,i_telefon,i_email,i_kapcs,i_status) 
            VALUES (:i_nev,:i_irsz,:i_varos,:i_utca,:i_telefon,:i_email,:i_kapcs,:i_status)";

$result_in = $conn->prepare($sql_in);

$result_in->bindParam(':i_nev', $i_nev);
$result_in->bindParam(':i_irsz', $i_irsz);
$result_in->bindParam(':i_varos', $i_varos);
$result_in->bindParam(':i_utca', $i_utca);
$result_in->bindParam(':i_telefon', $i_telefon);
$result_in->bindParam(':i_email', $i_email);
$result_in->bindParam(':i_kapcs', $i_kapcs);
$result_in->bindParam(':i_status', $i_status);

if(isset($_POST["i_nev"])){
    $i_nev = $_POST["i_nev"];
}else{
    $i_nev = "Nincs post";
};
if(isset($_POST["i_irsz"])){
    $i_irsz = $_POST["i_irsz"];
}else{
    $i_irsz = "";
};
if(isset($_POST["i_varos"])){
    $i_varos = $_POST["i_varos"];
}else{
    $i_varos = "";
};
if(isset($_POST["i_utca"])){
    $i_utca = $_POST["i_utca"];
}else{
    $i_utca = "";
};
if(isset($_POST["i_telefon"])){
    $i_telefon = $_POST["i_telefon"];
}else{
    $i_telefon = "";
};
if(isset($_POST["i_email"])){
    $i_email = $_POST["i_email"];
}else{
    $i_email = "";
};
if(isset($_POST["i_kapcs"])){
    $i_kapcs = $_POST["i_kapcs"];
}else{
    $i_kapcs = "";
};
if(isset($_POST["i_status"])){
    $i_status = $_POST["i_status"];
}else{
    $i_status = "";
};


$result_in->execute();

if($result_in)  // Sikeres INSER utasítás
{
        $msg=array('i_nev'=>$i_nev, 'error'=>'0');
        echo json_encode($msg);
}else {
    echo json_encode(array('error'=>'INSER error reg_jelotthon_php dobja'));
}

?>