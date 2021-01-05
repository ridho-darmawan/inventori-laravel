<html>
<head>
	<title>Cetak Barcode Data Barang Inventaris</title>
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
		<h5>Barcode Data Inventaris</h5>
		<h6>SMA PGRI PEKANBARU</h6>
	</center><br><br>

	<table class='table table-bordered'>
		<thead>
			<tr>
				<td>Nama Barang</td>
				<td>Lokasi</td>
				<td>Barcode</td>
			</tr>
		</thead>

		<tbody>

		
			@foreach($inventaris as $p)
			<tr>
				<td>{{$p->barangMasuk->nama}}</td>
				<td>{{$p->ruang->nama}}</td>
				
					
				<td>

			
				
					<img src="data:image/png;base64,{{DNS1D::getBarcodePNG($p->kode_inventaris, 'C39')}}" height="60" width="180"><br>
					{{$p->kode_inventaris}}<br>
				
			
					
					
				</td>
					
					
			</tr>
			
			@endforeach
		

		
		</tbody>
		
	</table>
	
		
	
</body>
</html>