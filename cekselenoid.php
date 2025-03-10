<?php
   //buat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbsmartgarden");

    //baca data dr tabel tb_sensor
    $sql = mysqli_query($konek, "SELECT * FROM tb_sensor order by id desc"); //data trkhr di atas
    
    //baca data plng atas
    $data = mysqli_fetch_array($sql);
    $Selenoid = $data['Selenoid'];

    if ($Selenoid == 0)
        $keterangan = "Selenoid: ON";
    else if ($Selenoid == 1)
        $keterangan = "Selenoid: OFF";


    //uji apabila nilai relay belom ada, anggap 0
    if( $Selenoid == "") $Selenoid = 0;
    //cetak staus relay
    echo $keterangan ;

?>
