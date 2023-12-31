<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<style>
    .kartu{
        margin-left:35%;
    }
    .card{
        width:300px;
    }
    .card-body{
        background-color: #2A403F;
    }
.ikon {
    display: flex;
    align-items: center; 
}

.ikon i {
    margin-left: 170px;
}
    
</style>
<?php $this->load->view('sidebar'); ?> <!-- Sertakan sidebar -->
<body>

<div class="kartu d-flex">
<div class="row">
        <!-- Kartu Pertama -->
        <div class="col-md-6">
    <div class="card">
        <div class="card-body text-light">
            <h3 class="card-title">Jumlah Siswa</h3>
            <h1 class="ikon">
                <?php echo $siswa; ?>
                <i class="fas fa-user fa-2xl"></i>
            </h1>
        </div>
    </div>
</div>

        <!-- Kartu Kedua -->
        <div class="col-md-6">
            <div class="card">
                <div class="card-body text-light">
                    <h3 class="card-title">Jumlah Guru</h3>
                    <h1 class="ikon">
                <?php echo $guru; ?>
                <i class="fa-solid fa-user-tie fa-2xl"></i>
            </h1>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</body>
</html>