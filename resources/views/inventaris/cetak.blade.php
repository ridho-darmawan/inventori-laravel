<html>
<head>
	<title>Cetak Data Barang</title>
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
		<h5>Laporan Data Barang</h5>
		<h6>SMA PGRI PEKANBARU</h6>
	</center>
 
	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Nama Barang</th>
				<th>Kategori</th>
				<th>Supplier</th>
				<th>Jumlah</th>
				<th>Stok Tersisa</th>
				<th>Lokasi</th>
				<th>Kondisi</th>
				<th>Sumber Dana</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($barang as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{$p->nama}}</td>
				<td>{{$p->kategori->nama}}</td>
				<td>{{$p->supplier->nama}}</td>
				<td>{{$p->jumlah}}</td>
				<td>{{$p->stok}}</td>
				<td>{{$p->ruang->nama}}</td>
				<td>{{$p->kondisi}}</td>
				<td>{{$p->sumber_dana}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>
 
</body>
</html>