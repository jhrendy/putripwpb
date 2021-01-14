@extends('layouts.app')
@section('content')
	<div class="container-fluid">
		<div class="card">
			<div class="card-header">
				<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#upload">
					Launch demo modal
				</button>
			</div>
			
			<div class="card-body">
				<table class="table table-stripped">
					<tr>
						<td>No</td>
						<td>Nama</td>
						<td>Kelas</td>
						<td>Jurusan</td>
					</tr>
					@foreach($students as $key=>$data)
					<tr>
						<td>{{$key}}</td>
						<td>{{$data->name}}</td>
						<td>{{$data->class}}</td>
						<td>{{$data->major}}</td>
					</tr>
					@endforeach
				</table>
			</div>
		</div>
	</div>
@endsection

<div class="modal fade" id="upload" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <form method="POST" action="" enctype="multipart/form-data">
      	@csrf
      <div class="modal-body">
       <input type="file" name="student">
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
      </form>
      
    </div>
  </div>
</div>