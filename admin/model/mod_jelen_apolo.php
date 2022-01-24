<?php
require_once('../../model/connect.php');

$jel_apolo = [
     'jel_a_id' => $_POST['jel_id'],
     'a_status' => $_POST['status']
];

$sql = 'UPDATE jel_apolo 
        SET a_status = :a_status
        WHERE jel_a_id = :jel_a_id';


$result = $conn->prepare($sql);

$result->bindParam(':jel_a_id', $jel_apolo['jel_a_id'], PDO::PARAM_INT);
$result->bindParam(':a_status', $jel_apolo['a_status'], PDO::PARAM_INT);

$result->execute();

if($result)  // Sikeres utasítás
{
    echo json_encode(array('jel_a_id'=>$jel_apolo['jel_a_id'],'error'=>'0'));

}else {
    echo json_encode(array('error'=>'az UPDAT nem sikerült'));
}


?>