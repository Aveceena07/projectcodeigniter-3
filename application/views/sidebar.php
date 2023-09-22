<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins&display=swap">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
        <script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<style>*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  text-decoration: none;
  font-family: sans-serif;
}

body{
   background-color: #f3f5f9;
}

.wrapper{
  display: flex;
  position: relative;
}

.wrapper .sidebar{
  width: 200px;
  height: 100%;
  background: #384544;
  padding: 30px 0px;
  position: fixed;
}

.wrapper .sidebar img{
  width: 100px;
  margin-bottom:20px;
  margin-left:50px;
}

.wrapper .sidebar ul li{
  padding: 5px;
  border-bottom: 1px solid #bdb8d7;
  border-bottom: 1px solid rgba(0,0,0,0.05);
  border-top: 1px solid rgba(255,255,255,0.05);
}    

.wrapper .sidebar ul li a{
    text-decoration: none;
  color: white;
  font-size:18px;
  display: block;
}

.wrapper .sidebar ul li a .fas{
  width: 25px;
}

.wrapper .sidebar ul li:hover{
  background-color: #495655;
}
    
.wrapper .sidebar ul li:hover a{
  color: #fff;
}
 
.wrapper .sidebar .social_media{
  position: absolute;
  bottom: 0;
  width:50%;
  left: 50%;
  transform: translateX(-50%);
  display: flex;
}

.wrapper .sidebar .social_media a{
  display: block;
  text-decoration: none;
  width: 100px;
  background: black;
  height: 40px;
  margin-bottom: 25px;
  line-height: 45px;
  text-align: center;
  color: #bdb8d7;
  border-top-left-radius: 5px;
  border-top-right-radius: 5px;
}

.wrapper .sidebar .social_media a:hover{
    background-color: #2EB8AD;
}

.wrapper .main_content{
  width: 100%;
  margin-left: 200px;
}

.wrapper .main_content .header{
  padding: 2px;
  width:auto;
  background: #384544;
  color: white;
  font-size: 30px;
}

.wrapper .main_content .info{
  margin: 20px;
  color: #717171;
  line-height: 25px;
}

.wrapper .main_content .header p{
  text-align: center;
  color: white;
  font-family: 'Poppins';
  margin-top:5px;
} 

.wrapper .main_content .info div{
  margin-bottom: 20px;
}

.wrapper .main_content .logout{
  float: right;
  margin-right: 20px;
  margin-top: -60px;
}



@media (max-height: 500px){
  .social_media{
    display: none !important;
  }
}</style>
<body>

<div class="wrapper">
    <div class="sidebar">
        <img src="https://binusasmg.sch.id/ppdb/logobinusa.png" alt="">
        <ul>
            <li><a href="<?php echo base_url(); ?>admin"><i class="fas fa-home"></i>Dashboard</a></li>
            <li><a href="<?php echo base_url(); ?>admin/siswa"><i class="fas fa-user"></i>Siswa</a></li>
            <li><a href="<?php echo base_url(); ?>admin/guru"><i class="fa-solid fa-person-chalkboard"></i> Guru</a></li>
        </ul> 
    </div>
    <div class="main_content">
        <div class="header"><p>Welcome <?php echo $this->session->userdata(
            'username'
        ); ?>
        </p>
        <a class="logout" href="javascript:void(0);" onclick="confirmLogout()">
    <i class="fa-solid fa-right-from-bracket text-danger text-center"></i>
</a>

        </div>  
        <div class="info">
      </div>
    </div>
  </div>
  <script>
    // Fungsi untuk menampilkan SweetAlert saat ingin logout
    function confirmLogout() {
        Swal.fire({
            title: 'Konfirmasi Logout',
            text: 'Anda yakin ingin logout?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#2EB8AD',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Ya, Logout',
            cancelButtonText: 'Batal'
        }).then((result) => {
            if (result.isConfirmed) {
                // Redirect atau lakukan logout di sini
                window.location.href = "<?php echo base_url('auth/logout'); ?>";
            }
        });
    }
</script>

</body>
</html>