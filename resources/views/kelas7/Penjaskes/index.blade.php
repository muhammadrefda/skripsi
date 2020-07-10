@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="">Mata Pelajaran</a></li>
                <li class="breadcrumb-item active"><a href="">Bab </a></li>
                <li class="breadcrumb-item"><a href="">Soal </a></li>
            </ol>
        </nav>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <p class="m-0 font-weight-bold text-primary">daftar bab berdasarkan mapel</p>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nama</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chapters as $chapter)
                            <tr>
                                <td><a href="{{route('kelas7.penjas.soal')}}">{{$chapter->name}}</a></td>
{{--                                <td><a href="{{route('kelas7.penjas.soal')}}">Permainan Bola Besar</a></td>--}}
                            </tr>
                            <tr>
{{--                                <td>--}}
{{--                                    <a class="btn btn-outline-primary" href="/soal7/show">Lihat</a>--}}
{{--                                    <a class="btn btn-outline-success" href="">Ubah</a>--}}
{{--                                    <a class="btn btn-outline-danger" href="">Hapus</a>--}}
{{--                                    <a class="btn btn-outline-warning text-success" href="/soal7/create">Tambah Soal</a>--}}
{{--                                </td>--}}

                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
