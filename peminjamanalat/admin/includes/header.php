
<html>
<head>
  <script src="jquery-3.5.1.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Administrator</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Peminjaman Alat Pengajar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="../admin/index.php">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="dropdown">
          <a class="nav-link" href="../admin/data-barang.php">Data Alat Pengajar</a>
          <li class="nav-item">
          <a class="nav-link" href="../admin/data-master.php">Data Master</a>
        </li>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/data-petugas.php">Data User</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../admin/data-peminjaman.php">Data Peminjaman</a>
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
