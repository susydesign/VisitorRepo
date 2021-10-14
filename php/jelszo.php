<?php

$jelszo = "44VisitorCare88";
$titkositott_jelszo = password_hash($jelszo, PASSWORD_DEFAULT);
echo $titkositott_jelszo;

?>