<?php
$jual = 7500;
$beli = 8000;
function hitungJumlahAnakKambing($jual, $beli, $jual_untung_per_ekor){
    // dimisalkan harga jual kambing per ekor = 500, karena di soal tidak dijabarkan
    $harga_jual_per_ekor = 500;
    $harga_beli_per_ekor = $harga_jual_per_ekor - $jual_untung_per_ekor;
    $jumlah_kambing_dibeli = $beli / $harga_beli_per_ekor;
    return $jumlah_kambing_dibeli;
}

echo "Harga Beli = Rp. ". $beli ."<br/>";
echo "Harga Jual = Rp. ". $jual ."<br/>";
echo "Keuntungan = Rp. 300 <br/>";
echo "Berapa Jumlah Kambing Yang Dibeli? Jawaban : ". hitungJumlahAnakKambing($jual, $beli, 300). " Ekor";

?>
