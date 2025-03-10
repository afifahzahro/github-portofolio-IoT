<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Smart Garden</title>

    
    <script type="text/javascript" src="jquery/jquery.min.js"> </script>
    <!-- load otomatis -->
    <script type="text/javascript">
      $(document).ready( function(){

        setInterval( function() {
          $("#cekketinggian").load('cekketinggian.php');
          $("#cekkelembapan").load('cekkelembapan.php');
          $("#cekcahaya").load('cekcahaya.php');
          $("#ceklampu").load('ceklampu.php');
          $("#cekpompa").load('cekpompa.php');
          $("#cekselenoid").load('cekselenoid.php');
          $("#cekwaktu").load('cekwaktu.php');
        }, 1000 );

      } );
    </script>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,500;1,600;1,700;1,800&display=swap"
      rel="stylesheet"
    />

    <!-- my style -->
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="css/style.css" />

  </head>
  <body>
    <!-- navbar start -->
    <nav class="navbar" style="overflow: auto;">
      <a href="#" class="navbar-logo" style="float: right">SmartGarden.</a>
      <img src="img/Logo.png" alt="Logo Univ" style="width: 5%; float:left">
    </nav>
    <!-- navbar end -->

    <!-- hero section start -->
    <section class="hero">
      <main class="content">
        <h1>Selamat Datang!</h1>
        <p>
          <span>Ayo!</span> Pantau dan rawat tanaman mu dengan mudah melalui
          <span>SmartGarden</span>.
        </p>
      </main>
    </section>
    <!-- hero section end -->

    <!-- pembacaan sensor start -->
    <section class="sensor">
      <h2>Kondisi Tanaman</h2>

      <div class="container">
        <h2>Monitoring Multi Sensor ESP32 Secara Realtime</h2>
        <div style="display:flex; justify-content:center">
        <h2> <span id="cekwaktu" style="text-align:center;"> </span> </h2>
        <h2>WIB</h2>
      </div>
        <div class="row">
          <!-- ketinggian air -->
          <div class="card text-center" style="width: 33.33%">
            <div class="card-header" style="background-color: #26a677">
              Ketinggian Air
            </div>
            <div class="card-body">
              <h1> <span id="cekketinggian"> 0 </span> </h1>
            </div>
          </div>
          <!-- akhir ketinggian -->

          <!-- kelembapan -->
          <div class="card text-center" style="width: 33.33%">
            <div class="card-header" style="background-color: #26a677">
              Kelembapan Tanah
            </div>
            <div class="card-body">
              <h1> <span id="cekkelembapan"> 0 </span> </h1>
            </div>
          </div>
          <!-- akhir kelembaban -->

          <!-- LDR -->
          <div class="card text-center" style="width: 33.33%">
            <div class="card-header" style="background-color: #26a677">
              Intensitas Cahaya
            </div>
            <div class="card-body">
              <h1> <span id="cekcahaya"> 0 </span> </h1>
            </div>
          </div>
          <!-- akhir LDR-->
        </div>
      </div>
    </section>

    <!-- pembacaan sensor end -->
    
    <!-- satus relay start -->
    <section id="relay" class="relay" style="padding: 10rem 15% 3rem; ">
      <h2 style="text-align: center; font-size: 3rem; font-weight: bold; margin-bottom: 10rem; color: #26a677;">Status Relay</h2>
      

      <div class="row" style="display: flex;">
        <div class="relay-img" style="flex: 1 1 35rem;">
          <img src="img/led.jpg" alt="Lampu Tamanaman" style="width: 90%; border-radius: 20px">
        </div>
        <div class="content" style="flex: 1 1 40rem;">
        <h3 style="font-size: 2.5rem; font-weight: bold;">Lampu Tanaman</h3>
        <p style="font-size: 1.5rem;">Lampu Tanaman ini berperan sebagai cahaya tambahan untuk tanaman jika kurang sinar matahari.
           Lampu Tanaman memiliki sinar cahaya merah dan biru yang baik untuk fotosintesis tumbuhan. Pada saat intensitas cahaya kurang dari 2000 lux, lampu akan menyala</p>
           <p style="font-size: 2rem; font-weight: bold"> <span id="ceklampu" ></span> </p>
           
      </div>
    </section>

    <section id="relay" class="relay" style="padding: 5rem 15% 3rem;">

      <div class="row" style="display: flex;">
        
        <div class="content" style="flex: 1 1 40rem;">
        <h3 style="font-size: 2.5rem; font-weight: bold;">Pompa Air</h3>
        <p style="font-size: 1.5rem;">Pompa Air ini berperan dalam mengalirkan air dari penampungan ke tanaman. 
            Pada saat kelembapan kurang dari 20% pompa akan menyala.</p>
        <p style="font-size: 2rem; font-weight: bold"> <span id="cekpompa" ></span> </p>
        </div>
        <div class="relay-img" style="flex: 1 1 25rem;">
          <img src="img/pompa.jpg" alt="Pompa Air" style="width: 95%; border-radius: 20px">
        </div>
      </div>
    </section>

    <section id="relay" class="relay" style="padding: 5rem 15% 3rem; ">

      <div class="row" style="display: flex;">
        <div class="relay-img" style="flex: 1 1 35rem;">
          <img src="img/selenoid.jpg" alt="Selenoid Valve" style="width: 90%;border-radius: 20px">
        </div>
        <div class="content" style="flex: 1 1 40rem;">
        <h3 style="font-size: 2.5rem; font-weight: bold;">Selenoid Valve</h3>
        <p style="font-size: 1.5rem;">Selenoid Valve ini berfungsi sebagai katup yang dihubungkan dengan keran untuk mengisi air di penampungan secara otomatis. Pada saat air di penampungan memiliki ketinggian kurang dari 10 cm, maka katup akan terbuka. </p>
        <p style="font-size: 2rem; font-weight: bold"> <span id="cekselenoid" ></span> </p>
      </div>
    </section>
    <!-- stastus relay stop -->
    <div class="content">
      <h2 style="text-align: center; color: grey; margin-top: 50px; margin-bottom: 50px; font-size:2rem; font-weight:200">Copyright 2023 Fisika Unila. All Right Reserved</h2>

    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
   
    <script
      src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
      integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
      integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
