<html>
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>Kepala Sekolah</title>
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
 
 <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
   <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
   <ul class="navbar-nav">
    <li class="nav navbar">
     <b>Transaksi Peminjaman Alat Pengajar</b>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="../kepsek/data-barang.php">Data Masuk</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="../kepsek/data-peminjaman.php">Data Keluar</a>
    </li>
    <li class="nav-item">
     <a class="nav-link" href="../kepsek/data-master.php">Data Master</a>
    </li>
    <li class="nav-item">
     <a class="nav-link btn btn-danger btn-sm text-white" href="logout.php">Keluar</a>
    </li>
   </ul>
 </div>
   <ul class="nav navbar-nav navbar-right">
              <li class="dropdown">
                  <a href="#"  data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Selamat Datang, <?php echo $_SESSION['name']; ?></b></a> 
              </li>
          </ul>
  </div>
 </nav>