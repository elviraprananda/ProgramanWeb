<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initia-scale=1.0">
        <title>Biodata Mahasiswa</title>
</head>
<body>

    <table border="1">
        <caption>
           <h1> Biodata Mahasiswa</h1>
           <a href="form-tambah.php">Tambah Mahasiswa</a>
           <br>
</caption>
<tr>
    <th>No</th>
    <th>NPM</th>
    <th>Nama</th>
    <th>Prodi</th>
    <th>Action</th>
</tr>
<?php
    $query = "SELECT * FROM biodata order by npm ASC";
    $result = $mysqli->query($query);
    $no=0;
    while($row = $result->fetch_assoc()){
         $no++;
        ?>

            <tr>
                <td><?= $no;?></td>
                <td><?= $row['npm'];?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['prodi'];?></td>
                <td>
                    <a href="<?= 'form-edit.php?id='.$row['id'];?>">Edit</a>
                    <a href="" > hapus</a>
    </td>
    </tr>
    <?php
    }
    ?>
    </table>
</body>
</html>