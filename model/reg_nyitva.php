<?php

if(isset($_POST["rendelo_id"])){
    $rendelo_id = $_POST["rendelo_id"];
}else{
    $rendelo_id = "99";
};
if(isset($_POST["day1_nyit"])){
    $day1_nyit = new DateTime($_POST["day1_nyit"]);
}else{
    $day1_nyit = new DateTime("00:00");
};
if(isset($_POST["day1_zar"])){
    $day1_zar = new DateTime($_POST["day1_zar"]);
}else{
    $day1_zar = new DateTime("00:00");
};
if(isset($_POST["day2_nyit"])){
    $day2_nyit = new DateTime($_POST["day2_nyit"]);
}else{
    $day2_nyit = new DateTime("00:00");
};
if(isset($_POST["day2_zar"])){
    $day2_zar = new DateTime($_POST["day2_zar"]);
}else{
    $day2_zar = new DateTime("00:00");
};
if(isset($_POST["day3_nyit"])){
    $day3_nyit = new DateTime($_POST["day3_nyit"]);
}else{
    $day3_nyit = new DateTime("00:00");
};
if(isset($_POST["day3_zar"])){
    $day3_zar = new DateTime($_POST["day3_zar"]);
}else{
    $day3_zar = new DateTime("00:00");
};
if(isset($_POST["day4_nyit"])){
    $day4_nyit = new DateTime($_POST["day4_nyit"]);
}else{
    $day4_nyit = new DateTime("00:00");
};
if(isset($_POST["day4_zar"])){
    $day4_zar = new DateTime($_POST["day4_zar"]);
}else{
    $day4_zar = new DateTime("00:00");
};
if(isset($_POST["day5_nyit"])){
    $day5_nyit = new DateTime($_POST["day5_nyit"]);
}else{
    $day5_nyit = new DateTime("00:00");
};
if(isset($_POST["day5_zar"])){
    $day5_zar = new DateTime($_POST["day5_zar"]);
}else{
    $day5_zar = new DateTime("00:00");
};
if(isset($_POST["day6_nyit"])){
    $day6_nyit = new DateTime($_POST["day6_nyit"]);
}else{
    $day6_nyit = new DateTime("00:00");
};
if(isset($_POST["day6_zar"])){
    $day6_zar = new DateTime($_POST["day6_zar"]);
}else{
    $day6_zar = new DateTime("00:00");
};
if(isset($_POST["day7_nyit"])){
    $day7_nyit = new DateTime($_POST["day7_nyit"]);
}else{
    $day7_nyit = new DateTime("00:00");
};
if(isset($_POST["day7_zar"])){
    $day7_zar = new DateTime($_POST["day7_zar"]);
}else{
    $day7_zar = new DateTime("00:00");
};



require_once('connect.php');
$sql_in = "INSERT INTO r_nyitvatartas (rendelo_id,day1_nyit,day1_zar,day2_nyit,day2_zar,day3_nyit,day3_zar,day4_nyit,day4_zar,day5_nyit,day5_zar,day6_nyit,day6_zar,day7_nyit,day7_zar) 
            VALUES (:rendelo_id,:day1_nyit,:day1_zar,:day2_nyit,:day2_zar,:day3_nyit,:day3_zar,:day4_nyit,:day4_zar,:day5_nyit,:day5_zar,:day6_nyit,:day6_zar,:day7_nyit,:day7_zar)";

$result_in = $conn->prepare($sql_in);

$result_in->bindParam(':rendelo_id', $rendelo_id);
$result_in->bindParam(':day1_nyit', $day1_nyit->format('H:i'));
$result_in->bindParam(':day1_zar', $day1_zar->format('H:i'));
$result_in->bindParam(':day2_nyit', $day2_nyit->format('H:i'));
$result_in->bindParam(':day2_zar', $day2_zar->format('H:i'));
$result_in->bindParam(':day3_nyit', $day3_nyit->format('H:i'));
$result_in->bindParam(':day3_zar', $day3_zar->format('H:i'));
$result_in->bindParam(':day4_nyit', $day4_nyit->format('H:i'));
$result_in->bindParam(':day4_zar', $day4_zar->format('H:i'));
$result_in->bindParam(':day5_nyit', $day5_nyit->format('H:i'));
$result_in->bindParam(':day5_zar', $day5_zar->format('H:i'));
$result_in->bindParam(':day6_nyit', $day6_nyit->format('H:i'));
$result_in->bindParam(':day6_zar', $day6_zar->format('H:i'));
$result_in->bindParam(':day7_nyit', $day7_nyit->format('H:i'));
$result_in->bindParam(':day7_zar', $day7_zar->format('H:i'));






$result_in->execute();

if($result_in)  // Sikeres INSER utasítás
{
        $msg=array(
                    'rendelo_id'=>$rendelo_id, 
                    'day1_nyit'=>$day1_nyit->format('H:i'),
                    'day1_zar'=>$day1_zar->format('H:i'),
                    'day2_nyit'=>$day2_nyit->format('H:i'),
                    'day2_zar'=>$day2_zar->format('H:i'),
                    'day3_nyit'=>$day3_nyit->format('H:i'),
                    'day3_zar'=>$day3_zar->format('H:i'),
                    'day4_nyit'=>$day4_nyit->format('H:i'),
                    'day4_zar'=>$day4_zar->format('H:i'),
                    'day5_nyit'=>$day5_nyit->format('H:i'),
                    'day5_zar'=>$day5_zar->format('H:i'),
                    'day6_nyit'=>$day6_nyit->format('H:i'),
                    'day6_zar'=>$day6_zar->format('H:i'),
                    'day7_nyit'=>$day7_nyit->format('H:i'),
                    'day7_zar'=>$day7_zar->format('H:i'),
                    'error'=>"0");
        echo json_encode($msg);
}else {
    echo json_encode(array('error'=>'INSER error reg_nyitvatartas_php dobja'));
}

?>