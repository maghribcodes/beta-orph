@extends('layouts.master')

@section('content')

		@if(session('sukses'))
			<div class="alert alert-success" role="alert">
			  {{session('sukses')}}
			</div>
		@endif
		<div class="row">
			<div class="col-6">
				<h1>Daftar Admin Panti</h1>
			</div>
			<div class="col-6">
				<!-- Button trigger modal -->
				<button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">
				  Tambah Panti
				</button>

				
			</div>
			
			<table class="table table-hover">
				<tr>
					<th>NIK</th>
					<th>Nama</th>
					<th>Tempat Lahir</th>
					<th>Tanggal Lahir</th>
					<th>Jabatan</th>
					<th>No HP</th>
					<th>Photo</th>
				</tr>
				@foreach($data_AdminPanti as $Adpanti)
				<tr>
					<td>{{$Adpanti->nik}}</a></td>
					<td>{{$Adpanti->nama}}</td>
					<td>{{$Adpanti->tempat_lahir}}</td>
					<td>{{$Adpanti->tgl_lahir}}</td>
					<td>{{$Adpanti->jabatan}}</td>
					<td>{{$Adpanti->jkel}}</td>
					<td>{{$Adpanti->alamat}}</td>
					<td>{{$Adpanti->no_hp}}</td>
					<td>{{$Adpanti->photo}}</td>
					<td>
						<a href="/adminpanti/{{$Adpanti->nik}}/edit" class="btn btn-warning btn-sm"><i class="fa fa-edit" style="font-size:24px"></i></a>
						<a href="/adminpanti/{{$Adpanti->nik}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Ingin Dihapus?') "><i class="fa fa-trash-o" style="font-size:24px"></i></a>
					</td>
				</tr>
				@endforeach
			</table>
		</div>
	</div>

<!-- Modal -->
				<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				  <div class="modal-dialog" role="document">
				    <div class="modal-content">
				      <div class="modal-header">
				        <h5 class="modal-title" id="exampleModalLabel">Tambah Panti</h5>
				        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
				          <span aria-hidden="true">&times;</span>
				        </button>
				      </div>
				      <div class="modal-body">
				      	<form action="/panti/create" method="POST">
				      		{{csrf_field()}}
				      	  <div class="form-group">
						    <label for="exampleInputEmail1">ID</label>
						    <input name="id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID panti-">
						  </div>
				      	  <div class="form-group">
						    <label for="exampleInputEmail1">NIK User</label>
						    <input name="nik_user" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK User">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">NIK Pengurus</label>
						    <input name="nik_pengurus" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="NIK Pengurus">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Panti</label>
						    <input name="nama" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Panti">
						  </div>
						  <div class="form-group">
						    <label for="exampleInputEmail1">Koordinat Panti</label>
						    <input name="point_obj" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="lat, long">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Fasilitas</label>
						    <input name="butuh_fasilitas" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Fasilitas yang Dibutuhkan">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Anak</label>
						    <input name="jumlah_anak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Anak">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">ID Jenis Panti</label>
						    <input name="jenispanti_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Jenis Panti ">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Jumlah Pengurus</label>
						    <input name="jumlah_pengurus" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Jumlah Pengurus">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Nama Pimpinan</label>
						    <input name="nama_pimpinan" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Nama Pimpinan">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Kontak</label>
						    <input name="kontak" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Kontak Panti">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Email</label>
						    <input name="email" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email Panti">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">Sosial Media</label>
						    <input name="sosmed" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Sosial Media Panti">
						  </div>

						  <div class="form-group">
						    <label for="exampleInputEmail1">ID Status Panti</label>
						    <input name="status_id" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="ID Status Panti">
						  </div>


						  <div class="form-group">
						    <label for="exampleFormControlFile1">Photo Panti</label>
						    <input name="photo" type="file" class="form-control-file" id="exampleFormControlFile1">
						  </div>
						    

						
				      </div>
				      <div class="modal-footer">
				        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
				        <button type="submit" class="btn btn-primary">Submit</button>
				        </form>
				      </div>
				    </div>
				  </div>
				

@endsection