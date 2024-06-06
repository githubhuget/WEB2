<?php
//array multidimensi
$hewan = [
    [
    "nama" => "harimau",
    "jenis" => "mamalia",
    "habitat" => "hutan",
    "makanan" => "daging",
    "gambar" => "harimau.jpg"
    ],

    [
    "nama" => "kucing",
    "jenis" => "mamalia",
    "habitat" => "di alam liar",
    "makanan" => "daging",
    "gambar" => "kucing.jpg"
    ],

    [
    "nama" => "ikan",
    "jenis" => "ikan air tawar",
    "habitat" => "sungai",
    "makanan" => "omnivora",
    "gambar" => "ikaN.jpg"
    ],

    [
    "nama" => "kudanil",
    "jenis" => "mamalia",
    "habitat" => "danau",
    "makanan" => "tumbuhan",
    "gambar" => "kudanil.jpg"
    ],

    [
    "nama" => "beruang",
    "jenis" => "mamalia",
    "habitat" => "pegunungan",
    "makanan" => "serangga dan buah buahan",
    "gambar" => "beruang.jpg"
    ]
 
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data hewan</title>
</head>
<body>
    <h1>Data hewan</h1>
    <?php foreach ($hewan as $hw):  ?>
    <ul>
        <li>
            <img src="img/<?= $hw["gambar"]  ?>">
        </li>
        <li>nama : <?= $hw["nama"]  ?></li>
        <li>jenis : <?= $hw["jenis"]  ?></li>
        <li>habitat : <?= $hw["habitat"]  ?></li>
        <li>makanan : <?= $hw["makanan"]  ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
