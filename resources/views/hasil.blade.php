<nav class="navbar navbar-expand-lg navbar-dark" id="mainNav">
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
                <li class="nav-item"><a class="nav-link" href="/#karakter">Karakter Sistem</a></li>
                <li class="nav-item"><a class="nav-link" href="/#vtuberid">Vtuber ID</a></li>
                <li class="nav-item"><a class="nav-link" href="/test#user">User</a></li>
            </ul>
        </div>
    </div>
</nav>

<section class="page-section" >
    <div class="containere">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Karakter kamu adalah : </h2>
                <h3 class="section-subheading text-muted">Metode <strong>SAW</strong> dan Metode <strong>TOPSIS</strong></h3>
            </div>
            <div class="row text-center">
                <div class="col-md-4" >
                    <div id="karakter">
                    </div>
                </div>
                <div class="col-md-4">
                    <h4 class="my-3"><strong> Karakter Sistem</strong></h4>
                    <table class="table table-condensed col-3">
                        <thead>
                        <tr>
                            <th>Karakter</th>
                            <th>Hasil</th>
                            <th>Ranking</th>
                        </tr>
                        </thead>
                        <tbody id="hasil">
                        </tbody>
                    </table>
                </div>
                <div class="col-md-4" >
                    <h4 class="my-3"><strong> Kriteria Big Five </strong></h4>
                    <table class="table table-condensed col-3">
                        <thead>
                        <tr>
                            <th>Personality</th>
                            <th>Kepentingan</th>
                            <th>Ranking</th>
                        </tr>
                        </thead>
                        <tbody id="bigfive">
                         </tbody>
                    </table>
                </div>
            </div>
            <div class="row text-center">
                <div class="col-md-3" >
                    <h4 class="my-3"><strong> Rekomendasi Genre</strong></h4>
                    <table class="table table-condensed col-3">
                        <thead>
                        <tr>
                            <th>Kepentingan</th>
                            <th>Genre</th>
                        </tr>
                        </thead>
                        <tbody id="genre">
                        </tbody>
                    </table>
                </div>
                <div class="col-md-9" >
                    <h4 class="my-3">Keterangan</h4>
                    <p class="text-muted-m">Anda bisa mencari inspirasi alternatif karakter dari sistem berdasarkan rekomendasi genre dan anda bisa mambangun alternatif karakter berdasarkan skor tinggi atau skor rendah dari kriteria bigfive</p>
                    <p><strong>Jangan lupa memberikan respon tentang aplikasi yang saya buat <a href="https://forms.gle/QDTzKfrNuZJcfx5bA" target="_blank"> Disini......</a></strong></p>
                </div>
            </div>
    </div>
</section>

<section class="page-section" id="user">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading text-uppercase">User Pemakai Sistem</h2>
            <h3 class="section-subheading text-muted">Kamu bisa melihat beberapa user yang sudah memakai sistem</h3>
        </div>
        <div class="row text-center">
            <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Kriteria</th>
                    <th scope="col">Karakter</th>
                    <th scope="col">Genre</th>
                  </tr>
                </thead>
                <tbody id="viewUser">
                </tbody>
              </table>
        </div>
    </div>
</section>
<footer class="footer py-4">
    <div class="containere">
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
