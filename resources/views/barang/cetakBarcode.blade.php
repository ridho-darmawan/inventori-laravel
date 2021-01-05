<html>
<head>
	<title>Cetak Barcode Data Barang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
	<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		}
	</style>
	<center>
		<h5>Barcode Data Barang</h5>
		<h6>SMA PGRI PEKANBARU</h6>
	</center><br><br>
	
		@foreach($barang as $p)
			<p>
				{{$p->nama}}<br>
				<img src="data:image/png;base64,{{DNS1D::getBarcodePNG($p->kode, 'C39')}}" height="60" width="180"><br>
				{{$p->kode}}<br>					
			</p>
		@endforeach
	
</body>
</html>