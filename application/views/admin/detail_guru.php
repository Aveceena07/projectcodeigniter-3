<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Siswa</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
        <div class="container mt-5">
            <h1>Detail Guru</h1>
            <div class="card">
                <div class="card-body">
                    <p class="card-text">Nama Guru:
                        <?php echo $guru->nama_guru; ?>
                    </p>
                    <p class="card-text">NIK:
                        <?php echo $guru->nik; ?>
                    </p>
                    <p class="card-text">Gender:
                        <?php echo $guru->gender; ?>
                    </p>
                    <p class="card-text">Mapel:
                    <?php echo tampil_full_mapel_byid($guru->id_mapel); ?>
                    </p>
                    <!-- Tambahkan informasi detail lainnya sesuai kebutuhan -->
                </div>
                <a href="<?php echo base_url(
                    'admin/siswa'
                ); ?>" class="btn btn-danger">Kembali</a>
            </div>
        </div>

    <!-- Sertakan skrip JavaScript Bootstrap jika diperlukan -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>