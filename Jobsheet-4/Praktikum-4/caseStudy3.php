<?php
echo "<form id='skor'>
    <label for='skor1'>Masukkan skor 1:</label>
    <input type='number' id='skor1' name='skor1'><br>
    <label for='skor2'>Masukkan skor 2:</label>
    <input type='number' id='skor2' name='skor2'><br>
    <input type='button' value='Hitung' onclick='hitungSkor()'>
</form>
<div id='hasil'></div>

<script>
    function hitungSkor() {
        let skor1 = parseInt(document.getElementById('skor1').value);
        let skor2 = parseInt(document.getElementById('skor2').value);
        let totalSkor = skor1 + skor2;
        let hadiah = totalSkor > 500 ? 'YA' : 'TIDAK';
        
        document.getElementById('hasil').innerHTML = 
            '<h3>Total skor pemain adalah: ' + totalSkor + '</h3>' +
            '<h3>Apakah pemain mendapatkan hadiah tambahan? ' + hadiah + '</h3>';
    }
</script>";
?>