<?php
    $title = 'Twibbon';
    $instagram = 'https://www.instagram.com/p/';
    $website = 'https://pddimalang.id/wp-content/uploads/';
    $source = './assets/images/pengguna.json';

    $data['post'] = [
        'CsuT37pBMj0', 'CsnlhkdvPNo', 'Csmdu5Hh9-l',
    ];

    $data['image'] = [
        '2023/05/CsuT37pBMj0.jpeg','2023/05/CsnlhkdvPNo.jpeg', '2023/05/Csmdu5Hh9-l.jpeg', 
    ];

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
        <link rel="stylesheet" type="text/css" href="./assets/css/twibbon-registrasi.css" />
        <main>
            <div class="pt-5 pb-3 text-center">
                <img class="d-block mx-auto mt-3 mb-2" src="https://pddimalang.id/wp-content/uploads/2021/08/LOGO_PDDI_KOTA_MALANG.png" alt="Logo PDDI Kota Malang" width="100" height="125">
                <h4>Twibbon Program Relawan Donor Darah</h4>
                <h2></h2>
                <p class="lead">Ayo! Tampil kece bersama untuk memeriahkan kegiatan.... <i class="bi bi-emoji-sunglasses"></i></p>
            </div>
            <div class="card mb-3">
                <h5 class="card-header bg-warning text-dark fw-bold"><i class="bi bi-sunglasses"></i> Atur Twibbon</h5>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 position-relative">
                            <div class="card top-50 start-50 translate-middle" style="border-style: hidden;">
                                <canvas id="imageCanvas" class="image-canvas"></canvas>
                                <div class="profile-pic-wrap">
                                    <div id="demo-basic"></div>
                                    <div class="row text-center d-none" id="rotate-image">
                                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                        <input type="radio" class="btn-check" name="btnradio" id="rotate-left" data-deg="-90" autocomplete="off">
                                        <label class="btn btn-outline-primary btn-sm" for="rotate-left"><i class="bi bi-arrow-counterclockwise"></i> Kiri</label>

                                        <input type="radio" class="btn-check" name="btnradio" id="rotate-right" data-deg="90" autocomplete="off">
                                        <label class="btn btn-outline-primary btn-sm" for="rotate-right"><i class="bi bi-arrow-clockwise"></i> Kanan</label>
                                        </div>
                                    </div>
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
                                    <textarea id="caption" class="form-control mt-3" rows="17" style="resize: none;" readonly>🩸✨ SIAP AMBIL PERAN BERSAMA PDDI KOTA MALANG ✨🩸

Aloha Relawan! {nama kecemu} sudah berencana untuk menjadi bagian dari program pelatihan relawan donor darah 2023 yang diselenggarakan oleh PDDI Kota Malang ( @pddi.malang - @1000donordarahmilenial ) 🔥.

" Generasi Muda sebagai Garda Terdepan Penggerak Donor Darah ". Yuk ikut dan jadilah penggerak donor darah Kota Malang!

📝 Pendaftaran : 23 Mei - 4 Juni 2023
🌐 Melalui tautan : www.pddimalang/program-rdd

Kamu kapan nih? {mention 3 teman kecemu}
Kami Tunggu ya 🙌

#PelatihanRelawanDonorDarah2023 #RelawanDonorDarah #PDDIKotaMalang</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <small class="text-muted">Media dengan tag @pddi.malang dan @1000donordarahmilenial</small>
            <div class="row flex-row flex-nowrap pb-4 pt-2 media-list" style="overflow-x: auto;">
            <?php
                if (sizeof($data['post']) === sizeof($data['image'])):
                    for ($file = 0; $file < sizeof($data['image']); $file++):
            ?>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="<?php echo $instagram . $data['post'][$file]; ?>" target="_blank">
                            <img src="<?php echo $website . $data['image'][$file]; ?>" class="card-img-top" alt="CYq9fibhqMt">
                        </a>
                    </div>
                </div>
            <?php endfor; endif; ?>

            <?php for ($temp = 0; $temp < 5; $temp++): ?>
                <div class="col-2">
                    <div class="card card-block">
                        <a href="index.php">
                            <img src="https://via.placeholder.com/195x195?text=Buat Versimu!" class="card-img-top" alt="CYqt_5avZpE">
                        </a>
                    </div>
                </div>
            <?php endfor; ?>
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
<script type="text/javascript" rel="script" src="./assets/js/twibbon-registrasi.js"></script>
