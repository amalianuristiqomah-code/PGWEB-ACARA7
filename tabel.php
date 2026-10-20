<?php
    $kecamatan = array("Moyudan","Minggir","Seyegan","Godean","Gamping");
    $luas = array(27.62,27.27,26.63,26.84,29.25);
    $jumlah_penduduk = array(31497,29886,47129,72028,108675);

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo"<tr>
            <th>KECAMATAN</th>
            <th>LUAS</th>
            <th>JUMLAH PENDUDUK</th>
        </tr>";

    for ($i = 0; $i < count($kecamatan); $i++) {
        echo "<tr>";
        echo "<td>" . $kecamatan[$i] . "</td>";
        echo "<td>" . $luas[$i] . "</td>";
        echo "<td>" . $jumlah_penduduk[$i] . "</td>";
        echo "</tr>";
    }

    echo "</table>";
?>