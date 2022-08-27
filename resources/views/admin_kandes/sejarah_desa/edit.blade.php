@extends('./admin_kandes/templates/template')
@section('title', 'Edit Sejarah Desa')

@section('content')


@if ($errors->any())
<div class="alert alert-danger">
  <strong>Whoops!</strong> There were some problems with your input.<br><br>
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<div class="card card-info">
  <div class="card-header">
    <h3 class="card-title">Edit Data Sejarah Desa</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{route('sejarah.update', $sejarah->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="judul">Judul</label>
        <input type="text" class="form-control" id="judul" name="judul" value="{{$sejarah->judul}}">
        @error('judul')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="deskripsi">Deskripsi</label>
        <textarea id="summernote" name="deskripsi">{{ old('deskripsi') ? old('deskripsi') : $sejarah->deskripsi }}</textarea>
        @error('deskripsi')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>



      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('sejarah.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
      </div>
    </div>
  </form>
</div>

@endsection