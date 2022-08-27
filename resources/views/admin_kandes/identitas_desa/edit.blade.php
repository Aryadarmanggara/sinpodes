@extends('./admin_kandes/templates/template')
@section('title', 'Edit Identitas Desa')

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
    <h3 class="card-title">Edit Data Identitas Desa</h3>
  </div>
  <!-- /.card-header -->
  <!-- form start -->
  <form action="{{route('identitas_desa.update', $identitas_desa->id)}}" method="POST" enctype="multipart/form-data">
    @method('PUT')
    @csrf
    <div class="card-body">
      <div class="form-group">
        <label for="nama_desa">Nama Desa</label>
        <input type="text" class="form-control" id="nama_desa" name="nama_desa" value="{{$identitas_desa->nama_desa}}">
        @error('nama_desa')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="nama_kecamatan">Nama Kecamatan</label>
        <input type="text" class="form-control" id="nama_kecamatan" name="nama_kecamatan" value="{{$identitas_desa->nama_kecamatan}}">
        @error('nama_kecamatan')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="kabupaten">Kabupaten</label>
        <input type="text" class="form-control" id="kabupaten" name="kabupaten" value="{{$identitas_desa->kabupaten}}">
        @error('kabupaten')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="provinsi">Provinsi</label>
        <input type="text" class="form-control" id="provinsi" name="provinsi" value="{{$identitas_desa->provinsi}}">
        @error('provinsi')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="kode_pos">Kode Pos</label>
        <input type="text" class="form-control" id="kode_pos" name="kode_pos" value="{{$identitas_desa->kode_pos}}">
        @error('kode_pos')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="alamat">Alamat</label>
        <input type="text" class="form-control" id="alamat" name="alamat" value="{{$identitas_desa->alamat}}">
        @error('alamat')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="nama_kepala_desa">Nama Kepala Desa</label>
        <input type="text" class="form-control" id="nama_kepala_desa" name="nama_kepala_desa" value="{{$identitas_desa->nama_kepala_desa}}">
        @error('nama_kepala_desa')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="instagram">Instagram</label>
        <input type="text" class="form-control" id="instagram" name="instagram" value="{{$identitas_desa->instagram}}">
        @error('instagram')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="facebook">Facebook</label>
        <input type="text" class="form-control" id="facebook" name="facebook" value="{{$identitas_desa->facebook}}">
        @error('facebook')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <div class="form-group">
        <label for="twitter">Twitter</label>
        <input type="text" class="form-control" id="twitter" name="twitter" value="{{$identitas_desa->twitter}}">
        @error('twitter')
        <div class="alert alert-secondary text-danger mt-1">{{ $message }}</div>
        @enderror
      </div>
      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="{{ route('identitas_desa.index') }}" class="btn btn-md btn-danger size-4">Kembali</a>
      </div>
    </div>
  </form>
</div>

@endsection