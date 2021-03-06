@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="{{route('mata-pelajaran9.index')}}">Mata Pelajaran</a></li>
                <li class="breadcrumb-item active"><a href="{{route('kelas9.ips')}}">Bab </a></li>
                <li class="breadcrumb-item"><a href="">Soal </a></li>
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
                            <th>Aksi</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chapters as $chapter)
                            <tr>
                                <td><a href="{{route('kelas9.ips.soal')}}">{{$chapter->name}}</a></td>
                                <td><a class="btn btn-outline-primary" href="{{route('kelas9.ips.soal.tampil')}}">Lihat</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
