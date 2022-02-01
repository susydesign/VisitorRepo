<?php

require_once('../../../model/connect.php');

$sql_in = "UPDATE intezmeny 
            SET i_nev = :i_nev,
                i_irsz = :i_irsz,
                i_varos = :i_varos,
                i_utca = :i_utca,
                i_hsz = :i_hsz,
                i_telefon = :i_telefon,
                i_email = :i_email,
                i_kapcs = :i_kapcs,
                i_rolunk = :i_rolunk,
                i_status = :i_status
            WHERE int_id = :int_id";

$result_in = $conn->prepare($sql_in);

$result_in->bindParam(':int_id', $int_id);
$result_in->bindParam(':i_nev', $i_nev);
$result_in->bindParam(':i_irsz', $i_irsz);
$result_in->bindParam(':i_varos', $i_varos);
$result_in->bindParam(':i_utca', $i_utca);
$result_in->bindParam(':i_hsz', $i_hsz);
$result_in->bindParam(':i_telefon', $i_telefon);
$result_in->bindParam(':i_email', $i_email);
$result_in->bindParam(':i_kapcs', $i_kapcs);
$result_in->bindParam(':i_rolunk', $i_rolunk);
$result_in->bindParam(':i_status', $i_status);

if(isset($_POST["int_id"])){
    $int_id = $_POST["int_id"];
}else{
    $int_id = "Nincs post";
};

if(isset($_POST["i_nev"])){
    $i_nev = $_POST["i_nev"];
}else{
    $i_nev = "";
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
if(isset($_POST["i_hsz"])){
    $i_hsz = $_POST["i_hsz"];
}else{
    $i_hsz = "";
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
if(isset($_POST["i_rolunk"])){
    $i_rolunk = $_POST["i_rolunk"];
}else{
    $i_rolunk = "";
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
    echo json_encode(array('error'=>'MODIFY error mod_intezmeny_php dobja'));
}

?>