<?php
   //buat koneksi ke database
    $konek = mysqli_connect("localhost", "root", "", "dbsmartgarden");

    //baca data dr tabel tb_sensor
    $sql = mysqli_query($konek, "SELECT * FROM tb_sensor order by id desc"); //data trkhr di atas
    
    //baca data plng atas
    $data = mysqli_fetch_array($sql);
    $Pompa = $data['Pompa'];

    if ($Pompa == 0)
        $keterangan = "Pompa: ON";
    else if ($Pompa == 1)
        $keterangan = "Pompa: OFF";


    //uji apabila nilai relay belom ada, anggap 0
    if( $Pompa == "") $Pompa = 0;
    //cetak status relay
    echo $keterangan ;

?>
