<?php
// function perkenalan(){
//     echo "Assalamualaikum, ";
//     echo "Perkenalkan, nama saya Elok<br/>"; //Tulis sesuai nama kalian
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan();
// perkenalan();

// //membuat fungsi
// function perkenalan($nama, $salam="Assalamualaikum"){
//     echo $salam . ", ";
//     echo "Perkenalkan, nama saya " . $nama . "<br/>";
//     echo "Senang berkenalan dengan Anda<br/>";
// }

// //memanggil fungsi yang sudah dibuat
// perkenalan("Hamdana", "Hallo");

// echo "<hr>";

// $saya = "Danendra";
// $ucapanSalam = "Selamat pagi";

// //memanggil lagi
// perkenalan($saya, $ucapanSalam);

//membuat fungsi
function hitungUmur($thn_lahir, $thn_sekarang){
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam="Assalamualaikum") {
    echo $salam . ".";
    echo "Perkenalkan, nama saya " . $nama . "<br/>";
}

//memanggil fungsi lain
echo "Saya berusia " . hitungUmur(2004, 2024) . " tahun<br/>";
echo "Senang berkenalan dengan anda<br/>";

//memanggil fungsi perkenalan
perkenalan("Danendra");

?>