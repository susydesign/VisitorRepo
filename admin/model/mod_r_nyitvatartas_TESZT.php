<?php
require_once('../../model/connect.php');

$sql_in = "UPDATE r_nyitvatartas SET day4_nyit = :day4_nyit WHERE rendelo_id =:rendelo_id";

$result_in = $conn->prepare($sql_in);

$result_in->bindParam(':rendelo_id', $rendelo_id);
$result_in->bindParam(':day4_nyit', $day4_nyit);

if(isset($_POST["rendelo_id"])){
    $rendelo_id = $_POST["rendelo_id"];
}else{
    $rendelo_id = "Nincs post";
};
if(isset($_POST["day4_nyit"])){
    $day4_nyit = date("H:i",strtotime($_POST["day4_nyit"]));
/*     echo "nyitás: ".$day4_nyit; */
}else{
    $day4_nyit = new DateTime("00:00");
};

$result_in->execute();

if($result_in)  // Sikeres INSER utasítás
{
        $msg=array(
                    'rendelo_id'=>$rendelo_id, 
                    'error'=>"0");
        echo json_encode($msg);
}else {
    echo json_encode(array('error'=>'INSER error mod_nyitvatartas_php dobja'));
}

?>