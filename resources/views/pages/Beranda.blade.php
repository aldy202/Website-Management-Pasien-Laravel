@extends('pages.template')

@section('content')
 <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Selamat Datang</h2>
                            <p> Selamat datang di dashboard Sistem Informasi Klinik, Berikut beberapa data yang baru-baru ini diimputkan</p>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
<div class="row">
    <!-- ============================================================== -->
    <!-- basic table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Data Pembaruan Input Pasien</h5>
                <p>Data pasien yang baru saja ditangani</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered first">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Gender</th>
                                <th>No Telp</th>
                                <th>Tanggal Perawatan</th>
                                <th>Keluhan</th>
                                <th>Tindakan</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i =$data ->firstItem() ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->tgl_perawatan }}</td>
                                <td>{{ $item->keluhan }}</td>
                                <td>{{ $item->tindakan }}</td>
                                <td>{{ $item->status }}</td>
                            </tr>
                        </tbody>
                        @endforeach
                        <tfoot>
                            <tr>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Gender</th>
                                <th>No Telp</th>
                                <th>Tanggal Perawatan</th>
                                <th>Keluhan</th>
                                <th>Tindakan</th>
                                <th>Status</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->
</div>
<div class="row">
    <!-- ============================================================== -->
    <!-- data table  -->
    <!-- ============================================================== -->
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <h5 class="mb-0">Data Pembaruan Tenaga Medis Terbaru</h5>
                <p>Data ini merupakan data tenaga medis yang baru-baru ini ditambahkan</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="example" class="table table-striped table-bordered second" style="width:100%">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>JK</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i =$data ->firstItem() ?>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->gender}}</td>
                            </tr>
                        </tbody>
                        @endforeach
                        <tfoot>
                            <tr>
                                <th>Id</th>
                                <th>Nama</th>
                                <th>Umur</th>
                                <th>Email</th>
                                <th>No Hp</th>
                                <th>JK</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- end data table  -->
    <!-- ============================================================== -->
    {{--
{{$val}} <br>
--}}
</div>
@endsection