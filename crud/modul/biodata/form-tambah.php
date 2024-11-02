<h5>Form Input Biodata Mahasiswa</h5>
<hr>
	<form action="modul/biodata/proses.php?action=insert"  method="post">
	<label for="npm">NPM</1abel>
	<input type="text" class="form-control" nama="npm" /> <br>
	<label for="nama">Nama</label>
    <input type="text" class="form-control" name="nama" /><br>
	<label for="prodi">Prodi</label>
	<select name="prodi" class="form-control">
	<option value="Sistem Informasi (SI)" >Sistem Informasi (Sl)</option>
	<option value="Teknik Informatika (SI)" >Teknik Informatika (Sl)</option>
	<option value= "Bisnis Digital (SI)">Bisnis Digital (SI) </option>
	<option value="Manajemen Informatika (SI) ">Manajemen Informatika (D3)</option>
    <option value="Komputerisasi Akuntansi (D3) ">Komputerisasi Akuntansi (D3)</option>
</select>

	<input type="submit" class="btn btn-primary" value="Simpan"/>
</form>