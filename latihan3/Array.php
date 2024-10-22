<?php
$buah = array("apel", "pisang", "durian", "semangka", "pepaya", "manggis", "mangga"); 
foreach($buah as $buahan){
    echo $buahan.'<br>';
}
echo "<hr />";
$siswa = array(
    "nama" => "John", "umur" => 25, "kota" => "Stabat", "jurusan" => "Sistem Informasi"
);
echo 'nama siswa :' .$siswa['nama'].'<br />';
echo 'umur siswa :' .$siswa['umur'].'<br />';
echo 'kota siswa :' .$siswa['kota'].'<br />';
echo 'jurusan siswa :' .$siswa['jurusan'].'<br />';
?>