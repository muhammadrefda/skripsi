@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/mata-pelajaran8">Mata Pelajaran</a></li>
                <li class="breadcrumb-item"><a href="/bab8">Bab </a></li>
                <li class="breadcrumb-item"><a href="/soal8">Soal </a></li>
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
                            <th>Nama </th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chapters as $chapter)
                        <tr>
                            <td><a href="/soal8">{{$chapter->name}}</a></td>
{{--                            <td>{{$chapter->grade_id}}</td>--}}
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
