<?php

$jelszo = "123456";

$titkositott_jelszo = password_hash($jelszo, PASSWORD_DEFAULT);


echo $jelszo."</br>";
echo $titkositott_jelszo ."</br>";

if(password_verify($jelszo, $titkositott_jelszo)){
    echo "A két jelszó megegyezik.";  
} else echo "Különbözik a  két jelszó.";


?>