<?php
    $data = [
        ["no" => 1, "nama" => "Ridho", "matakuliah" => [
            ["mataKuliah" =>"Pemrograman I", "sks" => 2], 
            ["mataKuliah" => "Praktikum Pemrograman I", "sks" => 1],
            ["mataKuliah" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
            ["mataKuliah" => "Arsitektur Komputer", "sks" => 3]
        ]
        ],

        ["no" => 2, "nama" => "Ratna", "matakuliah" => [
            ["mataKuliah" =>"Basis Data I", "sks" => 2], 
            ["mataKuliah" => "Praktikum Basis Data I", "sks" => 1],
            ["mataKuliah" => "Kalkulus", "sks" => 3]
        ]
        ],

        ["no" => 3, "nama" => "Tono", "matakuliah" => [
            ["mataKuliah" => "Rekayasa Perangkat Lunak", "sks"=> 3], 
            ["mataKuliah" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["mataKuliah" => "Komputasi Awan", "sks" => 3], 
            ["mataKuliah" => "Kecerdasan Bisnis", "sks" => 3]
        ]
        ]
    ];

    for ($x=0; $x < count($data); $x++) {
        $jumlah = 0;
        for ($y=0; $y < count($data[$x]["matakuliah"]); $y++) { 
            $jumlah += $data[$x]["matakuliah"][$y]["sks"];
        }
        $data[$x]["jumlah"] = $jumlah;
        if ($data[$x]["jumlah"] < 7) {
            $data[$x]["keterangan"] = "<div style = background-color:red>Revisi KRS</div>";
        } else if ($data[$x]["jumlah"] >= 7) {
            $data[$x]["keterangan"] = "<div style = background-color:green>Tidak Revisi</div>";
        }
    }
?>

<html>
<style>
    table, tr, td, th {
            border: 1px solid black;
    }
</style>
    
<table cellspacing="0" cellpadding ="0">
        <tr bgcolor = lightgray>
            <th>No</th>
            <th>Nama</th>
            <th>Mata Kuliah</th>
            <th>SKS</th>
            <th>Total SKS</th>
            <th>Keterangan</th>
        </tr>
        <?php
            for ($x=0; $x < count($data); $x++)
             {
                for ($y=0; $y < count($data[$x]["matakuliah"]); $y++) { 
                    echo "<tr>";
                    if ($y == 0) {
                        echo "<td>".$data[$x]["no"]."</td>";
                        echo "<td>".$data[$x]["nama"]."</td>";
                        echo "<td>".$data[$x]["matakuliah"][$y]["mataKuliah"]."</td>";
                        echo "<td>".$data[$x]["matakuliah"][$y]["sks"]."</td>";
                        echo "<td>".$data[$x]["jumlah"]."</td>";
                        echo "<td>".$data[$x]["keterangan"]."</td>";
                    } else {
                        echo "<td></td><td></td>";
                        echo "<td>".$data[$x]["matakuliah"][$y]["mataKuliah"]."</td>";
                        echo "<td>".$data[$x]["matakuliah"][$y]["sks"]."</td>";
                        echo "<td></td><td></td>";
                    }
                }
            }
        ?>
</table>
</html>