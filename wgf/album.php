<?php
session_start();
 // if(!isset($_SESSION['userid'])){
    //header("location:login.php");
 // }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Album</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-body-tertiary bg-info text-light border-bottom border-dark">
        <di<v class="container">
            <h2 class="navbar-brand" href="index.php">Halaman Foto</h2>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">

                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="25" height="25" viewBox="0 0 24 24">
                    <path
                        d="M 3 5 A 1.0001 1.0001 0 1 0 3 7 L 21 7 A 1.0001 1.0001 0 1 0 21 5 L 3 5 z M 3 11 A 1.0001 1.0001 0 1 0 3 13 L 21 13 A 1.0001 1.0001 0 1 0 21 11 L 3 11 z M 3 17 A 1.0001 1.0001 0 1 0 3 19 L 21 19 A 1.0001 1.0001 0 1 0 21 17 L 3 17 z">
                    </path>
                </svg>
            </button>
            <div class="collapse navbar-collapse mt-2" id="navbarNavAltMarkup">
                <div class="navbar-nav me-auto"> </div>
                <ul class="navbar-nav">
                        <li class="nav-item"><a href="index.php" class="btn text-light m-1">Home</a></li>
                        <li class="nav-item"><a href="album.php" class="btn text-light m-1">Album</a></li>
                        <li class="nav-item"><a href="foto.php" class="btn text-light m-1">Foto</a></li>
                        <li class="nav-item"><a href="logout.php" class="btn btn-danger m-1">Logout</a></li>
                    </ul>
                </div>
            </div>
       </nav>
       <div class="text-center display-4 fst-italic mb-5 mt-5">
        <?php
        //session_start();
        if(!isset($_SESSION['userid'])){
          header("location:login.php");
        }
        ?>
        </div>
        <hr>

     <form action="tambah_album.php" method="post">
      
      <div class="text-center mb-1 mt-1">
        <table align = "center">
            <tr>
                <td>Nama Album</td>
                <td><input type="text" name="namaalbum"  class="from-control m-1"id="exampleformControlInput1"></td>
           </tr>
           <tr>
                <td>Deskripsi</td>
                <td><input type="text" name="deskripsi" class="from-control m-1"id="exampleformControlInput1"></td>
           </tr>
           <div class="d-grid gap-2 d-md-block">
           <tr>
                <td></td>
                <td>
                  <button class="btn btn-primary m-1" type="submit">
                    Tambah
      </button>
      </td>
      </div>
           </tr>
        </div>
      </table>
    </form> 
    <div class="table-responsive">
      <div class="table">
        <div class="container mt-3">
     
     <table cellpadding=5 cellspacing=0 class="table-bordered table-striped table-secondary d-flex justify-content-center">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Deskripsi</th>
            <th>Tanggal dibuat</th>
            <th>Aksi</th>
        </tr>
        <?php
          include "koneksi.php";
          $userid=$_SESSION['userid'];
          $sql=mysqli_query($conn,"select * from album where userid='$userid'");
          while($data=mysqli_fetch_array($sql)){
         ?>
         <tr>
             <td><?=$data['albumid']?></td>
             <td><?=$data['namaalbum']?></td>
             <td><?=$data['deskripsi']?></td>
             <td><?=$data['tanggaldibuat']?></td>
             <td>
                <a href="hapus_album.php?albumid=<?=$data['albumid']?>"><i class="bi bi-trash-fill"></i></a>
                <a href="edit_album.php?albumid=<?=$data['albumid']?>"><i class="bi bi-pencil-square"></i></a>

          </td>
          </tr>
         <?php
          }
          ?>
    </table>
        </div>
        </div>
        </div>
        <br><br><br><br><br>
    <footer class="d-flex juswtify-content-center border-top mt-2 bg-secondary fixed-bottom  d-flex justify-content-center">
	<p class="pt-2 text-light"> &copy; UKK RPL | Elsa Lindiyana</p>
</footer>

    <script src="assets/js/bootstrap.min.js"></script>
        </body>

</body>
</html>
