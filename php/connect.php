<?php

$dbServer = 'tbns51.tarhely.eu';
$dbUser = 'tozsdepa_vcadmin';
$dbPassword = '44VisitorCare88';
$dbName = 'tozsdepa_visitor';


try {
    $conn = new PDO(
        "mysql:host=$dbServer;dbname=$dbName;charset=utf8mb4",
        $dbUser,$dbPassword,
        array(
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            )
        );

}catch (PDOException $e) {
        die("Hiba az SQL Szerver kapcsolattal: ". $e->getMessage()); 
    }
    
    if(isset($_POST['kilepes'])){
        echo "<script>alert('connect_php ---- kiléptetés')</script>";

}

?>