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
                <p class="m-0 font-weight-bold text-primary">Daftar Soal</p>

            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>nomor</th>
{{--                            <th>nama bab </th>--}}
                            <th>soal </th>
                            <th>jawaban</th>
                            <th>kata kunci</th>
                        </tr>
                        </thead>
                        <tbody>
                            @foreach($dailyTests as $dailyTest)
                                <td>{{$dailyTest->id}}</td>
{{--                                <td>{{$dailyTest->chapter_id}}</td>--}}
                                <td>{{$dailyTest->question}}</td>
                                <td>{{$dailyTest->answer}}</td>
                                <td>{{$dailyTest->keyword}}</td>
                        </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
