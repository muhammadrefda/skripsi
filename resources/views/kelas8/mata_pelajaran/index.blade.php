@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->

{{--        <h1 class="h3 mb-2 text-gray-800">BANK SOAL</h1>--}}

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="mata-pelajaran8">Mata Pelajaran</a></li>
                <li class="breadcrumb-item"><a href="/bab8">Bab </a></li>
                <li class="breadcrumb-item"><a href="/soal8">Soal </a></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="m-0 font-weight-bold text-primary">silahkan pilih mata pelajaran</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nomor </th>
                            <th>Mata Pelajaran</th>
                        </tr>
                        </thead>
                        <tbody>
        @foreach($subjects as $subject)
                        <tr>
                            <td>
                                {{$subject->id}}
                            </td>
                            <td>
                                <a href="/kelas-8/bab">{{$subject->name}}</a>
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
