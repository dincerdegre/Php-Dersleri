<?php
// Klasik PHP Yapısı ile
function agefromBirthyear($birthyear){
if (isset($birthyear)):
$yearnow = date("Y");
$age = $yearnow - $birthyear;
return $age;
endif;
}

echo agefromBirthyear(1984);
?>
