<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta name="keywords" content="Student Day 2021" />
      <meta name="description" content="Student Day 2021">
      <meta name="author" content="Tim Web Development 3D SDU 2021">
      <title><?= $page ?> | SDU 2021 </title>

      <!-- Favicon --- Perubahan dikit di icon (tak tambah2 in aja)-->
      <link rel="icon" href="{{asset('asset/logo/LOGO KAYON Stroke.png')}}" type="image/png" />
      <link rel="shortcut icon" href="{{asset('asset/logo/LOGO KAYON Stroke.png')}}" type="image/x-icon" />
      <link rel="apple-touch-icon" href="{{asset('asset/logo/LOGO KAYON Stroke.png')}}">

      <!-- Font Awesome-->
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.1/css/all.min.css">

       <!-- Web Fonts  -->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800%7COpen+Sans:400,700,800" rel="stylesheet" type="text/css">
      <link href="https://fonts.googleapis.com/css2?family=Playfair+Display&display=swap" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Merriweather&family=Playfair+Display&display=swap" rel="stylesheet">

      <!-- Vendor CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
      <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.css">

      <!-- Main CSS -->
      <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

    </head>

    <body class="pace-done" data-aos-easing="ease" data-aos-duration="400" data-aos-delay="0">
        <!-- Navigation -->
        <div id="navigate">
          <div id="menu" class="title-menu">
              <div class="title d-flex align-items-center pl-1" style="font-family: Poppins">
                STUDENT DAY 2021
                <span class="font-weight-normal ml-1"></span>
                <button id="menu-button">
                  <span class="line-hamburger"></span>
                  <span class="line-hamburger"></span>
                  <span class="line-hamburger"></span>
                </button>
              </div>
          </div>

          <div id="menu-content" style="justify-content: center; align-items:center;width:100%">
            <div class="container-fluid">
              <div class="row d-flex align-items-center">
                <div class="col-sm-12 col-lg-6 py-2 my-auto text-center">
                  <img onclick="" src="{{asset('asset/logo/LOGO KAYON Stroke.png')}}" alt="Logo UNUD & Fakultas" class="img-fluid aos-init aos-animate" style="cursor: pointer;" data-aos="zoom-in-up" data-aos-delay="200">
                </div>
                <div class="menu-box col-sm-12 col-lg-6 px-4">
                 <ul>
                  <a href="/"><li>Beranda</li></a>
                  <a href="/pendaftaran"><li>Pendaftaran</li></a>
                  <a href="/petaunud"><li>Peta UNUD</li></a>
                  <a href="/ormawa"><li>Ormawa</li></a>
                  <a href="/misi"><li>Misi</li></a>
                  <a href="/guidebook"><li>Guidebook</li></a>
                  <a href="/galeri"><li>Galeri</li></a>
                  <a href="/panitia"><li>Panitia</li></a>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- Main content -->
      <main class="content-page" data-aos-delay="400"> 
        <div class="loader-bg">
          <img src="{{asset('asset/logo/loading2.gif')}}" alt="">
        </div>
        <button id="myBtn" title="Go to top"><i class="fas fa-chevron-up fa-2x"></i></button>
        @yield('content')
        <div class="popups" id="popup-2">
          <div class="overlay"></div>
          <div class="content" style="background-color:transparent;background-image:url('../asset/umum/cs.png'); background-repeat:no-repeat; background-position:center;">
            <div class="close-btn" onclick="nmodalcomingsoon()">??</div>
          </div>
        </div>
      </main>


      <!-- Footer -->
      <footer id="footer" class="bg-color-dark-scale-2 border border-right-0 border-left-0 border-bottom-0 border-color-light-3 mt-0">
        <div class="container-fluid py-4">
          <div class="row justify-content-md-center py-5 mt-3">
            <div class="col-md-12 col-lg-3  align-items-center  mb-5 mb-lg-0 text-center">
              <a href="/"><img src="{{asset('asset/logo/LOGO KAYON Stroke.png')}}" alt="Logo" class="img-fluid" style="max-width: 370px;text-align: center;"></a>
            </div>
            <div class="col-md-12 col-lg-2 text-center text-lg-left mb-5 mb-lg-0">
              <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Sekretariat</h5>
              <ul class="list list-unstyled">
                <li class="mb-1">
                  <p>Panitia Student Day 2021 Universitas Udayana</p>
                </li>
                <li class="mb-1">
                  <p>Direktorat Universitas Udayana <br><a href="https://goo.gl/maps/JghfBQnRHVA33pCm7" target="blank"><b class="text-primary">Jl. Kampus Bukit Jimbaran</b></a></p>
                </li>
              </ul>
            </div>
            <div class="col-md-12 col-lg-4 text-center text-lg-left mb-5 mb-lg-0 ">
              <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Alamat</h5>
              <div class="row">
                <div class="col-md-12 col-lg-6">
                  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.211123039704!2d115.21811441478401!3d-8.671462093769389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240eceb8d85e1%3A0x5708aacaf2361044!2sStudent%20Center%20Universitas%20Udayana!5e0!3m2!1sid!2sid!4v1597841723025!5m2!1sid!2sid" width="100%" height="200" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
                <div class="col-md-12 col-lg-6">
                  <p class="p-2">Student Center Universitas Udayana <br>Jl. DR. Goris No.10, Dangin Puri Klod, Kec. Denpasar Tim., Kota Denpasar, Bali 80234</p>
                </div>
              </div>
            </div>
            <div class="col-md-12 col-lg-3 text-center text-lg-left">
              <h5 class="text-5 text-transform-none font-weight-semibold text-color-light mb-4">Akun Resmi</h5>
              <p class="mt-3 mb-0 text-center text-lg-left">
                <i class="fab fa-instagram text-color-primary"></i>
                <a href="https://www.instagram.com/ksatriamudaudayana/" target="blank">
                  <span class="text-color-light opacity-7 pl-2">ksatriamudaudayana</span>
                </a><br>
                <i class="fa fa-globe text-color-primary"></i>
                <a href="https://bemudayana.id/" target="blank">
                  <span class="text-color-light opacity-7 pl-2">bemudayana.id</span>
                </a><br>
                <i class="fa fa-envelope text-color-primary"></i>
                <a href="mailto:studentday2020@bemudayana.id?subject=MessageTitle&amp; body=Message Content">
                  <span class="text-color-light opacity-7 pl-2">studentday2020@bemudayana.id</span>
                </a>
              </p>
            </div>
          </div>
        </div>
        <div class="footer-copyright footer-copyright-style-2 background-transparent footer-top-light-border">
          <div class="container py-2">
            <div class="row py-4">
              <div class="col d-flex align-items-center justify-content-center mb-4 mb-lg-0">
                <p>?? Copyright 2021. 3D Student Day 2021 Universitas Udayana.</p>
              </div>
            </div>
          </div>
        </div>
        </div>
      </footer>




      <!-- JQuery -->
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/venobox/1.9.0/venobox.min.js"></script>
      <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

      {{-- BS --}}
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

      {{-- paralax --}}
      <script src="https://cdnjs.cloudflare.com/ajax/libs/parallax/3.1.0/parallax.min.js"></script>

      {{-- 
      <script type="text/javascript" src="js/parallax_background-master/build/parallax_background.js"></script> --}}


      <script>

        $(window).on("load",function(){
          $(".loader-bg").fadeOut("slow");
        });


        $(document).ready(function() {
          var away = false;
          $('#myBtn').click(function() {
              $("html, body").animate({scrollTop: 0}, 500);
          });

          $(window).scroll(function() {
              if ($(this).scrollTop()<20)
              {
                  $('#myBtn').hide();
              }
              else
              {
                $('#myBtn').show();
              }
          });
      });
      </script>
      <script type="text/javascript" src="{{asset('js/script.js')}}"></script>
      <script>
        var scene = document.getElementById('scene');
        var parallaxInstance = new Parallax(scene, {
        relativeInput: true
        });
      </script>
      <script>
        function modalcomingsoon(){
          menu.classList.toggle('show');
          tombol.classList.toggle('show');
          document.getElementById("popup-2").classList.toggle("active"); 
        }

        function nmodalcomingsoon(){
          document.getElementById("popup-2").classList.remove("active");
        }

        function modalcomingsoon2(){
          document.getElementById("popup-2").classList.toggle("active"); 
        }
      </script>
      <!-- <script type="text/javascript">
        $('.menu-box ul a').on('click', function() {
            alert('clicked');
            $(this).parent().parent().find('.active').removeClass('active');
            $(this).parent().addClass('active');
        });
      </script> -->
    </body>
  </html>

