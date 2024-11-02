<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi CRUD</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv%waRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hw+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container border">
        <di class="row">
            <div class="col bg-info p3">
                <h1>Aplikasi CRUD Sederhana</h1>
</div>
</div>
<div class="row p-3">
    <div class="col">
    <?php
    include 'koneksi.php';
    //jika modul tidak ada
    if(!isset($_GET['modul'])){
    ?>
        <a class="btn btn-primary" href="index.php?modul=biodata">Biodata</a>
        <a class="btn btn-warning" href="modul/nilai">Nilai</a>
 
    <?php
    }
    elseif($_GET['modul']=="biodata"){
        include "modul/biodata/index.php";
    }elseif($_GET['modul']=="form-tambah"){
        include "modul/biodata/form-tambah.php";
    } elseif($_GET['modul']=="form-edit"){
        include "modul/biodata/form-edit.php";
    } elseif($_GET['modul']=="nilai"){
        include "modul/biodata/index.php";
    }else{
        echo"Modul Tidak Ditemukan";
    }
    ?>
            </div>
        </div>
    </div>
    <script 
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv%waRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hw+ALEwIH" crossorigin="anonymous"></script>
</body>
</html>