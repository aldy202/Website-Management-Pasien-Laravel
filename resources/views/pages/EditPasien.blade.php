@extends('pages.template')

@section('content')

<form action='{{ url('pasienupdate/'.$dataPasien->id) }}' method='post'>
@csrf 
@method('PUT')
<div class="my-3 p-3 bg-body rounded shadow-sm">
    <a href='{{ url('pasienupdate') }}' class="btn btn-secondary"><< kembali</a>
    <div class="mb-3 row">
        <label for="nim" class="col-sm-2 col-form-label">NIM</label>
        <div class="col-sm-10">
            {{ $dataPasien->id }}
        </div>
    </div>
    <div class="mb-3 row">
        <label for="nama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='nama' value="{{ $dataPasien->nama }}" id="nama">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="jurusan" class="col-sm-2 col-form-label">no_telp</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='no_telp' value="{{ $dataPasien->no_telp }}" id="no_telp">
        </div>
    </div>
    <div class="form-group row">
    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12 mb-2">
        <label for="validationCustom03">Umur</label>
        <input name="umur" type="text" class="form-control" id="umur" placeholder="Masukan Umur" required value="{{ $dataPasien->umur }}">
        </div>
    </div>
    <div class="form-group row">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
        <label for="validationCustom01">Gender</label>
        <div class="col-sm-6">
            <div class="custom-controls-stacked">
                {{ $gender=$dataPasien->gender }}
                <div class="custom-control custom-radio">
                    <input type="radio" id="gender1" name="gender" value="Laki-Laki" class="custom-control-input" @if ($gender == "Laki-Laki") checked @endif>
                    <label class="custom-control-label" for="gender1">Laki-Laki</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="gender2" name="gender" value="Perempuan" class="custom-control-input" @if ($gender == "Perempuan") checked @endif>
                    <label class="custom-control-label" for="gender2">Perempuan</label>
                </div>
    <div class="mb-3 row">
        <label for="tgl_perawatan" class="col-sm-2 col-form-label">tgl_perawatan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='tgl_perawatan' value="{{ $dataPasien->tgl_perawatan }}" id="tgl_perawatan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="keluhan" class="col-sm-2 col-form-label">keluhan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='keluhan' value="{{ $dataPasien->keluhan }}" id="keluhan">
        </div>
    </div>
    <div class="mb-3 row">
        <label for="tindakan" class="col-sm-2 col-form-label">tindakan</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name='tindakan' value="{{ $dataPasien->tindakan }}" id="tindakan">
        </div>
    </div>
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 ">
        <label for="validationCustom01">Status</label>
        <div class="col-sm-6">
            <div class="custom-controls-stacked">
                {{ $status=$dataPasien->status }}
                <div class="custom-control custom-radio">
                    <input type="radio" id="status1" name="status" value="Tidak Rawat Inap" class="custom-control-input" @if ($status == "Tidak Rawat Inap") checked @endif>
                    <label class="custom-control-label" for="gender1">Tidak Rawat Inap</label>
                </div>
                <div class="custom-control custom-radio">
                    <input type="radio" id="status2" name="status" value="Rawat Inap" class="custom-control-input" @if ($status == "Rawat Inap") checked @endif>
                    <label class="custom-control-label" for="gender2">Rawat Inap</label>
                </div>
    <div class="mb-3 row">
        <label for="" class="col-sm-2 col-form-label"></label>
        <div class="col-sm-10"><button type="submit" class="btn btn-primary" name="submit">SIMPAN</button></div>
    </div>
</div>
</form>

@endsection