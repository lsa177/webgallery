<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Website Galery Foto</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>
<nav class="navbar navbar-expand-lg bg-body-tertiary bg-info text-light border-buttom border-dark">
  <div class="container">
    <h2 class="navbar-brand" href="index,php">Website Galery Foto</h2>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
      <div class="navbar-nav me auto">

      </div>
      <a href="register.php" class="btn btn-outline-primay m-1">Daftar</a>
      <a href="login.php" class="btn btn-outline-success m-1">Masuk</a>     
      </div>
  </div>
</nav>

<div class="container py-5">
	<div class="row juswtify-content-center">
		<div class="cold-md-4">
			<div class="card">
				<div class="card-body bg-light">
					<div class="text-center">
						<h5>Daftar Akun Baru</h5>
					</div>
					<form action="" method="POST">
						<label class="form-label">username</label>
						<input type="text" name="username" class="form-control" required>
						<label class="form-label">password</label>
						<input type="password" name="password" class="form-control" required>
						<label class="form-label">Email</label>
						<input type="Email" name="Email" class="form-control" required>
						<label class="form-label">namaLengkap</label>
						<input type="text" name="namaLengkap" class="form-control" required>
						<label class="form-label">Alamat</label>
						<input type="text" name="Alamat" class="form-control" required>
                          <div class="d-grid mt-2">
						<button class="btn btn-primary" type="submit" name="kirim">
                            Daftar
                        </button>
					</div>
					</form>
					<hr>
					<p>Sudah punya akun? <a href="register.php">login di sini!!!</a></p>
				</div>
			</div>
		</div>
		
	</div>
</div>

<footer class="d-flex juswtify-content-center border-top mt-3 bg-secondary fixed-bottom">
	<p>&copy; UKK RPL | Elsa Lindiyana</p>
</footer>
 

<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
</body>
</html>





