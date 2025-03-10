<?php
    //buat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbsmartgarden");

    //baca data dr tabel tb_sensor
    $sql = mysqli_query($konek, "SELECT * FROM tb_sensor order by id desc"); //data trkhr di atas
    
    //baca data plng atas
    $data = mysqli_fetch_array($sql);
    $Ketinggian = $data['Ketinggian'];

    //uji apabila nilai Ketinggianbelom ada, anggap 0
    if( $Ketinggian == "") $Ketinggian = 0;
    //cetak nilai Ketinggian
    echo $Ketinggian ;

?>