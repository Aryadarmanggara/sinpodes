@extends('./admin_kandes/templates/template')
@section('title', 'Edit Visi Misi')

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
    <h3 class="card-title">Edit Data Visi Misi</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{route('visi_misi.update', $visi_misi->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="visi">Visi</label>
        <input type="text" class="form-control" id="visi" name="visi" value="{{$visi_misi->visi}}">
        @error('visi')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="misi">Misi</label>
        <textarea id="summernote" name="misi">{{ old('misi') ? old('misi') : $visi_misi->misi }}</textarea>
        @error('misi')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>



      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('visi_misi.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
      </div>
    </div>
  </form>
</div>

@endsection