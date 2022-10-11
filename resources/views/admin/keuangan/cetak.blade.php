<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Laporan Keuangan</title>
</head>
<body>
<center><h1>LAPORAN KEUANGAN</h1><br>
<h3>Yayasan Tahfidz Az-Zumar</h3></center>
<table align="center" border="1" cellspacing="0" cellpadding="1">
	<tr>
		<th width="30">No</th>
		<th width="100">Tanggal</th>
		<th width="200">Uraian</th>
		<th width="100">Pemasukkan</th>
		<th width="100">Pengeluaran</th>
		<th width="100">Saldo</th>
	</tr>
	@php $no=1; @endphp
	@foreach($keuangan as $data)
	<tr>
		<td>{{ $no++; }}</td>
		<td>{{ $data->tanggal }}</td>
		<td>{{ $data->uraian }}</td>
		<td>Rp. {{ number_format($data->pemasukan) }}</td>
		<td>Rp. {{ number_format($data->pengeluaran) }}</td>
		<td>Rp. {{ number_format($data->saldo) }}</td>
	</tr>
	@endforeach
	<tr>
		<td colspan="3">Total</td>
		<td>
			Rp. {{ number_format($keuangan->sum('pemasukan')) }}
		</td>
		<td>
			Rp. {{ number_format($keuangan->sum('pengeluaran')) }}
		</td>
		<td>
			@foreach($saldo_akhir as $saldo)
				Rp. {{ number_format($saldo->saldo) }}
			@endforeach
		</td>
	</tr>
</table>
<script type="text/javascript">
	window.print();
</script>
</body>
</html>