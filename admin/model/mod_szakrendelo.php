<?php

require_once('../../model/connect.php');

$sql_in = "UPDATE
                szakrendelo
            SET
                felnot =:felnot,
                gyermek = :gyermek,
                szemelyes = :szemelyes,
                online = :online,
                nonstop = :nonstop,
                gondozas = :gondozas,
                r_telefon = :r_telefon,
                ar = :ar,
                statusz = :statusz
            WHERE
                rendelo_id = :rendelo_id";



$result_in = $conn->prepare($sql_in);

$result_in->bindParam(':rendelo_id', $rendelo_id);
$result_in->bindParam(':felnot', $felnot);
$result_in->bindParam(':gyermek', $gyermek);
$result_in->bindParam(':szemelyes', $szemelyes);
$result_in->bindParam(':online', $online);
$result_in->bindParam(':nonstop', $nonstop);
$result_in->bindParam(':gondozas', $gondozas);
$result_in->bindParam(':r_telefon', $r_telefon);
$result_in->bindParam(':ar', $ar);
$result_in->bindParam(':statusz', $statusz);


if(isset($_POST["rendelo_id"])){
    $rendelo_id = $_POST["rendelo_id"];
}else{
    $rendelo_id = "Nincs post";
};
if(isset($_POST["felnot"])){
    $felnot = $_POST["felnot"];
    if ($felnot == 'true'){
        $felnot=1;
    }else{
        $felnot=0;
    };    
}else{
    $felnot = 0;
};

if(isset($_POST["gyermek"])){
    $gyermek = $_POST["gyermek"];
    if ($gyermek =='true'){
        $gyermek=1;
    }else{
        $gyermek = 0;
    };
/*     echo "felnot: ".$felnot."------"." POST: ".$_POST["felnot"]."-------"; */
}else{
    $gyermek = 0;
};
if(isset($_POST["szemelyes"])){
    $szemelyes = $_POST["szemelyes"];
    if ($szemelyes=='true'){
        $szemelyes=1;
    }else{
        $szemelyes = 0;
    };
}else{
    $szemelyes = 0;
};
if(isset($_POST["online"])){
    $online = $_POST["online"];
    if ($online=='true'){
        $online=1;
    }else{
        $online = 0;
    };
}else{
    $online = 0;
};
if(isset($_POST["nonstop"])){
    $nonstop = $_POST["nonstop"];
    if ($nonstop=='true'){
        $nonstop=1;
    }else{
        $nonstop = 0;
    };
}else{
    $nonstop = 0;
};
if(isset($_POST["gondozas"])){
    $gondozas = $_POST["gondozas"];
    if ($gondozas=='true'){
        $gondozas=1;
    }else{
        $gondozas = 0;
    };
}else{
    $gondozas = 0;
};
if(isset($_POST["r_telefon"])){
    $r_telefon = $_POST["r_telefon"];
}else{
    $r_telefon = 0;
};
if(isset($_POST["ar"])){
    $ar = $_POST["ar"];
}else{
    $ar = 0;
};
$statusz=1;


$result_in->execute();

if($result_in)  // Sikeres INSER utasítás
{
    $msg = array('error' => '0');
}else{ //nincs ilyen felhasználó      
    $msg = array('error'=>'Nem rögzült a User');
};
    
echo json_encode($msg);

?>