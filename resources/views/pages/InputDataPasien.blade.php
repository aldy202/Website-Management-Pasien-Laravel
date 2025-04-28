@extends('pages.template')

@section('content')
@if(Session::has('success'))
    {{Session::get('success')}}
@endif
<form action="{{ url('inputpasien') }}" method="post">
    @csrf
    <div class="row">
        <!-- ============================================================== -->
        <!-- validation form -->
        <!-- ============================================================== -->
        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
            <div class="card">
                <h5 class="card-header">Input Data Pasien</h5>
                <div class="card-body">
                    {{-- <form class="needs-validation" novalidate> --}}
                        <div class="form-row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">Nama</label>
                                <input type="text" name="nama" class="form-control" id="validationCustom01" placeholder="Masukan Nama" value="{{ Session::get('nama') }}" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
                                <label for="validationCustom03">Umur</label>
                                <input name="umur" type="text" class="form-control" id="umur" placeholder="Masukan Umur" required>
                                <div class="invalid-feedback">
                                    Please provide a valid age.
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">Gender</label>
                                <div class="col-sm-6">
                                    <div class="custom-controls-stacked">
                                        {{ $gender=Session::get('gender') }}
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="gender1" name="gender" value="Laki-Laki" class="custom-control-input" @if ($gender == "Laki-Laki") checked @endif>
                                            <label class="custom-control-label" for="gender1">Laki-Laki</label>
                                        </div>
                                        <div class="custom-control custom-radio">
                                            <input type="radio" id="gender2" name="gender" value="Perempuan" class="custom-control-input" @if ($gender == "Perempuan") checked @endif>
                                            <label class="custom-control-label" for="gender2">Perempuan</label>
                                        </div>  
                        <div class="form-group row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">No Telp</label>
                                <input type="text" class="form-control" id="validationCustom01" placeholder="Nomor Telepon" name="no_telp" value="{{ Session::get('no_telp') }}" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">Tanggal Perawatan</label>
                                <input name="tgl_perawatan" type="date" class="form-control" id="tgl_perawatan" placeholder="Tanggal Perawatan" value="{{ Session::get('tgl_perawatan') ? Session::get('tgl_perawatan') : date('Y-m-d')  }}" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">Keluhan</label>
                                <textarea name="keluhan" id="keluhan" value="{{ Session::get('keluhan') }}" required="" class="form-control">Masukan Data Keluhan </textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <label for="validationCustom01">Tindakan</label>
                                <textarea name="tindakan" id="tindakan" value="{{ Session::get('tindakan') }}" required="" class="form-control">Masukan Riwayat Tindakan</textarea>
                            </div>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                            <label for="validationCustom01">Status</label>
                            <div class="col-sm-6">
                                <div class="custom-controls-stacked">
                                    {{ $status=Session::get('status') }}
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="status1" name="status" value="Tidak Rawat Inap" class="custom-control-input" @if ($status == "Tidak Rawat Inap") checked @endif>
                                        <label class="custom-control-label" for="status1">Tidak Rawat Inap</label>
                                    </div>
                                    <div class="custom-control custom-radio">
                                        <input type="radio" id="status2" name="status" value="Rawat Inap" class="custom-control-input" @if ($status == "Rawat Inap") checked @endif>
                                        <label class="custom-control-label" for="status2">Rawat Inap</label>
                                    </div>                
                        <div class="form-group row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </div>
                        </div>
                    {{-- </form> --}}
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- end validation form -->
        <!-- ============================================================== -->
    </div>
</form>
@endsection