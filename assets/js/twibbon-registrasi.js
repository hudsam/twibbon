$(document).ready(function() {
    var imageLoader = document.getElementById("imageLoader");
    imageLoader.addEventListener("change", handleImage, false);
    var canvas = document.getElementById("imageCanvas");
    canvas.width = 1080;
    canvas.height = 1080;
    var ctx = canvas.getContext("2d");

    function popupResult(result) {
        var html;
        if (result.html) {
            html = result.html;
        }
        if (result.src) {
            html =
                '<img class="border border-1 img-fluid" src="' + result.src + '" />' +
                '<p class="mb-3 mt-3">Silakan tekan lama pada gambar dan pilih "Download image" atau gunakan tombol di bawah ini</p>' +
                '<a href="' + result.src + '" id="downloadlink" class="btn btn-primary mb-3" download="Twibbon.png"><i class="bi bi-cloud-arrow-down-fill"></i> Unduh Twibbon</a>';
        }
        Swal.fire({
            title: 'Taraaaa !',
            html: html,
            showConfirmButton: false,
            showCancelButton: false,
            showCloseButton: true,
        });
    }

    function drawFrame() {
        var img = new Image();
        img.crossOrigin = "Anonymous";

        img.src = './assets/images/Frame.png';
        img.onload = function() {
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            popupResult({
                src: document.getElementById("imageCanvas").toDataURL("image/jpeg")
            });
        };
    }

    function drawProfPict(src) {
        var img = new Image();
        img.onload = function() {
            ctx.drawImage(img, 0, 0, canvas.width, canvas.height);
            drawFrame();
        };
        img.src = src;
    }

    function handleImage(e) {
        ctx.clearRect(0, 0, canvas.width, canvas.height);

        var img_url = e.target.files[0];
        loadImage.parseMetaData(img_url, function(data) {
            var ori = 0;
            if (data.exif) {
                ori = data.exif.get("Orientation");
            }

            var loadingImage = loadImage(
                img_url,
                function(canvas) {
                    $(".cr-slider").css("visibility", "visible");
                    $(".loader").remove();

                    var dataUrl = canvas.toDataURL("image/jpeg");
                    basic.croppie("bind", {
                        url: dataUrl
                    });
                }, {
                    maxWidth: 1800,
                    maxHeight: 1800,
                    orientation: ori,
                    canvas: true
                }
            );

            loadingImage.onloadstart = function(event) {
                $(".cr-viewport").append('<div class="loader"></div>');
            };
            $('div#rotate-image').removeClass('d-none');
        });
    }

    function downloadCanvas(link, canvasId, filename) {
        console.log(link);
        console.log(canvasId);
        console.log(filename);
        link.href = document.getElementById(canvasId).toDataURL("image/jpeg");
        link.download = filename;
    }

    $("#downloadlink").on("click", ".sweet-alert", function() {
        console.log(this);
        downloadCanvas(this, "imageCanvas", "Twibbon.png");
    });

    var basic = $("#demo-basic").croppie({
        viewport: {
            width: Math.min(300, window.innerWidth - 50),
            height: Math.min(300, window.innerWidth - 50)
        },
        boundary: {
            width: Math.min(300, window.innerWidth - 50),
            height: Math.min(300, window.innerWidth - 50)
        },
        enableOrientation: true,
    });

    $(".basic-result").on("click", function(e) {
        e.preventDefault();

        var downloadButton = this;
        basic
            .croppie("result", {
                type: "canvas"
            })
            .then(function(resp) {
                drawProfPict(resp);
            });
    });
    $("#caption").on("click", function() {
        let copytext = $(".form-control");

        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 3000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        Swal.fire({
            title: 'Status Akun Instagram',
            text: 'Apakah sudah berstatus publik?',

            showDenyButton: true,
            showCancelButton: false,
            confirmButtonText: 'Sudah dong! <i class="bi bi-emoji-smile-fill"></i>',
            denyButtonText: `Belum nih... <i class="bi bi-emoji-frown-fill"></i>`,
        }).then((result) =>
        {
            if (result.isConfirmed)
            {
                copytext.select();
                document.execCommand("copy");
                Toast.fire({
                    icon: 'success',
                    html: '<em>Caption</em> telah disalin.',
                });
            } else if (result.isDenied)
            {
                Swal.fire({
                    title: 'Ubah Status Akun',
                    text: 'Ganti yang awalnya privat menjadi publik ya. Karena ini akan membantu Panitia reviu data pendaftar.',
                    icon: 'warning',
                    confirmButtonText: 'Buka akun <i class="bi bi-instagram"></i> Instagram',
                }).then(function() {
                    window.open('https://www.instagram.com', '_blank');
                });
            }
        });
    });

    $("#rotate-left").click(function() {
        basic.croppie('rotate', parseInt($(this).data('deg')));
    });

    $("#rotate-right").click(function() {
        basic.croppie('rotate', parseInt($(this).data('deg')));
    });

});