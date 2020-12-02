<?php
// Age From Birthday (Birthyear)
// Doğum gününden (Yılından) Yaş Hesaplama
class DegreClass {
public $birthyear;

public function agefromBirthyear(){
if (isset($this->birthyear)):
$yearnow = date("Y");
$age = $yearnow - $this->birthyear;
return $age;
endif;
}

}
$degre = new DegreClass();
$degre->birthyear = 1984;
echo $degre->agefromBirthyear();


?>
