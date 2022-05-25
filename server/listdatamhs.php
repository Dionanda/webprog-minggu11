<?php
    include_once("koneksi.php");
    $sql = "SELECT NIM, NAMA, JKEL FROM mhs;";
    $hsl = mysqli_query($cnn, $sql);

    $row = mysqli_fetch_all($hsl);
    echo json_encode($row);

    // while($row = mysqli_fetch_array($hsl)){
    //     echo "NIM: ". $row["NIM"], "<br>";
    //     echo "Nama: ". $row["NAMA"], "<br>";
    //     echo "Jenis Kelamin: ". $row["JKEL"], "<br>";
    //     echo "<br>";
    // }

    