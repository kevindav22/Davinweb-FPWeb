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
        <a class="navbar-brand" href="#">{{$about->nama}}</b> </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" aria-current="page" href="/beranda">Beranda</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/profil">Profil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/team">Team</a>
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
              <a class="nav-link active" href="/kontak">Contact</a>
            </li>
          </ul> 
        </div>
      </div>
    </nav>
    <!-- End Navbar-->

    <!--kontak-->
    <div class="container onlykontak"  >
      <div class="row kotakpul" data-aos="zoom-out"  data-aos-duration="600">
        <div class="col-md-7" style="padding: 18%">
          <a href="{{$contact->facebook}}" class="text-decoration-none" >
            <i class="fab fa-facebook fa-4x" style="color: #3f3c3c;"></i>
          </a>
          <a href="{{$contact->instagram}}" class="text-decoration-none" >
            <i class="fab fa-instagram fa-4x" style="color: #3f3c3c;"></i>
          </a>
          <a href="{{$contact->tiktok}}" class="text-decoration-none" >
            <i class="fab fa-tiktok fa-4x" style="color: #3f3c3c;"></i>
          </a>
          <a href="{{$contact->linkedin}}" class="text-decoration-none">
            <i class="fab fa-linkedin fa-4x" style="color: #3f3c3c;"></i>
          </a>
        </div>
        <div class="col-md-5 kotakkanan" data-aos="">
          <h4>Kontak Kami</h4>
          <div class="mt-4">
            <div class="d-flex">  
              <p><i class="fas fa-phone-square-alt "></i> Telephon : {{$contact->telepon}} </p>
            </div>
            <div class="d-flex">  
              <a href="{{$contact->linkwhatsapp}}" class="text-decoration-none text-white">
              <p><i class="fab fa-whatsapp-square"></i> Whatsapp : {{$contact->whatsapp}}</p>
              </a>
            </div>
            <div class="d-flex">
              <a href="{{$contact->linkemail}}" class="text-decoration-none text-white">
              <p><i class="fas fa-envelope"></i> Email : {{$contact->email}}</p>
              </a>
            </div>
            <div class="d-flex">
              <p><i class="fas fa-map-marker-alt"></i> Alamat : {{$contact->alamat}}</p>
            </div>
            <iframe src="{{$contact->maps_embed}}" width="400" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>
        </div>
      </div>
    </div>
    

    
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