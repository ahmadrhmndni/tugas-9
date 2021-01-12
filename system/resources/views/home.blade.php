<!DOCTYPE html>
<html lang="en">

<head>
  @include('section.assets')

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top bg-dark">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{{ url('admin/beranda') }}">Jual Beli Laptop Online</a></h1>
      <nav class="nav-menu d-none d-lg-block ">
        <ul>
          <li class="active"><a href="{{ url('/home') }}">Home</a></li>
          <li><a href="{{ url('/produk') }}">Produk</a></li>
          <li><a href="{{ url('/kategori') }}">Kategori</a></li>
          <li><a href="{{ url('/registrasi') }}">Register</a></li>
          <li><a href="{{ url('/login') }}">Login</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id ="hero" class="d-flex align-items-center justify-content-center">
    <div class="container position-relative">
      <h1>Jual Beli Laptop Online</h1>
      <h2>Salah satu tempat jual beli Laptop terpecaya Yang Ada Di KETAPANG</h2>
    </div>
  </section><!-- End Hero -->
  <main id="main">
    <!-- ======= About Section ======= -->
    <section id="" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <a href=""><img src="{{url('public')}}/assets/img/about.jpg" class="img-fluid" alt=""></a>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <h3>Asus X452EA-VX026D</h3>
            <p>
              Memiliki slot RAM yang dapat di upgrade sampai 8 GB, dan VGA yang tak kalah baik dari Lenovo S400-9039, saya rasa laptop ini cukup baik jika dimanfaatkan sebagai laptop gaming kelas menengah.
            </p>
            <div class="row">
              <div class="col-md-6">
                <i class="bx bx-money"></i>
                <h4>Harga</h4>
                <p>RP.3.050.000</p>
              </div>
              <div class="col-md-6">
                <i class="bx bx-laptop"></i>
                <h4>Spesifikasi</h4>
                <p>Prosesor AMD A8 6410
Speed 2.0 GHz, 2 MB Cache
VGA AMD Radeon R5 1 GB
HDD 500 GB Sata 5400 RPM
RAM DDR3 2 GB
RAM Up  Up 12 GB
Ukuran Layar  14.1 inch</p>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
    <!-- ======= Team Section ======= -->
    <section class="team section-bg">
      <div class="container">

        <div class="row">
          @foreach($list as $item)
           <div class="col-lg-3 col-md-3 mt-4 d-flex align-items-stretch">
             <div class="member">
                <div class="member-img">
                    <a href="{{url('detail', $item->id)}}">
                       <img src="{{url("public/$item->foto")}}" alt="" class="img-fluid">
                    </div>
                <div class="member-info">
                    <h5>{{$item->nama}}</h5>
                    <span>Rp {{number_format($item->harga)}}</span>
                    </a>
                  </div>
                </div>
              </div>
          @endforeach
        </div>
        <div class="row">
          <div class="col-md-12 mt-5">
            <div class="float-right">
              {{$list->links()}}
            </div>
          </div>
       </div>

          
        </div>

      </div>
    </section><!-- End Team Section -->

    <div class="card my-3">
  <div class="container">
</div>


  <!-- ======= Footer ======= -->
    <div class="container d-md-flex py-4">

      <div class="mr-md-auto text-center text-md-left">
        <div class="copyright">
          &copy; Copyright <strong><span>Jual Beli Laptop Online</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/baker-free-onepage-bootstrap-theme/ -->
          Designed by <a>AhmadRhmndni</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
        <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top"><i class="bx bx-up-arrow-alt"></i></a>

  <!-- Vendor JS Files -->
 @include('section.js')

</body>

</html>