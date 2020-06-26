@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">BANK SOAL</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <a href="/tambah-soal" class="m-0 font-weight-bold text-primary">TAMBAH SOAL</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Mata Pelajaran</th>
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>Pendidikan Kewarganegaraan</td>
                            <td>
                                <button type="button" class="btn btn-success">LIHAT</button>
                                <button type="button" class="btn btn-primary">UBAH</button>
                                <button type="button" class="btn btn-danger">DELETE</button>


                            </td>
                        </tr>

                        <tr>
                            <td>Pendidikan Kewarganegaraan</td>
                            <td>
                                <button type="button" class="btn btn-success">LIHAT</button>
                                <button type="button" class="btn btn-primary">UBAH</button>
                                <button type="button" class="btn btn-danger">DELETE</button>


                            </td>
                        </tr>

                        <tr>
                            <td>Pendidikan Kewarganegaraan</td>
                            <td>
                                <button type="button" class="btn btn-success">LIHAT</button>
                                <button type="button" class="btn btn-primary">UBAH</button>
                                <button type="button" class="btn btn-danger">DELETE</button>


                            </td>
                        </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
