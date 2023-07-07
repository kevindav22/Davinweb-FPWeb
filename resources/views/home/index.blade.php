<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="favicon/favicon.ico">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="assets/vendor/fontawesome/css/all.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">
  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css">

    <title>Document</title>
</head>

<body>
    <!--navbar-->   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Davin<b>Web</b> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Team</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="#">Layanan kami</a></li>
                <li><a class="dropdown-item" href="#">Another action</a></li>
                <li><a class="dropdown-item" href="#">Portofolio</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>
          </ul> 
        </div>
      </div>
    </nav>
    <!-- End Navbar-->

   <!-- carousel -->
   <div class="imgback">
   <div id="carouselExampleCaptions" class="carousel slide " data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
        aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
        aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
        aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      
      <div class="carousel-item active">
        <img src="assets/img/c1.jpg" class="d-block w-100 carousel-img" alt="..." />
        <div class="carousel-caption d-none d-md-block" data-aos="fade-left">
          <h5>Davin<b>Web</b></h5>
          <p>Nikmati website profesional dan murah dari davinWeb! Dengan jasa web dari kami, Anda akan memiliki situs web menarik yang memenuhi kebutuhan bisnis, instansi, ataupun organisasi Anda. Mulai dari web company profile, toko online, sekolah, landing page dan lainnya. </p>
          <a href="{{route('login')}}" class="btn btn-outline-success">Hubungi kami</a>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/c2.jpg" class="d-block w-100 carousel-img" alt="..." />
        <div class="carousel-caption d-none d-md-block" data-aos="fade-left">
          <h5>Jaminan kami?</h5>
          <p>
            Proses Cepat | Harga Terjangkau | Website Profesional
          </p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="assets/img/c3.jpg" class="d-block w-100 carousel-img" alt="..." />
        <div class="carousel-caption d-none d-md-block" data-aos="fade-left">
          <h5>Tunggu Apa Lagi?</h5>
          <p> <br></p>
            <a href="{{route('login')}}" class="btn btn-success">Hubungi kami Sekarang!</a>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <!-- end carousel -->

  <!-- Tentang -->
  <div class="about-us mt-5">
    <div class="container">
      <div class="row mt-5">
        <div class="tentang-kiri col-md-6" data-aos="fade-right">
          <h5 class="fw-bold about-us-title">
           Tentang Kami
          </h5>
          <p class=" mt-4 about-us-subtitle">
             Davin<b>Web</b> Merupakan perusahaan yang bergerak dibidang
             pelayanan jasa pembuatan website terpercaya sejak tahun 1945. Ribuan project telah kami buat dengan hasil yang sangat memuaskan 
             tidak ada satupun hasil project kami yang mengecewakan.
          </p>
        </div>
        <div class="col-md-6" data-aos="fade-right">
          <img src="assets/img/tentang.jpg" alt="" height="500px" width="520px">
          
        </div>        
      </div>
    
    
      <div class="row mt-5">
        <div class="col-md-4">
            <div class="card border-0 text-center p-4 mt-3 shadow p-3 mb-5 bg-body-tertiary " data-aos="zoom-in">
              <div class="card-body">
                <div class="card-icon">
                  <i class="fa fa-book fa-lg fa-3x"></i>
                </div>
                <div class="card-title fw-bolder mt-4">Pengerjaan Cepat & Profesional</div>
                <p class="card-description mt-3">
                  Tim kami sudah berpengalaman sehingga bisa membuat website dengan cepat dan profesional.
                </p>
              </div>
            </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3 shadow p-3 mb-5 bg-body-tertiary rounded" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-lg fa-3x"></i>
              </div>
              <div class="card-title fw-bolder mt-4">Desain Website yang Modern</div>
              <p class="card-description mt-3">
                Kami bisa pastikan website Anda akan mempunyai desain yang modern, responsif, dan menarik.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3 shadow p-3 mb-5 bg-body-tertiary rounded" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-lg fa-3x"></i>
              </div>
              <div class="card-title fw-bolder mt-4">SEO Friendly</div>
              <p class="card-description mt-3">
                Kami akan membuat website Anda SEO Friendly agar mudah ditemukan di mesin pencari.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3 shadow p-3 mb-5 bg-body-tertiary rounded" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-lg fa-3x"></i>
              </div>
              <div class="card-title fw-bolder mt-4">Harga Terjangkau</div>
              <p class="card-description mt-3">
                Kami pastikan harga sudah benar-benar terjangkau dan sebanding dengan kualitas web yang kami buat.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3 shadow p-3 mb-5 bg-body-tertiary rounded" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-lg fa-3x"></i>
              </div>
              <div class="card-title fw-bolder mt-4">Free Support</div>
              <p class="card-description mt-3">
                Kalau Anda memiliki kendala kami akan membantu menyelesaikannya secepat mungkin.
              </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card border-0 text-center p-4 mt-3 shadow p-3 mb-5 bg-body-tertiary" data-aos="zoom-in">
            <div class="card-body">
              <div class="card-icon">
                <i class="fa fa-book fa-lg fa-3x"></i>
              </div>
              <div class="card-title fw-bolder mt-4">Keamanan Tinggi</div>
              <p class="card-description mt-3">
                Jangan sampai website Anda dibobol orang lain. Makanya kami pastikan website Anda aman.
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    <!-- end Tentang -->

     <!-- services -->
  <div class="services mt-5 bg-light py-5">
    
  </div>
  <!-- end services -->


    <!-- Kontak-->
    <footer class="mt-5">
      <div class="footer-top bg-dark text-white p-5 ">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-3">
              <h4 class="fw-bold">COMPANY</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Repeliat
                  consequuntur magnam commodi voluptatem quas? Itaque quo obcaecati
                  perspiciatis quaerat ullam!
                </p>
                <strong>Phone</strong> : <span>+628382223170 </span>
                <br />
                <strong>Email</strong> : <span>info@company.org </span>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Our Services</h2>
                <ul class="list-group list-unstyled">
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Web Development
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Web Design
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Online Marketting
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Graphic Design
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Photography
                    </a>
                  </li>
                </ul>
            </div>
            <div class="col-md-2">
              <h4 class="fw-bold">Useful Links</h2>
                <ul class="list-group list-unstyled">
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Home
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      About Us
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Services
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Portfolio
                    </a>
                  </li>
                  <li class="list-item">
                    <a href="" class="text-decoration-none text-white">
                      <i class="fa fa-chevron-right primary"></i>
                      Contact
                    </a>
                  </li>
                </ul>
            </div>
            <div class="col-md-3">
              <h4 class="fw-bold">Join Our Newsletter</h2>
                <p>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                </p>
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="yourmail@example.com" />
                  <button class="btn btn-subscribe" type="button" id="inputGroupFileAddon04">
                    Subscribe
                  </button>
                </div>
            </div>
          </div>
        </div>
      </div>
      <div class="footer-down bg-darker text-white px-5 py-3">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-1"></div>
            <div class="col-md-5">
              <div class="copyright">
                &copy; Copyright <strong>Company</strong>. All Right Reserved
              </div>

            </div>
            <div class="col-md-5">
              <div class="social-links float-end">
                <a href="" class="mx-2">
                  <i class="fab fa-facebook fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-twitter fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-instagram fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-youtube fa-2x"></i>
                </a>
                <a href="" class="mx-2">
                  <i class="fab fa-linkedin fa-2x"></i>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>

    
    <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>    
</body>
</html>