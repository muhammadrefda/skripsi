@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
{{--        <h1 class="h3 mb-2 text-gray-800">Daftar Chapter Mata Pelajaran PKN</h1>--}}

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/bank-soal">Mata Pelajaran</a></li>
                <li class="breadcrumb-item"><a href="/bab">Bab </a></li>
                <li class="breadcrumb-item"><a href="/soal">Soal </a></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="m-0 font-weight-bold text-primary">Daftar Soal PKn</p>
                <hr>
                <a href="/tambah-soal">tambah soal</a>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama Bab </th>
                            <th>Aksi </th>
                        </tr>
                        </thead>
                        <tbody>

                        <tr>
                            <td>1</td>
                            <td><a href="">Norma norma</a></td>
                            <td>
                                <button class="btn btn-outline-primary">
                                    Lihat
                                </button>
                                <button class="btn btn-outline-success">
                                    Ubah
                                </button>
                                <button class="btn btn-outline-danger">
                                    Hapus
                                </button>
                            </td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a href="">Kemerdekaan</a></td>
                            <td>
                                <button class="btn btn-outline-primary">
                                    Lihat
                                </button>
                                <button class="btn btn-outline-success">
                                    Ubah
                                </button>
                                <button class="btn btn-outline-danger">
                                    Hapus
                                </button>
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
