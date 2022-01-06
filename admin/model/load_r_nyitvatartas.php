<?php
require_once('../../model/connect.php');

$nyitvatartas = [
    'rendelo_id' => $_POST['rendelo_id']
];

$sql = 'SELECT * 
        FROM r_nyitvatartas 
        WHERE rendelo_id = :rendelo_id';

$result = $conn->prepare($sql);
$result->bindParam(':rendelo_id', $nyitvatartas['rendelo_id'], PDO::PARAM_INT);
$result->execute();

if($result)  // Sikeres utasítás
{
    $count = $result->rowCount();
    $nyitvatartas = array();
    $nyitvatartasok= array();

    if($count>0) // Van ilyen szakrendelő
    {
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $i=0;
        
        foreach ($rows as $row ){
            $nyitvatartas=array(
                'rendelo_id'=>$row['rendelo_id'], 
                'day1_nyit' => date("H:i", strtotime($row['day1_nyit'])), 
                'day1_zar' => date("H:i", strtotime($row['day1_zar'])),                       
                'day2_nyit' => date("H:i", strtotime($row['day2_nyit'])), 
                'day2_zar' => date("H:i", strtotime($row['day2_zar'])),                       
                'day3_nyit' => date("H:i", strtotime($row['day3_nyit'])), 
                'day3_zar' => date("H:i", strtotime($row['day3_zar'])),                       
                'day4_nyit' => date("H:i", strtotime($row['day4_nyit'])), 
                'day4_zar' => date("H:i", strtotime($row['day4_zar'])),                       
                'day5_nyit' => date("H:i", strtotime($row['day5_nyit'])), 
                'day5_zar' => date("H:i", strtotime($row['day5_zar'])),                       
                'day6_nyit' => date("H:i", strtotime($row['day6_nyit'])), 
                'day6_zar' => date("H:i", strtotime($row['day6_zar'])),                       
                'day7_nyit' => date("H:i", strtotime($row['day7_nyit'])), 
                'day7_zar' => date("H:i", strtotime($row['day7_zar'])),                       
                'error' => "0",
            );
            array_push($nyitvatartasok,$nyitvatartas);
            $i++;
        };
    }else{
        //Nincs még ilyen szakrendelő 
        $nyitvatartas = array('error'=>'1');
        array_push($nyitvatartasok,$nyitvatartas);
    };
    echo json_encode($nyitvatartasok);
}

?>