<?php
require_once('../../model/connect.php');

$jel_otthon = [
     'jel_o_id' => $_POST['jel_id'],
     'o_status' => $_POST['status']
];

$sql = 'UPDATE jel_otthon 
        SET o_status = :o_status
        WHERE jel_o_id = :jel_o_id';


$result = $conn->prepare($sql);

$result->bindParam(':jel_o_id', $jel_otthon['jel_o_id'], PDO::PARAM_INT);
$result->bindParam(':o_status', $jel_otthon['o_status'], PDO::PARAM_INT);

$result->execute();

if($result)  // Sikeres utasítás
{
    echo json_encode(array('jel_o_id'=>$jel_otthon['jel_o_id'],'error'=>'0'));

}else {
    echo json_encode(array('error'=>'az UPDAT nem sikerült'));
}


?>