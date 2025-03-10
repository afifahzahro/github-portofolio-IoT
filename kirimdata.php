<?php
    //koneksi
    $konek = mysqli_connect("localhost", "root", "", "dbsmartgarden");

    //baca data
    $ketinggian = $_GET['ketinggian'];
    $kelembapan = $_GET['kelembapan'];
    $ldr = $_GET['ldr'];
    $relay3 = $_GET['relay3'];
    $relay1 = $_GET['relay1'];
    $relay2 = $_GET['relay2'];
    $waktu = $_GET['waktu'];

    //simpan ke tb_sensor

    //auto increment =1
    mysqli_query($konek, "ALTER TABLE tb_sensor AUTO_INCREMENT=1");
    //simpan data sensor ke tabel tb_sensor
    $simpan = mysqli_query($konek, "insert into tb_sensor(Ketinggian, Kelembapan, Cahaya, Selenoid, Pompa, Lampu, Waktu)values('$ketinggian', '$kelembapan', '$ldr',  '$relay3', '$relay1', '$relay2', '$waktu')");

    //respon ke esp uji simpan
    if($simpan)
        echo "Berhasil dikirim" ;
    else
        echo "Gagal Terkirim" ;
?>