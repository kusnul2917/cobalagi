<!DOCTYPE html>
<html>
<head>
	<title>Tutorial Membuat CRUD Pada Laravel - www.malasngoding.com</title>
</head>
<body>
 
	<h2>www.malasngoding.com</h2>
	<h3>Data user</h3>
 
	<a href="/user/tambah"> + Tambah Pegawai Baru</a>
	
	<br/>
	<br/>
 
	<table border="1">
		<tr>
			<th>Nama</th>
			<th>Alamat</th>
			<th>kelas</th>
			
			
		</tr>
		@foreach($pegawai as $p)
		<tr>
			<td>{{ $p->nama_user }}</td>
			<td>{{ $p->alamat_user }}</td>
			<td>{{ $p->kelas_user }}</td>
			
			<td>
				<a href="/user/edit/{{ $p->pegawai_id }}">Edit</a>
				|
				<a href="/user/hapus/{{ $p->pegawai_id }}">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
 
 
</body>
</html>