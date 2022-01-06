<?php
require_once('../../model/connect.php');

$szakrendelo = [
    'klinika_id'=> $_POST['klinika_id'],
    'szak_id' => $_POST['szak_id']
];

$sql = 'SELECT * 
        FROM szakrendelo 
        WHERE klinika_id =:klinika_id AND szak_id = :szak_id';

$result = $conn->prepare($sql);
$result->bindParam(':klinika_id', $szakrendelo['klinika_id'], PDO::PARAM_INT);
$result->bindParam(':szak_id', $szakrendelo['szak_id'], PDO::PARAM_INT);
$result->execute();

if($result)  // Sikeres utasítás
{
    $count = $result->rowCount();
    $rendelo = array();
    $rendelok= array();

    if($count>0) // Van ilyen szakrendelő
    {
        $rows = $result->fetchAll(PDO::FETCH_ASSOC);
        $i=0;
        
        foreach ($rows as $row ){
            $rendelo=array(
                'rendelo_id'=>$row['rendelo_id'], 
                'klinika_id' => $row['klinika_id'], 
                'szak_id' => $row['szak_id'],                       
                'felnot' => $row['felnot'],                       
                'gyermek' => $row['gyermek'],                       
                'szemelyes' => $row['szemelyes'],                       
                'online' => $row['online'],                       
                'nonstop' => $row['nonstop'],                       
                'gondozas' => $row['gondozas'],
                'r_telefon' => $row['r_telefon'],
                'ar' => $row['ar'],
                'rendelo_db' => $count,
                'error' => "0",
                'index' => $i
            );
            array_push($rendelok,$rendelo);
            $i++;
        };
    }else{
        //Nincs még ilyen szakrendelő 
        $rendelo=array(
            'error'=>'1'
        );
        array_push($rendelok,$rendelo);

    };
    echo json_encode($rendelok);
}

?>