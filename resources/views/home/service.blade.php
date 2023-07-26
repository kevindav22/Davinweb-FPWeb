<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="image/{{$about->logo}}">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="assets/vendor/bootstrap/dist/css/bootstrap.min.css">
  <!-- fontawesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/fontawesome.min.css">
  <!-- aos -->
  <link rel="stylesheet" href="assets/vendor/aos/dist/aos.css">

  <!-- custom css -->
  <link rel="stylesheet" href="assets/css/style.css">

  <!-- owl carousel min.css-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
 <!-- owl carousel theme.css-->
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.css" integrity="sha512-OTcub78R3msOCtY3Tc6FzeDJ8N9qvQn1Ph49ou13xgA9VsH9+LRxoFU6EqLhW4+PKRfU+/HReXmSZXHEkpYoOA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>{{$about->nama}}</title>
</head>

<body>
    <!--navbar-->   
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <img src="image/{{$about->logo}}" class="" style="margin-right: 4px; width:35px;height:35px;" >
        <a class="navbar-brand" href="#"> {{$about->nama}}</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/team">Team</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/service">Layanan</a></li>
                <li><a class="dropdown-item" href="#portofolio">Portofolio</a></li>
                <li><a class="dropdown-item" href="#testimonials">Testimonials</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/kontak">Contact</a>
            </li>
          </ul> 
        </div>
      </div>
    </nav>
    <!-- End Navbar-->

  

     <!-- services -->

     <div class="service mt-5 bg-dark">
      <div class="container">
        <div class="row mt-5">
          <div class="img-service col-md-6" data-aos="zoom-in-left" >
            <img src="image/{{$deskripsi->imgservice}}" alt="" height="400px" width="420px"  >
          </div>  
          <div class="tentang-kanan col-md-6" data-aos="zoom-in-left">
            <h5 class="fw-bold service-us-title">Services</h5>
            <p class=" mt-4 service-us-subtitle">
               {{$deskripsi->service}}
            </p>
          </div>     
        </div>        
        <div class="row">
          @foreach ($service as $service)
          <div class="col-md-6">
            <div class="hoper">
              <div class="card border-0 text-center p-4 mt-3 shadow p-3 mb-5 bg-secondary text-white" data-aos="fade-up">
                <div class="card-body ">
                  <div class="icon">
                    <img src="image/{{$service->image}}" alt="" class="img-fluid" width="80">
                  </div>
                  <div class="card-title fw-bolder mt-4">{{$service->title}}</div>
                  <p class="card-description mt-3">
                    {{$service->description}}
                  </p>
                </div>
              </div>          
            </div> 
          </div>
              
          @endforeach
        </div>
      </div>
    </div>
  <!-- end services -->

  <!-- Portofolio -->
<section id="portofolio">
  <div class="container">
    <h5 class="fw-bold service-us-title text-center pt-5" data-aos="fade-down">Portofolio</h5>
    <p class="text-center" data-aos="fade-down">
     {{$deskripsi->portofolio}}
    </p>
    <div class="row row-cols-1 row-cols-md-4 g4 py-3">
      @foreach ($portofol as $portofol)
      <div class="col hoper mb-3"  data-aos="zoom-in">
        <div class="card foliooo">
          <img src="image/{{$portofol->image}}" class="img-folio" alt="...">
          <div class="card-body foliooo-body">
            <h5 class="card-title text-center"> <a href="{{$portofol->description}}" style="text-decoration: none">{{$portofol->title}}</h5></a>
          </div>
        </div>
      </div>
      @endforeach
      
    </div>
   </div>
</section>

 

  <!-- end Portofolio -->

  <!-- Testimonials -->
  <section id="testimonials">
    <div class="container">
      <h5 class="fw-bold service-us-title text-center pt-5" data-aos="fade-down">Testimonials</h5>
      <div class="row row-cols-1 row-cols-md-5 g4 py-3">
        @foreach ($buktitf as $buktitf)
        <div class="col hoper mb-3"  data-aos="zoom-in">
          <div class="card foliooo">
            <img src="image/{{$buktitf->image}}" class="img-folio" alt="...">
          </div>
        </div>
        @endforeach
        
      </div>
     </div>
    
      <!-- testimonials -->
     
      <!-- Testi -->
    
      <div class="testi"data-aos="fade-up" >
        <div class="container">
          <h1 class="testi-header">
            Apa kata mereka?
          </h1>
          <div class="testimonials" data-aos="zoom-in">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                @foreach ($testimon as $index => $testimons)
                <div class="carousel-item {{$index === 0 ? 'active' : ''}}">
                  <div class="single-item">
                    <div class="row">
                      <div class="col-md-5">
                        <div class="profile">
                          <div class="img-area">
                            <img src="image/{{$testimons->image}}" alt="">
                          </div>
                          <div class="bio">
                            <h2><strong>{{$testimons->name}}</strong></h2>
                            <h4>{{$testimons->gelar}}</h4>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="contenttt">
                          <p><span><i class="fas fa-quote-left"></i></span>
                          {{$testimons->description}}
                          <p class="socialsss">
                            <i class="fab fa-facebook"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-whatsapp"></i>
                            <i class="fab fa-youtube"></i>
                          </p>
                          <p  class="d-flex" style="justify-content: end">
                            <i class="fas fa-star fa-lg" style="color: blueviolet;"></i>
                            <i class="fas fa-star fa-lg" style="color: blueviolet;"></i>
                            <i class="fas fa-star fa-lg" style="color: blueviolet;"></i>
                            <i class="fas fa-star fa-lg" style="color: blueviolet;"></i>
                            <i class="fas fa-star-half-alt fa-lg" style="color: blueviolet;"></i>
                          </p>
                        </div>
                      </div>
                    </div> 
                  </div>
                </div>
                @endforeach 
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- endTesti -->
  </section>
 
  
  
  


    <!-- Kontak-->
    <section id="kontak">
      <footer class="mt-5">
        <div class="footer-top bg-dark text-white p-5 ">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-1"></div>
              <div class="col-md-3">
                <h4 class="fw-bold"><img src="image/{{$about->logo}}" class="" style="margin-bottom: 5px; margin-right: 5px; width:45px;height:45px;">{{$about->nama}}</h2>
                  <strong>Alamat Kantor</strong> : <span>{{$contact->alamat}}</span>
                  <br />
                  
              </div>
              <div class="col-md-2">
                <h4 class="fw-bold">Ikuti Kami</h2>
                  <ul class="list-group list-unstyled">
                    <li class="list-item">
                      <a href="{{$contact->facebook}}" class="text-decoration-none text-white">
                        <i class="fab fa-facebook" style="color: #ffffff;"></i>
                        Facebook
                      </a>
                    </li>
                    <li class="list-item">
                      <a href="{{$contact->instagram}}" class="text-decoration-none text-white">
                        <i class="fab fa-instagram" style="color: #ffffff;"></i>
                        Instagram
                      </a>
                    </li>
                    <li class="list-item">
                      <a href="{{$contact->tiktok}}" class="text-decoration-none text-white">
                        <i class="fab fa-tiktok" style="color: #ffffff;"></i>
                        Tiktok
                      </a>
                    </li>
                    <li class="list-item">
                      <a href="{{$contact->linkedin}}" class="text-decoration-none text-white">
                        <i class="fab fa-linkedin" style="color: #ffffff;"></i>
                        Linkedin
                      </a>
                    </li>
                  </ul>
              </div>
              <div class="col-md-2">
                <h4 class="fw-bold">Link Halaman</h2>
                  <ul class="list-group list-unstyled">
                    <li class="list-item">
                      <a href="/" class="text-decoration-none text-white">
                        <i class="fa fa-chevron-right primary"></i>
                        Beranda
                      </a>
                    </li>
                    <li class="list-item">
                      <a href="/profil" class="text-decoration-none text-white">
                        <i class="fa fa-chevron-right primary"></i>
                        Profil
                      </a>
                    </li>
                    <li class="list-item">
                      <a href="/service" class="text-decoration-none text-white">
                        <i class="fa fa-chevron-right primary"></i>
                        Services
                      </a>
                    </li>
                    <li class="list-item">
                      <a href="/team" class="text-decoration-none text-white">
                        <i class="fa fa-chevron-right primary"></i>
                        Team
                      </a>
                    </li>
                  </ul>
              </div>
              <div class="col-md-4">
                <h4 class="fw-bold">Kontak</h2>
                  <i class="fas fa-phone-square-alt" style="color: #ffffff;"></i> {{$contact->telepon}}
                  <br />
                  <a href="{{$contact->linkwhatsapp}}" class="text-decoration-none text-white">
                    <i class="fab fa-whatsapp-square" style="color: #ffffff;"></i> {{$contact->whatsapp}}
                  </a>
                  <br />
                  <a href="{{$contact->linkemail}}" class="text-decoration-none text-white">
                    <i class="fas fa-envelope" style="color: #ffffff;"></i> {{$contact->email}}
                  </a>
              </div>
            </div>
            <div class="bank">
              <div class="float-end">
                  <img src="assets/img/bcaaa.png" alt="" height="37px" width="70px">
                  <img src="assets/img/bniiii.png" alt="" height="37px" width="70px">
                  <img src="assets/img/btpn.png" alt="" height="37px" width="70px">
                  <img src="assets/img/briii.png" alt="" height="37px" width="70px">
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
                  &copy; Copyright <strong>{{$about->nama}}</strong>. All Right Reserved
                </div>
                
              </div>
            </div>
          </div>
        </div>
      </footer>
    </section>
    

    
    <script src="assets/vendor/jquery/jquery-3.6.0.min.js"></script>
    <script src="assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/fontawesome/js/all.min.js"></script>
    <script src="assets/vendor/masonry/masonry.pkgd.min.js"></script>
    <script src="assets/vendor/aos/dist/aos.js"></script>
    <script src="assets/vendor/isotope/isotope.pkgd.min.js"></script>
    <script src="assets/js/app.js"></script>    

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.0/jquery.min.js" integrity="sha512-3gJwYpMe3QewGELv8k/BX9vcqhryRdzRMxVfq6ngyWXwo03GFEzjsUm8Q7RZcHPHksttq7/GFoxjCVUjkjvPdw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    
</body>
</html>