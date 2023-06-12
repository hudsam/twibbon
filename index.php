<?php
    $title = 'Twibbon';
    include 'template/header.php';
    include 'template/footer.php';
?>
<script type="text/javascript" rel="javascript">
    Swal.fire({
        title: 'Pilih Twibbon!',
        html: 'Tekan tombol di bawah ini untuk menggunakannya.',

        showDenyButton: true,
        showCancelButton: false,
        confirmButtonText: 'Masa Registrasi <i class="bi bi-emoji-smile"></i>',
        denyButtonText: 'Ikutan Challenge! <i class="bi bi-hand-thumbs-up"></i>',
        footer: '',

        allowOutsideClick: false,
        allowEscapeKey: false,
        closeOnClickOutside: false,
    }).then(result => {
        if (result.isConfirmed)
        {
            window.open('./registrasi.php', '_blank');
        }
        else if (result.isDenied)
        {
            window.open('./challenge.php', '_blank');
        }
        location.reload();
    });
</script>