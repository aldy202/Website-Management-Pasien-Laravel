@extends('pages.template')

@section('content')

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
                                <th>Remove Data</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $i =$dataPasien ->firstItem() ?>
                        @foreach ($dataPasien as $item)
                            <tr>
                                <td>{{ $item->nama }}</td>
                                <td>{{ $item->umur }}</td>
                                <td>{{ $item->gender }}</td>
                                <td>{{ $item->no_telp }}</td>
                                <td>{{ $item->tgl_perawatan }}</td>
                                <td>{{ $item->keluhan }}</td>
                                <td>{{ $item->tindakan }}</td>
                                <td>{{ $item->status }}</td>
                                <td>
                                    <form class="d-inline" action="{{ url('pasienupdatehapus/'.$item->id) }}" method="post">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
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
                                <th>Remove Data</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
        </div>
    <!-- ============================================================== -->
    <!-- end basic table  -->
    <!-- ============================================================== -->

@endsection