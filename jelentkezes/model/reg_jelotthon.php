<?php

require_once('../../model/connect.php');

$sql_in = "INSERT INTO jel_otthon (o_nev,o_irsz,o_varos,o_utca,o_telefon,o_email,o_kapcs,o_status) 
            VALUES (:o_nev,:o_irsz,:o_varos,:o_utca,:o_telefon,:o_email,:o_kapcs,:o_status)";

$result_in = $conn->prepare($sql_in);

$result_in->bindParam(':o_nev', $o_nev);
$result_in->bindParam(':o_irsz', $o_irsz);
$result_in->bindParam(':o_varos', $o_varos);
$result_in->bindParam(':o_utca', $o_utca);
$result_in->bindParam(':o_telefon', $o_telefon);
$result_in->bindParam(':o_email', $o_email);
$result_in->bindParam(':o_kapcs', $o_kapcs);
$result_in->bindParam(':o_status', $o_status);

if(isset($_POST["o_nev"])){
    $o_nev = $_POST["o_nev"];
}else{
    $o_nev = "Nincs post";
};
if(isset($_POST["o_irsz"])){
    $o_irsz = $_POST["o_irsz"];
}else{
    $o_irsz = "";
};
if(isset($_POST["o_varos"])){
    $o_varos = $_POST["o_varos"];
}else{
    $o_varos = "";
};
if(isset($_POST["o_utca"])){
    $o_utca = $_POST["o_utca"];
}else{
    $o_utca = "";
};
if(isset($_POST["o_telefon"])){
    $o_telefon = $_POST["o_telefon"];
}else{
    $o_telefon = "";
};
if(isset($_POST["o_email"])){
    $o_email = $_POST["o_email"];
}else{
    $o_email = "";
};
if(isset($_POST["o_kapcs"])){
    $o_kapcs = $_POST["o_kapcs"];
}else{
    $o_kapcs = "";
};
if(isset($_POST["o_status"])){
    $o_status = $_POST["o_status"];
}else{
    $o_status = "";
};


$result_in->execute();

if($result_in)  // Sikeres INSER utasítás
{
        $msg=array('o_nev'=>$o_nev, 'error'=>'0');
        echo json_encode($msg);
}else {
    echo json_encode(array('error'=>'INSER error reg_jelotthon_php dobja'));
}

?>