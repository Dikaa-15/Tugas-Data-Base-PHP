<?php

$data = [
    [
        "no" => "1",
        "nama" => "Dwi Andika F",
        "Kelas" => "X RPL 2",
        "Alamat" => "Jl. Setia kawan",
        "Nisn" => "021608",
        "Nosapp" => "0895396083939",
        "hobi" => "Main game",
        "cita-cita" => "Dokter"
    ],
    [
    "no" => "2",
    "nama" => "M. Messi",
    "Kelas" => "X RPL 2",
    "Alamat" => "Jl. Kober",
    "Nisn" => "0276",
    "Nosapp" => "087865503687",
    "hobi" => "Melukis ",
    "cita-cita" => "Animator"
    ],
    [
    "no" => "3",
    "nama" => "Akbir",
    "Kelas" => "X RPL 2",
    "Alamat" => "Jl. mangga",
    "Nisn" => "0234",
    "Nosapp" => "085718470972",
    "hobi" => "Main bola",
    "cita-cita" => "Menjadi pedangdut"
    ],
    [
    "no" => "4",
    "nama" => "Kenzie",
    "Kelas" => "X RPL 2",
    "Alamat" => "Jl. Karang Anyar",
    "Nisn" => "0245",
    "Nosapp" => "087881330705",
    "hobi" => "main game",
    "cita-cita" => "Proplayer"
    ],
    [
    "no" => "5",
    "nama" => "Dimas Putra A",
    "Kelas" => "X RPL 2",
    "Alamat" => "Jl. mangga besar",
    "Nisn" => "0256",
    "Nosapp" => "081935679330",
    "hobi" => "Mengoding",
    "cita-cita" => "Menjadi Front-end"
    ],
    [
    "no" => "6",    
    "nama" => "Rio puji",
    "Kelas" => "X RPL 2",
    "Alamat" => "Jl. gajah mada",
    "Nisn" => "0257",
    "Nosapp" => "087720398482",
    "hobi" => "Membaca buku",
    "cita-cita" => "Menjadi sukses"
    ],
    [
    "no" => "7",
    "nama" => "Agung",
    "Kelas" => "X RPL 2",
    "Alamat" => "Jl. tomang",
    "Nisn" => "0267",
    "Nosapp" => "083893164726",
    "hobi" => "Main mobile legend",
    "cita-cita" => "Front-end internasional"
    ],
    [
    "no" => "8",
    "nama" => "Afrizal",
    "Kelas" => "X RPL 2",
    "Alamat" => "Jl. gajah mada",
    "Nisn" => "0278",
    "Nosapp" => "0895321015259",
    "hobi" => "Joki",
    "cita-cita" => "CEO Perusahaan"
    ],
    [
    "no" => "9",
    "nama" => "Salma",
    "Kelas" => "X RPL 2",
    "Alamat" => "Jl. Galur",
    "Nisn" => "0236",
    "Nosapp" => "081212460494",
    "hobi" => "Menggambar",
    "cita-cita" => "Menjadi sukses"
    ],
    [
    "no" => "10",
    "nama" => "Raura donita",
    "Kelas" => "X RPL 2",
    "Alamat" => "Jl. Kebon kacang",
    "Nisn" => "0278",
    "Nosapp" => "089508872965",
    "hobi" => "Baca Novel",
    "cita-cita" => "Menjadi sukses"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border= "1" cellpadding= "10" cellspacing= "0">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Kelas</th>
            <th>Alamat</th>
            <th>Nisn</th>
            <th>Nomor WhatsApp</th>
            <th>Hobi</th>
            <th>Cita-cita</th>
        </tr>
        <?php foreach($data as $nama) :?>
            <tr>
                <td><?= $nama["no"] ?></td>
                <td><?= $nama["nama"] ?></td>
                <td><?= $nama["Kelas"] ?></td>
                <td><?= $nama["Alamat"] ?></td>
                <td><?= $nama["Nisn"] ?></td>
                <td><?= $nama["Nosapp"] ?></td>
                <td><?= $nama["hobi"] ?></td>
                <td><?= $nama["cita-cita"] ?></td>
            </tr>
            <?php endforeach; ?>
    </table>
</body>
</html>