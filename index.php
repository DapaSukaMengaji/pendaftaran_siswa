<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Pendaftaran Siswa Baru | SMK 8 Surakarta</title>

    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"  
    />

    

    <style>
      * {
        margin: 0;
        padding: 0;
      }

      .hero {
        background-image: url('smk 8 surakarta.jpg');
        overflow: hidden;
        -webkit-mask-image: linear-gradient(
          rgb(255, 255, 255) 50%,
          rgba(255, 255, 255, 0)
        );
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        position: relative;
        opacity: 0.8;
        width: 100%;
        height: 500px;
        z-index: 5;
      }

      .welcome {
        position: absolute;
      }

      .main {
        display: flex;
        justify-content: center;
        align-items: center;
        padding: 15px;
        height: 150px;
      }

      @media (max-width: 768px) {
        .hero {
          height: 200px; 
        }
      }

    </style>


  </head>
  <body>
    <nav class="navbar navbar-expand-lg bg-light navbar-light fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">SMK 8 Surakarta</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" 
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="form-daftar.php">Pendaftaran</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section class="carousel pt-5">
      <div class="hero d-flex align-items-center justify-content-center text-light">
        <div class="row p-4 text-center position-absolute text-emphasis">
          <div class="col">
            <h1 class="fw-bold">Selamat Datang di SMK 8 Surakarta</h1>
          </div>
        </div>
        
        <!-- <h3 class="text-light">Selamat Datang di SMK JAYAPURA</h3><br>
          <div class="tombol d-flex justify-content-center">
            
            
            <button type="button" class="btn btn-primary m-4 ms-5 me-5"><a class="fst-none 
            text-decoration-none text-light" href="list-siswa.php">Lihat pendaftar</a></button>
          </div> -->
      </div>
    </section>

    <section class="daftar">
      <div class="container">
         <div class="row">

          <div class="col-6 d-flex justify-content-end">
  
            <a class="btn btn-emphasis btn-center"
            href="form-daftar.php">Daftar
            Sekarang</a>
          </div>
          <div class="col-6 d-flex justify-content-start">
            <a class="btn btn-emphasis btn-center"
  
            href="list-siswa.php">Lihat pendaftar</a>
          </div>
          
        </div>
      </div>
    </section>





    <section class="container">
      <div class="row p-4 pt-5 pb-5 mt-5 mb-5 justify-content-center">
        <div class="col-md-2 p-3">
          <img src="images.png" class="w-100" alt="">
        </div>
        <div class="col-md-2 p-3 align-items-center">
          <img src="pp.png" class="w-100 align-items-center" alt="">
        </div>
        <div class="col-md-2 p-3">
          <img src="smkop.png" class="w-100" alt="">
        </div>
      </div>
    </section>
    


    <footer class="bg-tertiary p-4 d-flex justify-content-center">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1177.6246868170767!2d109.66462098646103!3d-6.
        885631389517207!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e70251b5e1a6f57%3A0x73eb625318184632!2sSM
        K%20Negeri%202%20Pekalongan!5e0!3m2!1sid!2sid!4v1715732446064!5m2!1sid!2sid" width="600" height="450"
         style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </footer>

  <section class="main bg-info text-dark">
      <h4>PENDAFTARAN DIMULAIN PADA TANGAL 15 JUNI 2024</h4>
    </section>







    <?php if(isset($_GET['status'])): ?>
    
      <?php
                if($_GET['status'] == 'sukses') {
                    echo "Pendaftaraan siswa baru berhasil";
                } else {
                    echo "Pendataran gagal!";
                }
            
            ?>
   
    <?php endif; ?>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>
  </body>
</html>
