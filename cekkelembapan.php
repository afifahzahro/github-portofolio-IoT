<?php
    //buat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbsmartgarden");

    //baca data dr tabel tb_sensor
    $sql = mysqli_query($konek, "SELECT * from tb_sensor order by id desc"); //data trkhr di atas
    
    //baca data plng atas
    $data = mysqli_fetch_array($sql);
    $Kelembapan = $data['Kelembapan'];

    //uji apabila nilai Kelembapan belom ada, anggap 0
    if( $Kelembapan == "") $Kelembapan = 0;
    //cetak nilai Kelembapan
    echo $Kelembapan ;

?>