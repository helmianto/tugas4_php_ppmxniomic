<?php
$terpakai = 8891;
$saluran = 523;
function hitungPemakaianAir($terpakai, $saluran){
    return $terpakai / $saluran;
}

echo "Jumlah Saluran = ". $saluran ."<br/>";
echo "Jumlah Terpakai = ". $terpakai ."<br/>";
echo "Rata - Rata Pemakaian = ...? <br/>";
echo "Jawaban : ". hitungPemakaianAir($terpakai, $saluran) . " liter/keluarga";

?>