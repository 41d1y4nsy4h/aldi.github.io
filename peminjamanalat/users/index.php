<html>
<head>
  <link rel="icon" type="image/jpg" href="icon.jpg">
  <meta charset="utf-8">
  <title>Peminjaman Alat Mengajar</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body background="images/icon.jpg">
  <div class="card col-sm-4 mx-auto mt-5">
    <h5 class="card-header">Login</h5>
    <div class="card-body">
      <form action="proses/login_proses.php" method="POST" autocomplete="off">
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" name="username" class="form-control" placeholder="Masukan Username" autofocus>
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" class="form-control" placeholder="Masukan Password">
        </div>
        <div class="form-group">
          <label for="level">Sebagai</label>
          <select name="level" class="form-control">
            <option value="">-- Masuk Sebagai ---</option>
            <option value="2">Operator</option>
            <option value="1">Admin</option>
          </select>
        </div>
        <button type="submit" class="btn btn-primary btn-block">Login</button>
      </form>
    </div>
  </div>
</body>
</html>