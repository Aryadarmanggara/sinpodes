@extends('./admin_kandes/templates/template')
@section('title', 'Sejarah Desa')

@section('content')

<div class="row">
  @if(session('success'))
  <div class="col-sm-12 text-center alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="col-md-12">
    <div class="card card-default">
      <div class="card-header">
        <h3 class="card-title">
          {{$sejarah->judul}}
        </h3>
      </div>
      <!-- /.card-header -->
      <div class="card-body">
        <div class="callout callout-success">
          <p>{!!$sejarah->deskripsi!!}</p>
        </div>

        <a href="{{ route('sejarah.edit',$sejarah->id) }}" class="btn btn-md btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

@endsection