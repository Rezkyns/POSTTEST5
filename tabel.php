<?php
    require 'config.php';
    $result = mysqli_query($db, "SELECT * FROM web");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Posttest 4</title>
    <link rel="stylesheet" href="Input.css">
</head>
<body>
        <table border="1" width="100%" class="data">
            <h3> Inputan</h3>
            <tr>
                <td>Jenis Cupang</td>
                <td>Warna Cupang</td>
                <td>Jenis Kelamin</td>
                <td>Bentuk Ekor</td>
                <td>Jenis Perlombaan</td>
                <td>Menu</td>
            </tr>
            <?php
            $i = 1;
                while($row = mysqli_fetch_array($result)){
            ?>
            <tr>
                <td><?=$row['nama']?></td>
                <td><?=$row['warna']?></td>
                <td><?=$row['Gender']?></td>
                <td><?=$row['Model']?></td>
                <td><?=$row['Lomba']?></td>
                <td><a href="edit.php?id=<?=$row['id']?>" class="tambah e">Edit</a>
                <a href="hapus.php?id=<?=$row['id']?>" class="tambah e">Delete</a></td>
            </tr>       
            <?php
             $i++;
                }   
            ?>
        </table>
</div>
<a href="form.php" class="tambah">Tambah Data</a>
</body>
</html>