<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Halo Eloquent</title>
		<!-- CSS -->
		<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
		<style type="text/css"> body { padding-top:50px; } </style>
	</head>
	<body class="container">
		<div class="col-sm-8 col-sm-offset-2">
			<center><h2><b>Many To Many</b></h2></center>
			@foreach ($siswa as $temp)
				<h4>
					<li>Nama Guru : <strong>{{$temp->guru->nama}}</strong></li><br>
					<li>Nama Wali : <strong>{{$temp->wali->nama}}</strong></li><br>
					<li>Nama Siswa : <strong>{{$temp->nama}}</strong></li><br>
					<li>Nama Kelas : <strong>{{$temp->kelas->nama_kelas}}</strong></li><br>
				</h4>
				Mata Pelajaran:@foreach ($temp->mata_pelajaran as $tempp)<li>
					{{$tempp->nama_mapel}}</li>@endforeach
				<hr>
			@endforeach
		</div>
	</body>
</html>
