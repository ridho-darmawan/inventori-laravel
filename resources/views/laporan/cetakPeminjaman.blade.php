<html>
<head>
	<title>Cetak Peminjaman</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<style type="text/css">
		table tr td,
		table tr th{
			font-size: 9pt;
		},
		.yayasan {
			font-size:10pt;
		}
		.yayasan p{
			text-align:center;
		}
	</style>

<div style="display:inline; border-bottom:3px solid black" class="yayasan">
		<center>

        <img src="{{ base_path() . '/public/template/images/logopgri.jpg' }}" style="float:left" width="150px" alt="logo">

		<p>YAYASAN PEMBINA LEMBAGA PENDIDIKAN (YPLP) PGRI PROVINSI RIAU</p>
		<p style="font-size:12pt; font-style:bold; margin-top:-10px">SEKOLAH MENENGAH ATAS</p>
		<p style="font-size:12pt; text-align:center;font-style:bold;margin-top:-10px">(SMA - PGRI)</p>
		<p>Alamat : Jl. Brig.Jend. Katamso No.44 Tangkerang Pekanbaru. Telp (0761) 23465</p>

		<p style="display:inline">NDS. 1.06054002 </p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<p style="display:inline">AKREDITAS : A</p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		<p style="display:inline">Email : smapgri82@gmail.com</p>
		</center><br>
	</div>

	<center>
		<h3>Laporan Data Peminjaman Barang</h3>
	</center>


	<table class='table table-bordered'>
		<thead>
			<tr>
				<th>No</th>
				<th>Kode Inventaris Barang</th>
				<th>Nama Barang</th>
				<th>Penanggung Jawab</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
				<!-- <th>Jumlah</th> -->
				<th>kondisi</th>
			</tr>
		</thead>
		<tbody>
			@php $i=1 @endphp
			@foreach($peminjaman as $p)
			<tr>
				<td>{{ $i++ }}</td>
				<td>{{ $p->inventaris_id }}</td>
				<td>{{$p->getInventaris->barangMasuk->nama}}</td>
				<td>{{$p->pj}}</td>
				<td>{{  date('d-m-Y', strtotime($p->tanggal_pinjam))  }}</td>
				<td>{{$p->tanggal_kembali}}</td>
				<!-- <td>{{$p->jumlah}}</td> -->
				<td>{{$p->kondisi}}</td>
			</tr>
			@endforeach
		</tbody>
	</table>

</body>
</html>
