<html>
<head>
  <title>Menampilkan data dari database ke dalam bentuk tabel</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <div class="container">
    <h2 class="judul"><center>DATA PESERTA</center></h2>
    <table class="tabel" align="center">
  <tr>
    <th>Id</th>
    <th>Username</th>
    <th>Password</th>
    <th>Level</th>
    <th>Fullname</th>
    <th>Aksi</th>
  </tr></div>
  <?php
  //  1. Lakukan include koneksi.php untuk membuat koneksi
  include('Koneksi.php');

  // 2. Buat perintah SQL untuk menampilkan data
  $sql_tampil ="SELECT * FROM id";

  // 3. Jalankan perintah diatas dengan fungsi mysqli_query
  $peserta=mysqli_query($conn,$sql_tampil);

  // 4. Lakukan fetch dengan result type MYSQL_ASSOC

  while($baris_data=mysqli_fetch_array($peserta,MYSQLI_ASSOC)){
    ?>
    <tr>
      <td><?php echo $baris_data['id']; ?></td>
      <td><?php echo $baris_data['username']; ?></td>
      <td><?php echo $baris_data['password']; ?></td>
      <td><?php echo $baris_data['level']; ?></td>
      <td><?php echo $baris_data['fullname']; ?></td>
      <td>
      <a class="edit" href="edit.html?id=<?php echo $baris_data['id']; ?>">Edit</a> |
      <a class="hapus" href="hapus.php?id=<?php echo $baris_data['id']; ?>">Hapus</a>
      </td>
    </tr>
<?php } ?>
</body>
</html>
