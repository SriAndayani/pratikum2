<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function volume($luas,$tinggi){
    $volume = $luas * $tinggi;
    echo "Volume ialah : $volume cm";
    }
    function luas_persegi($p, $l, $t){
    $luas = $p * $l;
    echo "Luas Persegi ialah : $luas cm<br/>"; volume($luas, $t);
    }
    $panjang = 20;
    $lebar = 10;
    $tinggi = 5;
    echo "Panjang Persegi : $panjang cm<br />";
    echo "Lebar Persegi : $lebar cm<br/>";
    echo "Tinggi Persegi : $tinggi cm<br/><br/>";
    luas_persegi($panjang, $lebar, $tinggi);
    ?>
</body>
</html>