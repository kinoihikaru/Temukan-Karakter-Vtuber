@extends('layout.main')

@section('css')
<!-- Core theme CSS (includes Bootstrap)-->
 <link href="{!!asset('css/styles.css') !!}" rel="stylesheet" />
@endsection

@section('content')

<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand" href="/#head"><img src="{!!asset('assets/img/navbar-logo.png')!!}" alt="..." /></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav bold-f ms-auto py-4 py-lg-0">
                <li class="nav-item"><a class="nav-link" href="/#head">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="/#home">TKVtuber</a></li>
                <li class="nav-item"><a class="nav-link" href="/#karakter">Karakter</a></li>
                <li class="nav-item"><a class="nav-link" href="/#vtuberid">Vtuber ID</a></li>
            </ul>
        </div>
    </div>
</nav>

<header class="masthead" id="head" >
    <div class="container">
        <div class="masthead-subheading test text-center">Selamat Datang Vtuber!</div>
        <div class="masthead-heading text-uppercase text-center">Temukan Karakter Avatar Kamu</div>
        <a class="btn btn-primary btn-xl text-uppercase mb-5" href="/test">Ayo Cari Karakter</a>
    </div>
</header>

<section class="page-section" id="home">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading ">TKVtuber</h2>
            <div class="col-9 container">
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingOne">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                        Apa itu TKVtuber :
                    </button>
                  </h2>
                  <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        <strong>TKVtuber adalah </strong> Sebuah media untuk menetukan karakter avatar yang cocok buat kamu. TKVtuber menggunakan cara untuk memprediksi kepribadian kamu menggunakan <a href="https://kampuspsikologi.com/teori-big-five-personality/" target="_blank"><b>Big Five Personality Model</b></a> dan merekomendasikan anime berdasarkan genre yang cocok ditonton buat kamu.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                        Mengapa Harus TKVtuber :
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                        TKVtuber ini sangat cocok buat kamu yang ingin <strong> memulai jadi seorang Vtuber / seorang streamer virtual</strong> dan mencari inspirasi desain avatar dari anime yang kamu tonton. Selain itu, TKVtuber ini sangat cocok untuk menarik perhatian agensi vtuber dengan karakter yang kamu perankan.
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header" id="flush-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                        Vtuber dan Streamer Virtual adalah:
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">
                       <p> Jadi Vtuber itu kepanjangan dari Virtual Youtuber, adalah YouTuber yang diwakili oleh avatar digital yang dihasilkan oleh grafik komputer. <strong> Virtual youtuber merupakan karakter fiksi 2D maupun 3D </strong> yang menjalankan kanal YouTube. Virtual Youtuber berperan sebagai penghibur daring yang menggunakan avatar yang dibuat oleh komputer (biasanya terinspirasi oleh anime). </p>
                       <p> Jadi Vtuber itu sama aja dengan streamer virtual, cuman yang membedakan yaitu media yang dipakai Vtuber untuk stream adalah Youtube.</p>
                    </div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-headingFour">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Agensi-agensi vtuber apa saja yang ada di Indonesia :
                      </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">
                        Saat ini, sudah ada agensi yang bergerak di vtuber dan mencari bakat-bakat vtuber. Agensi vtuber yang sudah ada di Indonesia ada <strong> Hololive ID, Nijisanji ID, Maha5, Yume Reality, Harmonia Production, Nakama Virtual, Aspira Project, dan Arunika.</strong> Agensi tersebut mencari bakat dengan cara melihat avatar yang dia perankan.
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <a class="btn btn-primary btn-l text-uppercase mt-3" href="/test">Ayo Cari Karakter</a>
        </div>
    </div>
</section>

<!-- Services-->
<section class="page-section" id="karakter">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Karakter</h2>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                <img src="{{ asset('assets/karakter/comedy.png') }}" width= "200"  height="150" class="img-thumbnail rounded-circle">
                <h4 class="my-3">Comedian</h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/karakter/Masokis.gif') }}" width= "200"  height="150" class="img-thumbnail rounded-circle">
                <h4 class="my-3">Masokis</h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-md-4">
                <img src="{{ asset('assets/karakter/Sadis.png') }}" width= "200"  height="150" class="img-thumbnail rounded-circle">
                <h4 class="my-3">Sadis</h4>
                <p class="text-muted"></p>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-7">
                <img src="{{ asset('assets/karakter/Pemarah.gif') }}" width= "210"  height="150" class="img-thumbnail rounded-circle">
                <h4 class="my-3">Pemarah</h4>
                <p class="text-muted"></p>
            </div>
            <div class="col-md-2">
                <img src="{{ asset('assets/karakter/Bodoh.jpg') }}" width= "200"  height="150" class="img-thumbnail rounded-circle">
                <h4 class="my-3">Bodoh</h4>
                <p class="text-muted"></p>
            </div>
        </div>
    </div>
</section>

<section class="page-section bg-light" id="vtuberid">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">Vtuber ID</h2>
            <h3 class="section-subheading text-muted mb-4">Macam-macam Vtuber dari Indonesia dan Agensinya</h3>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 1-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal1">
                        <img class="img-fluid" src="assets/img/vtuberid/Ollie.png" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Kureiji Ollie</div>
                        <div class="portfolio-caption-subheading text-muted">Hololive ID</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 2-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal2">
                        <img class="img-fluid" src="assets/img/vtuberid/Evelyn.png" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Evelyn</div>
                        <div class="portfolio-caption-subheading text-muted">AMH Magz</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <!-- Portfolio item 3-->
                <div class="portfolio-item">
                    <a class="portfolio-link" data-bs-toggle="modal" href="#portfolioModal3">
                        <img class="img-fluid" src="assets/img/vtuberid/tada.jpg" alt="..." />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Tada Ace</div>
                        <div class="portfolio-caption-subheading text-muted">MetanoiaID</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@include('layout.partial.portfolio')

<footer class="footer py-4">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-start">Copyright &copy; Your Website 2021</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-dark btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-end">
                <a class="link-dark text-decoration-none me-3" href="#!">Privacy Policy</a>
                <a class="link-dark text-decoration-none" href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

@endsection

@section('js')
<script src="{!!asset('js/scripts.js') !!}"></script>
@endsection
