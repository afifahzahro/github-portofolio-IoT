<?php
   //buat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbsmartgarden");

    //baca data dr tabel tb_sensor
    $sql = mysqli_query($konek, "SELECT * FROM tb_sensor order by id desc"); //data trkhr di atas
    
    //baca data plng atas
    $data = mysqli_fetch_array($sql);
    $Lampu = $data['Lampu'];

    if ($Lampu == 0)
        $keterangan = "Lampu: ON";
    else if ($Lampu == 1)
        $keterangan = "Lampu: OFF";


    //uji apabila nilai staus belom ada, anggap 0
    if( $Lampu == "") $Lampu= 0;
    //cetak status relay
    echo $keterangan ;

?>