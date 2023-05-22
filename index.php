<?php
    $title = 'Twibbon';
    include 'template/header.php';
?>
<nav class="navbar navbar-expand-lg navbar-light bg-secondary fixed-top">
    <div class="container-fluid">
        <span class="navbar-toggler text-light">Program RDD</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-light" href="">Program Relawan Donor Darah</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<body class="bg-light">
    <div class="container">
        <link rel="stylesheet" type="text/css" href="./assets/croppie/croppie.css" />
        <link rel="stylesheet" type="text/css" href="./assets/css/twibbon.css" />
        <main>
            <div class="pt-5 pb-3 text-center">
                <img class="d-block mx-auto mt-3 mb-2" src="https://pddimalang.id/wp-content/uploads/2021/08/LOGO_PDDI_KOTA_MALANG.png" alt="Logo PDDI Kota Malang" width="100" height="125">
                <h4>Twibbon Program Relawan Donor Darah</h4>
                <h2></h2>
                <p class="lead">Ayo! Tampil kece bersama untuk memeriahkan kegiatan.... <i class="bi bi-emoji-sunglasses"></i></p>
            </div>
            <div class="card">
                <h5 class="card-header bg-warning text-dark fw-bold"><i class="bi bi-sunglasses"></i> Atur Twibbon</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 position-relative">
                            <div class="card top-50 start-50 translate-middle" style="border-style: hidden;">
                                <canvas id="imageCanvas" class="image-canvas"></canvas>
                                <div class="profile-pic-wrap">
                                    <div id="demo-basic"></div>
                                </div>
                                <hr class="dropdown-divider">
                                <div class="card-body text-center">
                                    <input type="file" name="file" id="imageLoader" class="inputfile" accept="image/*" />
                                    <label for="imageLoader" class="btn btn-primary mt-2"><i class="bi bi-images"></i> Pilih Foto Kece</label>
                                    <button type="button" class="btn btn-outline-success mt-2 basic-result"><i class="bi bi-card-image"></i> Lihat Hasilnya</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8">
                            <div class="card top-50 start-50 translate-middle">
                                <div class="card-header"><em>Caption</em></div>
                                <div class="card-body">
                                    <small class="text-primary fw-bold"><i class="bi bi-info-circle-fill"></i> Tekan tepat pada <em>caption</em> untuk menyalinnya.</small>
                                    <textarea id="caption" class="form-control mt-3" rows="17" style="resize: none;" readonly>[Program Relawan Donor Darah] ....</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <small class="text-muted d-none">Media dengan tag @pddi.malang</small>
            <div class="row flex-row flex-nowrap pb-4 pt-2 media-list d-none" style="overflow-x: auto;">
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYrU2YPvrz0/" target="_blank">
                            <img src="./assets/images/twibbon/271673887_357344659078561_7908552647035306399_n.jpg" class="card-img-top" alt="CYrU2YPvrz0">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYrPM77vUsc/" target="_blank">
                            <img src="./assets/images/twibbon/271838038_326875206110783_7558927494031234626_n.webp.jpg" class="card-img-top" alt="CYrPM77vUsc">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="https://www.instagram.com/p/CYrHYr-PYvz/" target="_blank">
                            <img src="./assets/images/twibbon/271701277_357777935688780_2451192686122682663_n.webp.jpg" class="card-img-top" alt="CYrHYr-PYvz">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYq9fibhqMt/" target="_blank">
                            <img src="./assets/images/twibbon/271676892_276098327924219_5169940462771688051_n.webp.jpg" class="card-img-top" alt="CYq9fibhqMt">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYq68PDhq8n/" target="_blank">
                            <img src="./assets/images/twibbon/271638778_1723249074733615_5061170833911587758_n.webp.jpg" class="card-img-top" alt="CYq68PDhq8n">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYq45AmPjWm/" target="_blank">
                            <img src="./assets/images/twibbon/271768962_1812543492265217_6247227838065805045_n.webp.jpg" class="card-img-top" alt="CYq45AmPjWm">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYq41G_F3p8/" target="_blank">
                            <img src="./assets/images/twibbon/271884625_252230546993289_2402648830344609864_n.webp.jpg" class="card-img-top" alt="CYq41G_F3p8">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYq21pUvnCE/" target="_blank">
                            <img src="./assets/images/twibbon/271858731_358109705665852_2959740822716978766_n.jpg" class="card-img-top" alt="CYq21pUvnCE">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYq2qatlovp/" target="_blank">
                            <img src="./assets/images/twibbon/271687258_642793806863557_731300246005082076_n.jpg" class="card-img-top" alt="CYq2qatlovp">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYq2ZPdPLtT/" target="_blank">
                            <img src="./assets/images/twibbon/271694035_5084774744888923_3765258600590054399_n.webp.jpg" class="card-img-top" alt="CYq2ZPdPLtT">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYq1UPYpWNz/" target="_blank">
                            <img src="./assets/images/twibbon/271806642_1154227488443199_4529404457137158743_n.webp.jpg" class="card-img-top" alt="CYq1UPYpWNz">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYqydO8JEwp/" target="_blank">
                            <img src="./assets/images/twibbon/271681549_732930711003654_2134669685956464563_n.webp.jpg" class="card-img-top" alt="CYqydO8JEwp">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYqxguzBp9i/" target="_blank">
                            <img src="./assets/images/twibbon/271845480_333260412004644_2508373413619589374_n.jpg" class="card-img-top" alt="CYqxguzBp9i">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYqxMUwlz2d/" target="_blank">
                            <img src="./assets/images/twibbon/271762920_1704422666430084_3217856013084431199_n.jpg" class="card-img-top" alt="CYqxMUwlz2d">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYqvs8AlEyH/" target="_blank">
                            <img src="./assets/images/twibbon/271907117_1507335962975906_4544586086404320777_n.webp.jpg" class="card-img-top" alt="CYqvs8AlEyH">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYqvfCnP5rw/" target="_blank">
                            <img src="./assets/images/twibbon/271704514_249077514036554_778339559656302414_n.webp.jpg" class="card-img-top" alt="CYqvfCnP5rw">
                        </a>
                    </div>
                </div>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="//www.instagram.com/p/CYqt_5avZpE/" target="_blank">
                            <img src="./assets/images/twibbon/271846668_620070435914130_341828203705915433_n.jpg" class="card-img-top" alt="CYqt_5avZpE">
                        </a>
                    </div>
                </div>
            </div>
        </main>
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top mt-5">
            <p class="col-md-4 mb-0 text-muted">&copy; 2023 · PDDI Kota Malang</p>
            <a href="" style="pointer-events: none;" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <img class="bi me-2" src="https://pddimalang.id/wp-content/uploads/2021/08/LOGO_PDDI_KOTA_MALANG.png" alt="Logo PDDI Kota Malang" width="50" height="65">
            </a>
            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a target="_blank" href="mailto:pddi.malang@gmail.com"><i class="bi bi-envelope-fill"></i></a></li>
                <li class="ms-3"><a target="_blank" href="//pddimalang.id"><i class="bi bi-globe"></i></a></li>
                <li class="ms-3"><a target="_blank" href="//www.instagram.com/pddi.malang8"><i class="bi bi-instagram"></i></a></li>
                <li class="ms-3"><a target="_blank" href="//www.facebook.com/groups/195305698218"><i class="bi bi-facebook"></i></a></li>
                <li class="ms-3"><a target="_blank" href="//twitter.com/pddi_malang"><i class="bi bi-twitter"></i></a></li>
                <li class="ms-3"><a target="_blank" href="//www.youtube.com/@pddiperhimpunandonordarahi5186"><i class="bi bi-youtube"></i></a></li>
                <li class="ms-3"><a target="_blank" href="//www.google.com/search?q=PDDI Kota Malang"><i class="bi bi-google"></i></a></li>
            </ul>
        </footer>
    </div>
</body>
<?php include 'template/footer.php'; ?>
<script type="text/javascript" rel="script" src="./assets/croppie/croppie.js"></script>
<script type="text/javascript" rel="script" src="./assets/js/load-image.all.min.js"></script>
<script type="text/javascript" rel="script" src="./assets/js/twibbon.js"></script>
