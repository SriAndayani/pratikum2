<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Increment Operators in PHP</title>
</head>
<body>
    <h1>Demo Pre-increment dan Post-increment dalam PHP</h1>
    
    <?php
    // Inisialisasi variabel
    $a = 5;
    $b = 5;

    // Output nilai awal
    echo "<h2>Nilai Awal</h2>";
    echo "Nilai \$a: $a <br>";
    echo "Nilai \$b: $b <br>";

    // Menggunakan pre-increment
    echo "<h2>Pre-increment</h2>";
    echo "Menggunakan ++\$a: " . ++$a . "<br>";  // Menambahkan nilai $a dulu, lalu menampilkannya
    echo "Nilai akhir \$a: $a <br>";            // Menampilkan nilai $a setelah increment

    // Menggunakan post-increment
    echo "<h2>Post-increment</h2>";
    echo "Menggunakan \$b++: " . $b++ . "<br>";  // Menampilkan nilai $b, lalu menambahkannya
    echo "Nilai akhir \$b: $b <br>";            // Menampilkan nilai $b setelah increment

    // Contoh penggunaan dalam loop
    echo "<h2>Loop Example with Increment Operators</h2>";
    echo "Loop dengan pre-increment:<br>";
    for ($i = 0; $i < 5; ++$i) {
        echo $i . " ";
    }

    echo "<br><br>Loop dengan post-increment:<br>";
    for ($i = 0; $i < 5; $i++) {
        echo $i . " ";
    }
    ?>
</body>
</html>