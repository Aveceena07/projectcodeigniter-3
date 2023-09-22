<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body class="random-background min-vh-100 d-flex align-items-center">
    <div class='card w-50 m-auto p-3'>
        <h3 class="text-center">Tambah Data Siswa</h3>
        <form action="<?php echo base_url(
            'admin/aksi_tambah_siswa'
        ); ?>" enctype="multipart/form-data" method="post" class="row">
            <div class="mb-3 col-6">
                <label for="nama" class="form-label">Nama Siswa</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="mb-3 col-6">
                <label for="nisn" class="form-label">NISN</label>
                <input type="text" class="form-control" id="nisn" name="nisn">
            </div>
            <div class="mb-3 col-6">
                <label for="kelas" class="form-label">Kelas</label>
                <select name="kelas" class="form-select">
                    <option selected>Pilih Kelas</option>
                    <?php foreach ($kelas as $row): ?>
                        <option value="<?php echo $row->id; ?>">
                            <?php echo $row->tingkat_kelas .
                                ' ' .
                                $row->jurusan_kelas; ?>
                        </option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3 col-6">
                <label for="gender" class="form-label">Gender</label>
                <select name="gender" class="form-select">
                    <option selected>Pilih Gender</option>
                    <option value="Laki-Laki">Laki-Laki</option>
                    <option value="Perempuan">Perempuan</option>
                </select>
            </div>
            <button type="submit" class="success btn btn-success" name="submit">Tambah</button>
        </form>
    </div>
    <?php if ($this->session->flashdata('success')): ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'Berhasil',
                text: '<?php echo $this->session->flashdata('success'); ?>',
            });
        </script>
    <?php endif; ?>
</body>
</html>
