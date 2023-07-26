<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" href="assets/img/davin.png">

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
        <a class="navbar-brand" href="#">{{$about->nama}}</a>
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
              <a class="nav-link active" href="/team">Team</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                Services
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <li><a class="dropdown-item" href="/service">Layanan</a></li>
                <li><a class="dropdown-item" href="/service#portofolio">Portofolio</a></li>
                <li><a class="dropdown-item" href="/service#testimonials">Testimonials</a></li>
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

    <!-- Portofolio -->

    <div class="container text-center" style="padding-top: 75px">
      
      <h4 class="text-muted"> {{$deskripsi->team}} </h4>
      <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
        @foreach ($teams as $team)
        <div class="col">
          <div class="cardtim">
            <img src="image/{{$team->image}}" class="cardtim-img-top" alt="...">
            <div class="cardtim-body">
              <h5 class="card-title">{{$team->name}}</h5>
              <h5 class="card-title">{{$team->nim}}</h5>
              <p class="card-text">{{$team->description}}</p>
            </div>
            <div class="d-flex justify-content-evenly p-4">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fas fa-envelope"></i>
                <i class="fab fa-whatsapp-square"></i>
            </div>
          </div>
        </div>
        @endforeach
          

          

          
        </div>
  </div>
  <!-- end Portofolio -->

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

    <script>
     $('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsiveClass:true,
    center:true,
    nav:true,
    autoplay:true,
    NavText:[
      "i class='fa fa-angle-left'></i>",
      "i class='fa fa-angle-right'></i>"
    ],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:1,
        },
        1000:{
            items:5,
        }
    }
})
    </script>
    
</body>
</html>