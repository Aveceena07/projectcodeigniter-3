<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
  table {
    max-width: 800px; 
    margin-left: 400px; 
    margin-top: 10px; 
  }
  .add {
    text-align: center; 
  }

  .add a {
    margin-right:520px;
    margin-top: 50px; 
  }
  </style>
<?php $this->load->view('sidebar'); ?> 
<body>
  <table class="table text-center">
    <div class="add">
          <a href="<?php echo base_url(
              'admin/tambah_siswa'
          ); ?>" type="button" class="btn btn-success mt-1"><i class="fa-solid fa-user-plus"></i></a>
    </div>
  <thead>
    <tr>
    <th scope="col">No</th>
    <th scope="col">Nama Siswa</th>
    <th scope="col">NISN</th>
    <th scope="col">Gender</th>
    <th scope="col">Kelas</th>
    <th class="text-center">Aksi</th>
    </tr>
  </thead>
  <tbody>
  <?php
  $no = 0;
  foreach ($siswa as $row):
      $no++; ?>
    <tr>
      <td><?php echo $no; ?></td>
      <td><?php echo $row->nama_siswa; ?></td>
      <td><?php echo $row->nisn; ?></td>
      <td><?php echo $row->gender; ?></td>
      <td><?php echo tampil_full_kelas_byid($row->id_kelas); ?></td>
      <td class="text-center">
        <a href="<?php echo base_url('admin/detail_siswa/') .
            $row->id_siswa; ?>" type="button" class="btn btn-warning"><i class="fa-solid fa-circle-info"></i></a>
        <button  onclick="hapus(<?php echo $row->id_siswa; ?>)" type="button" class="btn btn-danger"><i class="fa-solid fa-trash-can"></i></button>
        <a href="<?php echo base_url('admin/ubah_siswa/') .
            $row->id_siswa; ?>" type="button" class="btn btn-warning"><i class="fa-solid fa-pen-to-square"></i></a>
      </td>
     </tr>
    <?php
  endforeach;
  ?>
  </tbody>
</table>
<script>
function hapus(id) {
    Swal.fire({
        title: 'Konfirmasi Hapus',
        text: 'Anda yakin ingin menghapus siswa ini?',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, Hapus!',
        cancelButtonText: 'Batal'
    }).then((result) => {
        if (result.isConfirmed) {
            // Jika pengguna mengklik "Ya, Hapus!", arahkan ke fungsi hapus di controller
            window.location.href = "<?php echo base_url(
                'admin/hapus_siswa/'
            ); ?>" + id;
        }
    });
}
</script>
<!-- <script>
        function hapus(id) {
        var yes = confirm('Yakin Dex?');
        if (yes == true) {
        window.location.href = "<?php echo base_url(
            'admin/hapus_siswa/'
        ); ?>" + id;
    }
  }
        </script> -->
</body>
</html>