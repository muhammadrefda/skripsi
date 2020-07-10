@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">



        <!-- Page Heading -->

{{--        <h1 class="h3 mb-2 text-gray-800">BANK SOAL</h1>--}}

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
                <p class="m-0 font-weight-bold text-primary">silahkan pilih nilai mata pelajaran</p>
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

                        <tr>
                            <td>
                                1

                            </td>
                            <td>
                                <a href="/nilai/">Pendidikan Kewarganegaraan</a>
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
