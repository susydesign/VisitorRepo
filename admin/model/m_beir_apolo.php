<?php

require_once('../../model/connect.php');

$sql_in = "INSERT INTO apolo (a_nev,a_szul,a_fenykep,a_irsz,a_varos,a_utca,a_telefon,a_email,a_v_megnev,a_v_ido,a_v_doksi,a_oradij,a_minosites,a_status) 
            VALUES (:a_nev,:a_szul,:a_fenykep,:a_irsz,:a_varos,:a_utca,:a_telefon,:a_email,:a_v_megnev,:a_v_ido,:a_v_doksi,:a_oradij,:a_minosites,:a_status)";

$result_in = $conn->prepare($sql_in);

$result_in->bindParam(':a_nev', $a_nev);
$result_in->bindParam(':a_szul', $a_szul);
$result_in->bindParam(':a_fenykep', $a_fenykep);
$result_in->bindParam(':a_irsz', $a_irsz);
$result_in->bindParam(':a_varos', $a_varos);
$result_in->bindParam(':a_utca', $a_utca);
$result_in->bindParam(':a_telefon', $a_telefon);
$result_in->bindParam(':a_email', $a_email);
$result_in->bindParam(':a_v_megnev', $a_v_megnev);
$result_in->bindParam(':a_v_ido', $a_v_ido);
$result_in->bindParam(':a_v_doksi', $a_v_doksi);
$result_in->bindParam(':a_oradij', $a_oradij);
$result_in->bindParam(':a_minosites', $a_minosites);
$result_in->bindParam(':a_status', $a_status);

$a_status = 1;

if(isset($_POST["a_nev"])){
    $a_nev = $_POST["a_nev"];
}else{
    $a_nev = "Nincs post";
};
if(isset($_POST["a_szul"])){
    $a_szul = $_POST["a_szul"];
}else{
    $a_szul = "";
};
if(isset($_POST["a_fenykep"])){
    $a_fenykep = $_POST["a_fenykep"];
}else{
    $a_fenykep = "";
};
if(isset($_POST["a_irsz"])){
    $a_irsz = $_POST["a_irsz"];
}else{
    $a_irsz = "";
};
if(isset($_POST["a_varos"])){
    $a_varos = $_POST["a_varos"];
}else{
    $a_varos = "";
};
if(isset($_POST["a_utca"])){
    $a_utca = $_POST["a_utca"];
}else{
    $a_utca = "";
};
if(isset($_POST["a_telefon"])){
    $a_telefon = $_POST["a_telefon"];
}else{
    $a_telefon = "";
};
if(isset($_POST["a_email"])){
    $a_email = $_POST["a_email"];
}else{
    $a_email = "";
};
if(isset($_POST["a_v_megnev"])){
    $a_v_megnev = $_POST["a_v_megnev"];
}else{
    $a_v_megnev = "";
};
if(isset($_POST["a_v_ido"])){
    $a_v_ido = $_POST["a_v_ido"];
}else{
    $a_v_ido = "";
};
if(isset($_POST["a_v_doksi"])){
    $a_v_doksi = $_POST["a_v_doksi"];
}else{
    $a_v_doksi = "";
};
if(isset($_POST["a_oradij"])){
    $a_oradij = $_POST["a_oradij"];
}else{
    $a_oradij = "";
};
if(isset($_POST["a_minosites"])){
    $a_minosites = $_POST["a_minosites"];
}else{
    $a_minosites = "";
};
if(isset($_POST["a_status"])){
    $a_status = $_POST["a_status"];
}else{
    $a_status = "";
};


$result_in->execute();

if($result_in)  // Sikeres INSER utasítás
{
        $msg=array('a_nev'=>$a_nev, 'error'=>'0');
        echo json_encode($msg);
}else {
    echo json_encode(array('error'=>'INSER error m_beir_apolo_php dobja'));
}

?>