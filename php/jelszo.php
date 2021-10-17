<?php

$jelszo = "44VisitorCare88";
$jelszo_bad = "44VisitorCare8";

$titkositott_jelszo = password_hash($jelszo, PASSWORD_DEFAULT);


$db_pw = "$2y$10$FcuRdiL20rF7oOT7PUDX/u2jneks7gyXEqbMLW8zjEw";
$genralt ='$2y$10$m5p./4L.4Oxy1HQ2Ps7sFu7G6tsv3tf.lkv/nunfw3fp2xlzHnjc.';

echo $jelszo."</br>";
echo $titkositott_jelszo ."</br>";

if(password_verify($jelszo, $genralt)){
    echo "A két jelszó megegyezik.";  
} else echo "Különbözik a  két jelszó.";


?>