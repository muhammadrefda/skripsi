@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/mata-pelajaran7/">Mata Pelajaran</a></li>
                <li class="breadcrumb-item"><a href="/bab7">Bab </a></li>
                <li class="breadcrumb-item"><a href="/soal7">Soal </a></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="m-0 font-weight-bold text-primary">Daftar Soal Berdasarkan Bab Mata Pelajaran</p>

            </div>
            <div class="card-body">

                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nama Bab </th>
                            <th>Aksi </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chapters as $chapter)

                        <tr>
                            <td><a href="">{{$chapter->name}}</a></td>

                            <td>
                                <a class="btn btn-outline-primary" href="/soal7/show">Lihat</a>
                                <a class="btn btn-outline-success" href="">Ubah</a>
                                <a class="btn btn-outline-danger" href="">Hapus</a>
                                <a class="btn btn-outline-warning text-success" href="/soal7/create">Tambah Soal</a>
                            </td>
                        </tr>
                        @endforeach

                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
