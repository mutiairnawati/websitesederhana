<!-- blogbugabagi.bogspot.com -->
<?php include 'koneksi.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <!-- MY CSS -->
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HMIF Admin</title>
</head>
<body>
    <!-- Header -->
    <div id="partner" class="parallax-container scrollspy">
        <div class="parallax"><img src="img/backheader.jpg"></div>
            <div class="container clients">
                <h3 class="center light white-text">Data Pesan</h3>
            </div>
    </div>
    <!-- End-Header -->

    <!-- Tabel -->
    <table>
        <tr>
        <th>Nama</th>
        <th>Email</th>
        <th>No Hp</th>
        <th>Pesan</th>
        <th>Tanggal Pengirim</th>
        </tr>
        <?php
        $kontak = mysqli_query($conn, "SELECT * FROM pesankontak");
        while($hasil = mysqli_fetch_array($kontak)){
        ?>
        <tr>
            <td><?= $hasil['nama'];?></td>
            <td><?= $hasil['email']; ?></td>
            <td><?= $hasil['no_hp']; ?></td>
            <td><?= $hasil['pesan']; ?></td>
            <td><?= $hasil['tanggal'];?></td>
        </tr>
        <?php } ?>
    </table>
    <!-- End-Table -->
</body>
</html>