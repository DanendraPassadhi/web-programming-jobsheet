<!DOCTYPE html>
<html>
<head>
    <title>Array Terindeks</title>
</head>
<body>
    <h2>Array Terindeks</h2>
    <?php
    $Listdosen = ["Elok Nur Hamdana", "Unggul Pamenang", "Bagas Nugraha"];
    
    for ($i = 0; $i < count($Listdosen); $i++) {
        echo $Listdosen[$i] . "<br>";
    }
    ?>
</body>
</html>