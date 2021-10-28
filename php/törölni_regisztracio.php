<?php
require_once('database.php');



/*
$email = $_POST["email"];
$phone = $_POST["phone"];
$u_address_orszag = $_POST["u_address_orszag"];
$u_address_irsz = $_POST["u_address_irsz"];
$u_address_varos = $_POST["u_address_varos"];
$u_address_utca = $_POST["u_address_utca"];
$u_address_hsz = $_POST["u_address_hsz"];
$u_address_em = $_POST["u_address_em"];
$u_address_ajto = $_POST["u_address_ajto"];
$u_address_hrsz = $_POST["u_address_hrsz"];
*/



$sql_in = "INSERT INTO User (felh_name, email) VALUES (:felh_name, :email)";
$result_in = $conn->prepare($sql_in);

$result_in->bindParam(':felh_name', $felh_name);
$result_in->bindParam(':email', $email);

// paraméterek összegyűjtése
if(isset($_POST["felh_name"])){
    $felh_name = $_POST["felh_name"];
}else{
    $felh_name = "Nincs Param név";
};
if(isset($_POST["email"])){
    $email = $_POST["email"];
}else{
    $email = "Nincs Param email";
};

$result_in->execute();


if($result_in)  // Sikeres INSER utasítás
{
    $parameter = $felh_name;

    $sql = "SELECT * FROM User WHERE felh_name=:parameter";
    $result = $conn->prepare($sql);

    $result->execute(['parameter'=>$parameter]);
    
    if($result)  // Sikeres SELECT utasítás
    {
        $count = $result->rowCount();
    
        if($count>0) // Van eredményünk
        {

            while ($row = $result->fetch(PDO::FETCH_ASSOC)){
                $db_felh_name = $row['felh_name'];
                $db_user_id = $row['user_id'];
                $msg = array('felh_name'=>$db_felh_name, 'user_id' => $db_user_id);
            }

        }else{ //nincs ilyen felhasználó      
            $msg=array('felh_name'=>'Nincs');
        }
    
        echo json_encode($msg);
    
    }else {
        echo json_encode(array('error'=>'SELEC error regiszrtracio_php dobja'));
    }

}else {
    echo json_encode(array('error'=>'INSER error regiszrtracio_php dobja'));
}


?>