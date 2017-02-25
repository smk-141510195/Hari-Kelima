@extends('layouts.app')
@section('golongan')
	active
@endsection
@section('content')

<div class="container">
	<div class="panel panel-info">
		<div class="panel-heading">Golongan</div>
		<div class="panel-body">
		<center><a class="btn btn-primary" href="{{url('golongan/create')}}">Tambah Data</a></center><br>
			<table class="table table-striped table-bordered table-hover">
				<thead>
					<tr bgcolor="pink">
						<th>No</th>
						<th>Kode Golongan</th>
						<th>Nama Golongan</th>
						<th>Besaran Uang</th>
						<th colspan="3">Pilihan</th>
					</tr>
				</thead>

				<?php $no=1; ?>
				@foreach ($golongan as $golongans)
				<tbody>
					<tr> 
						<td> {{$no++}} </td>
						<td> {{$golongans->kode_golongan}} </td>
						<td> {{$golongans->nama_golongan}} </td>
						<td> Rp.{{$golongans->besaran_uang}} </td>
						<td>
							<a class="btn btn-xs btn-warning" href=" {{route('golongan.edit', $golongans->id)}} ">Ubah</a>
						</td>
						<td>
							<form method="POST" action=" {{route('golongan.destroy', $golongans->id)}} ">
								{{csrf_field()}}
								<input type="hidden" name="_method" value="DELETE">
								<input class="btn btn-xs btn-danger" onclick="return confirm('Apakah yakin ingin menghapus data ?');" type="submit" value="Hapus">
							</form>
						</td>
					</tr>
				</tbody>
				@endforeach
			</table>
		</div>
	</div>
</div>

@endsection