<style>
#hero {
    background-color: #000;
    padding: 60px 0;
}

.hero-title {
    font-size: 4rem;
    text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
}

.hero-subtitle {
    font-size: 1.5rem;
}

.location-icon {
    width: 80px;
    height: 80px;
    border-radius: 10px;
    box-shadow: 2px 2px 4px rgba(0,0,0,0.3);
}

/* Media queries untuk responsivitas */
@media screen and (max-width: 992px) {
    .hero-title {
        font-size: 3.5rem;
    }
}

@media screen and (max-width: 768px) {
    .hero-title {
        font-size: 3rem;
    }
    .hero-subtitle {
        font-size: 1.2rem;
    }
}

@media screen and (max-width: 576px) {
    .hero-title {
        font-size: 2.5rem;
    }
    .hero-subtitle {
        font-size: 1rem;
    }
    .location-icon {
        width: 60px;
        height: 60px;
    }
}
</style>
<section id="hero" class="min-vh-100 d-flex align-items-center text-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h5 class="text-white" data-aos="fade-right">10 - 13 Juli 2024</h5>
                <h1 data-aos="fade-left" class="text-uppercase text-white fw-semibold display-2 hero-title">RAKORNIS PERWADAG</h1>
                <div class="row py-2 justify-content-center">
                    <div class="col-12 col-md-8 px-0 d-flex align-items-center justify-content-center">
                        <img data-aos="fade-right" class="me-3 theme-shadow location-icon" src="{{ asset('assets/images/icon-lokasi.png')}}"
                            alt="Lokasi">
                        <div class="text-left d-flex flex-column align-items-start">
                            <h2 data-aos="fade-right" class="h5 mb-0 text-white">Lokasi</h2>
                            <p data-aos="fade-right" class="mb-0 text-white" style="font-weight: 500; text-shadow: 2px 2px 4px rgba(0,0,0,0.5);">Grand Hyatt Melbourne, Australia</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Arahan Menteri Perdagangan</h1>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-12 mb-4 mb-lg-0 text-center" data-aos="fade-down" data-aos-delay="50">
                <img src="{{ asset('assets/images/mendag.jpg')}}" alt="" class="img-fluid" style="border-radius: 50px; width: 60%; margin-bottom: 10px;">
            </div>
            <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5 col-12 text-center text-lg-start">
                <h1 style="margin-bottom: 10px;"></h1>
                <p class="mt-3 mb-4" style="font-size: 1.1rem; color: black;"> 
                    <i>"Perwadag merupakan ujung tombak promosi produk Indonesia di luar negeri, adanya Rakornis Perwadag ini saya harap dapat menjadi ajang penguatan strategi perdagangan dan menjadi upaya peningkatan ekspor Indonesia di masa mendatang </i> 
                    " - Mendag Zulkifli Hasan
                </p>
            </div>
        </div>
    </div>
</section>

<section id="about" class="section-padding">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="50">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold"> Sambutan Sekjen Kemendag</h1>
                    <div class="line"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-12 mb-4 mb-lg-0 text-center" data-aos="fade-down" data-aos-delay="50">
                <img src="{{ asset('assets/images/Sekjensuhanto.png')}}" alt="" class="img-fluid" style="border-radius: 50px; width: 75%; margin-bottom: 10px;">
            </div>
            <div data-aos="fade-down" data-aos-delay="150" class="col-lg-5 col-12 text-center text-lg-start">
                <h1 style="margin-bottom: 10px;"></h1>
                <p class="mt-3 mb-4" style="font-size: 1.1rem; color:black"> <i>Rakornis Perwadag merupakan salah satu upaya Kemendag dalam meningkatkan kompetensi ekspor para wakil kami yang tersebar di berbagai negara, dimana nantinya para Perwadag akan makin kuat dalam mendampingi pelaku usaha menembus pasar ekspor." </i> "- Sekjen Suhanto</p>
            </div>
        </div>
    </div>
</section>


<section id="about" class="section-padding" style="padding: 60px 0;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5" data-aos="fade-down" data-aos-delay="50">
                <!-- Content removed as per the provided code -->
            </div>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-5 mb-4 mb-lg-0 text-center text-lg-start" data-aos="fade-down" data-aos-delay="150">
                <h1 style="font-size: 3rem;">Download Buku Panduan</h1>
                <p class="mt-3 mb-4" style="font-size: 1rem;">

                </p>
            </div>
            <div class="col-lg-6 d-flex justify-content-center justify-content-lg-end" data-aos="fade-down" data-aos-delay="50">
                <div class="border-box p-3" style="border: 4px solid #ddd; border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); width: 70%; margin: 20px 0;">
                    <img src="{{ asset('assets/images/guidebook.jpeg')}}" alt="" style="border-radius: 20px; width: 100%; margin-bottom: 20px;">
                    <div class="text-center">
                        <a href="{{ asset('assets/download/Buku Panduan-2.pdf')}}" download class="btn btn-primary" style="border-radius: 20px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">Download Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- COUNTER -->
<section id="counter" class="section-padding">
    <div class="container text-center">
        <div class="mb-5 pb-5 text-center"> <span class="icon-title icon-bg-light rounded-circle  mb-3">
                <img class="icon-title-inner" src="{{ asset('assets/images/refresh.svg')}}" alt=""
                    style="width: 200px; height: 200px;">
            </span>
            <h2 class="text-white h1">Hitung Mundur Pembukaan Acara</h2>
            <p class="w-md-70 mx-auto text-white mb-0 lead">
                11 Juli 2024 - 08:00 AM </p>
        </div>
        <div class="row g-4">
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="150">
                <div class="countdown-item">
                    <h1 class="text-white display-4" id="days"></h1>
                    <h4 class="text-uppercase mb-0 text-white mt-3">Hari</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="250">
                <div class="countdown-item">
                    <h1 class="text-white display-4" id="hours"></h1>
                    <h4 class="text-uppercase mb-0 text-white mt-3">Jam</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="350">
                <div class="countdown-item">
                    <h1 class="text-white display-4" id="minutes"></h1>
                    <h4 class="text-uppercase mb-0 text-white mt-3">Menit</h4>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6" data-aos="fade-down" data-aos-delay="450">
                <div class="countdown-item">
                    <h1 class="text-white display-4" id="seconds"></h1>
                    <h4 class="text-uppercase mb-0 text-white mt-3">Detik</h4>
                </div>
            </div>
        </div>
    </div>
</section>

<div style="margin-top: 200px;"></div> <!-- Jeda antara section atas dan video -->
<h1 style="text-align: center;">Video Teaser</h1>

<div id="carouselVideoExample" data-mdb-carousel-init class="carousel slide carousel-fade" data-mdb-ride="carousel">
  <!-- Indicators -->
  <div class="carousel-indicators">
    <button type="button" data-mdb-button-init data-mdb-target="#carouselVideoExample" data-mdb-slide-to="0" class="active"
      aria-current="true" aria-label="Slide 1"></button>
  </div>

  <!-- Inner -->
  <div class="carousel-inner">
    <!-- Single item -->
    <div class="carousel-item active">
      <video class="img-fluid" autoplay loop muted>
        <source src="{{asset('assets/images/OPENING.mp4')}}" type="video/mp4" />
      </video>
      <div class="carousel-caption d-none d-md-block">
        <h5></h5>
        <p>
          Opening Teaser Rakornis 2024
        </p>
      </div>
    </div>
  </div>
  <!-- Inner -->

  <!-- Controls (optional, can be removed if not needed) -->
  <button data-mdb-button-init class="carousel-control-prev" type="button" data-mdb-target="#carouselVideoExample"
    data-mdb-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button data-mdb-button-init class="carousel-control-next" type="button" data-mdb-target="#carouselVideoExample"
    data-mdb-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>

  <style>
  #carouselVideoExample {
  width: 80%; /* Atur lebar sesuai kebutuhan */
  margin: 30px auto; /* Center alignment dan margin atas-bawah untuk jeda */
  border-radius: 15px; /* Atur border radius */
  overflow: hidden; /* Untuk memastikan video terpotong dengan border radius */
  box-shadow: rgba(0, 0, 0, 0.4) 0px 2px 4px, rgba(0, 0, 0, 0.3) 0px 7px 13px -3px, rgba(0, 0, 0, 0.2) 0px -3px 0px inset; /* Optional for adding shadow */
}

#carouselVideoExample .carousel-inner {
  border-radius: 15px; /* Border radius for inner content */
}

#carouselVideoExample video {
  width: 100%;
  height: auto; /* Atur tinggi sesuai kebutuhan */
  border-radius: 15px; /* Border radius for video */
}

h1 {
  text-align: center;
  margin-bottom: 20px; /* Jeda antara h1 dan carousel */
}
</style>

<section id="sekitar" class="section-padding border-top">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center" data-aos="fade-down" data-aos-delay="150">
                <div class="section-title">
                    <h1 class="display-4 fw-semibold">Tempat Acara</h1>
                    <div class="line"></div>
                    <p>Berikut adalah gambaran-gambaran mengenai tempat yang akan digunakan untuk acara RAKORNIS PERWADAG 2024</p>
                </div>
            </div>
        </div>
        <div class="row g-4 text-center ">
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href="" target="_blank">
                            <img src="{{ asset('assets/images/1.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Free Tram Zone</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href="" target="_blank">
                            <img src="{{ asset('assets/images/2.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Layout Ruangan</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href=""
                            target="_blank">
                            <img src="{{ asset('assets/images/3.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Photo Wall</h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="row g-4 text-center pt-5">
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="150">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href="" target="_blank">
                            <img src="{{ asset('assets/images/4.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Mini Expo</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="250">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href=""
                            target="_blank">
                            <img src="{{ asset('assets/images/5.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Layout Sketsa </h4>
                    </div>
                </div>
            </div>
            <div class="col-md-4" data-aos="fade-down" data-aos-delay="350">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href=""
                            target="_blank">
                            <img src="{{ asset('assets/images/6.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Savoy Ballroom</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-down" data-aos-delay="350">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href=""
                            target="_blank">
                            <img src="{{ asset('assets/images/7.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Foyer</h4>
                    </div>
                </div>
            </div>
            <div class="col-md-6" data-aos="fade-down" data-aos-delay="350">
                <div class="team-member image-zoom">
                    <div class="image-zoom-wrapper">
                        <a href=""
                            target="_blank">
                            <img src="{{ asset('assets/images/8.png')}}" alt="">
                        </a>
                    </div>
                    <div class="team-member-content">
                        <h4 class="text-white">Peta</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
