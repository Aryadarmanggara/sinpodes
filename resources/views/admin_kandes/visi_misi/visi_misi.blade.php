@extends('./admin_kandes/templates/template')
@section('title', 'Visi Misi')

@section('content')

<div class="row">
  @if(session('success'))
  <div class="col-sm-12 text-center alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="col-md-12">
    <div class="card card-default">
      <!-- /.card-header -->
      <div class="card-body">
        <h3 class="text-center">Visi</h3>
        <div class="callout callout-danger">
          {{$visi_misi->visi}}
        </div>
        <h3 class="text-center">Misi</h3>
        <div class="callout callout-danger">
          {!!$visi_misi->misi!!}
        </div>
        <a href="{{ route('visi_misi.edit',$visi_misi->id) }}" class="btn btn-md btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

@endsection