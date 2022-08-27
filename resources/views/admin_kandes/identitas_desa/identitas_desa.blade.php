@extends('./admin_kandes/templates/template')
@section('title', 'Identitas Desa')

@section('content')

<div class="row">
  @if(session('success'))
  <div class="col-sm-12 text-center alert alert-success" role="alert">
    {{ session('success') }}
  </div>
  @endif
  <div class="col-md-8 m-auto">
    <div class="card card-default">
      <div class="card-body">

        <div class="callout callout-info">
          <table class="table table-striped">
            <tbody>
              <tr class="text-center">
                <th><strong>Nama Desa </strong></p>
                </th>
                <td>
                  <p>{{$identitas_desa->nama_desa}}</p>
                </td>
              </tr>
              <tr class="text-center">
                <th><strong>Nama Kecamatan </strong></p>
                </th>
                <td>
                  <p>{{$identitas_desa->nama_kecamatan}}</p>
                </td>
              </tr>
              <tr class="text-center">
                <th><strong>Kabupaten</strong></p>
                </th>
                <td>
                  <p>{{$identitas_desa->kabupaten}}</p>
                </td>
              </tr>
              <tr class="text-center">
                <th><strong>Provinsi </strong></p>
                </th>
                <td>
                  <p>{{$identitas_desa->provinsi}}</p>
                </td>
              </tr>
              <tr class="text-center">
                <th><strong>Kode Pos </strong></p>
                </th>
                <td>
                  <p>{{$identitas_desa->kode_pos}}</p>
                </td>
              </tr>
              <tr class="text-center">
                <th><strong>Alamat </strong></p>
                </th>
                <td>
                  <p>{{$identitas_desa->alamat}}</p>
                </td>
              </tr>
              <tr class="text-center">
                <th><strong>Kepala Desa</strong></p>
                </th>
                <td>
                  <p>{{$identitas_desa->nama_kepala_desa}}</p>
                </td>
              </tr>
              <tr class="text-center">
                <th><strong>Instagram</strong></p>
                </th>
                <td>
                  <p><a href="{{$identitas_desa->instagram}}" style="text-decoration:none ;">Instagram</p>
                </td>
              </tr>
              <tr class="text-center">
                <th><strong>Facebook</strong></p>
                </th>
                <td>
                  <p><a href="{{$identitas_desa->facebook}}" style="text-decoration:none ;">Facebook</p>
                </td>
              </tr>
              <tr class="text-center">
                <th><strong>Twitter</strong></p>
                </th>
                <td>
                  <p><a href="{{$identitas_desa->twitter}}" style="text-decoration:none ;">Twitter</a></p>
                </td>
              </tr>
            </tbody>
          </table>

        </div>
        <a href="{{route('identitas_desa.edit', $identitas_desa->id)}}" class="btn btn-md btn-warning text-white"><i class="fa-solid fa-pen-to-square"></i> Edit</a>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

@endsection