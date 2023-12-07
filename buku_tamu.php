<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Praktek SAS Djuto</title>
    <style>body{
        background-image: url(img/0a2f8dd918db51f6ac977416b1bfb2af.jpg);
    }</style>
  </head>
  <body>
  <div class="card bg-dark text-white">
  <div class="card-img-overlay">
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Pancasila</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-link" href="home.php">Home <span class="sr-only">(current)</span></a>
      <a class="nav-link active" href="sejarah.php">Sejarah</a>
      <a class="nav-link" href="kesimpulan.php">Kesimpulan</a>
      <a class="nav-link" href="buku_tamu.php">Buku Tamu</a>
    </div>
  </div>
</nav>
  </div>
</div><br><br><br><hr>

div class="container">
    <h1>Buku Tamu</h1>

    <form action ="" method="POST" name ="penjualan">
        
  <div class="form-group">
    <label for="nm">Nama </label>
    <input type="text" class="form-control" id="nm" name="nm" Required>
  </div>
  <div class="form-group">
    <label for="kelas">kelas</label>
    <input type="text" class="form-control" id="kelas" name="kelas" Required>
  </div>
  <div class="form-group">
    <label for="jurusan">jurusan</label>
    <input type="text" class="form-control" id="jurusan" name="jurusan" Required>
  </div>
  
  <button type="submit" name="submit" class="btn btn-primary">Sumbit</button>
  
</form>

<hr>
    <?php
    if(isset($_POST['submit'])){
      $nama =$_POST['nm'];
      $kelas =$_POST['kelas'];
      $jurusan =$_POST['jurusan'];

    
    
    ?>
     <div class="container">

            <table class='table table-bordered'>
                <thead>
                    <tr>
                        <th scope='col'>No</th>
                        <th scope='col'>Nama</th>
                        <th scope='col'>Kelas</th>
                        <th scope='col'>Jurusan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope='row'>1</th>
                        <td><?php echo $nama ?></td>
                        <td><?php echo $kelas ?></td>
                        <td><?php echo $jurusan ?></td>
                        
                    </tr>

                </tbody>
            </table>

    </div>
    <?php } ?>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>