<?php
    //buat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbsmartgarden");

    //baca data dr tabel tb_sensor
    $sql = mysqli_query($konek, "SELECT * FROM tb_sensor order by id desc"); //data trkhr di atas
    
    //baca data plng atas
    $data = mysqli_fetch_array($sql);
    $Waktu = $data['Waktu'];

    //uji apabila nilai waktu belum ada, anggap 0
    if( $Waktu == "") $Waktu = 0;
    //cetak nilai waktu
    echo $Waktu ;

?>