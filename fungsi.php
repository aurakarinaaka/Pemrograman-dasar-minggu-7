<?php

function hitungNilaiAkhir($tugas, $uts, $uas) {
    $nilaiAkhir = ($tugas * 0.30) + ($uts * 0.30) + ($uas * 0.40);
    return $nilaiAkhir;
}

function tentukanGrade($nilaiAkhir) {
    if ($nilaiAkhir >= 90) {
        return "A";
    } elseif ($nilaiAkhir >= 80) {
        return "B";
    } elseif ($nilaiAkhir >= 70) {
        return "C";
    } elseif ($nilaiAkhir >= 60) {
        return "D";
    } else {
        return "E";
    }
}

function tentukanStatus($nilaiAkhir) {
    if ($nilaiAkhir >= 75) {
        return "Lulus";
    } else {
        return "Tidak Lulus";
    }
}

function tampilkanHasil($nama, $tugas, $uts, $uas) {
    $nilaiAkhir = hitungNilaiAkhir($tugas, $uts, $uas);
    $grade = tentukanGrade($nilaiAkhir);
    $status = tentukanStatus($nilaiAkhir);

    echo "<tr>
        <td>$nama</td>
        <td>$tugas</td>
        <td>$uts</td>
        <td>$uas</td>
        <td>" . number_format($nilaiAkhir, 2) . "</td>
        <td>$grade</td>
        <td>$status</td>
    </tr>";
}

$mahasiswa = [
    [
        "nama" => "INDIRA",
        "tugas" => 80,
        "uts" => 85,
        "uas" => 90
    ],
    [
        "nama" => "WIDYA",
        "tugas" => 90,
        "uts" => 85,
        "uas" => 95
    ],
    [
        "nama" => "ARTANTI",
        "tugas" => 90,
        "uts" => 95,
        "uas" => 80
    ]
];

?> 

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Nilai Mahasiswa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f0eb;
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: #6e4f37;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background-color: white;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #8b5e3c;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #f9f3ec;
        }
    </style>
</head>
<body>

    <h2>Daftar Nilai Mahasiswa</h2>

    <table>
        <tr>
            <th>Nama</th>
            <th>Tugas</th>
            <th>UTS</th>
            <th>UAS</th>
            <th>Nilai Akhir</th>
            <th>Grade</th>
            <th>Status</th>
        </tr>

        <?php
        foreach ($mahasiswa as $mhs) {
            tampilkanHasil(
                $mhs["nama"],
                $mhs["tugas"],
                $mhs["uts"],
                $mhs["uas"]
            );
        }
        ?>
    </table>

</body>
</html>