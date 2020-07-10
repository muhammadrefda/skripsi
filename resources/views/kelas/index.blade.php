@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">



        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                    <li class="breadcrumb-item active"><a href="/kelas">Kelas</a></li>
                <li class="breadcrumb-item"><a href="/kelas-7/mata-pelajaran">Mata Pelajaran</a></li>
                <li class="breadcrumb-item"><a href="/kelas-7/bab">Bab </a></li>
                <li class="breadcrumb-item"><a href="/kelas-7/soal">Soal </a></li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="m-0 font-weight-bold text-primary">silahkan pilih kelas</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nomor </th>
                            <th>kelas</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($grades as $grade)
                            <tr>
                                <td>
                                    {{$grade->id}}
                                </td>
                                <td>
                                    <a href="/mata-pelajaran/">{{$grade->name}}</a>
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
