@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
{{--        <h1 class="h3 mb-2 text-gray-800">Daftar Chapter Mata Pelajaran PKN</h1>--}}

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/mata-pelajaran9">Mata Pelajaran</a></li>
                <li class="breadcrumb-item"><a href="/bab9">Bab </a></li>
                <li class="breadcrumb-item"><a href="/soal9">Soal </a></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="m-0 font-weight-bold text-primary">silahkan pilih bab terkait</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nomor</th>
                            <th>Nama </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chapters as $chapter)
                        <tr>
                            <td>{{$chapter->id}}</td>
                            <td><a href="/soal">{{$chapter->name}}</a></td>
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
