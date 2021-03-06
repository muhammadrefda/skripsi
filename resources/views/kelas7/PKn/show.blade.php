@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/mata-pelajaran7/">Mata Pelajaran</a></li>
                <li class="breadcrumb-item"><a href="{{route('kelas7.pkn')}}">Bab </a></li>
                <li class="breadcrumb-item"><a href="">Soal </a></li>
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
                        <a class="btn btn-outline-warning text-success" href="{{route('kelas7.pkn.create')}}">Tambah Soal</a>
                        <hr>
                        <thead>
                        <tr>
                            <th>nomor</th>

                            <th>soal </th>
                            <th>jawaban</th>
                            <th>kata kunci</th>
                            <td colspan="2">aksi</td>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($dailyTests as $dailyTest)
                            <td>{{$loop->iteration}}</td>
                            <td>{{$dailyTest->question}}</td>
                                <td>{{$dailyTest->answer_teacher}}</td>
                                <td>{{$dailyTest->keyword}}</td>
                                <td>
                                    <form action="{{route('kelas7.pkn.soal.hapus',$dailyTest->id)}}" method="POST" onsubmit="return confirm('Yakin menghapus soal ini?')">
                                        @csrf
                                        <input type="hidden" name="_method" value="DELETE"/>
                                        <button class="btn btn-danger" type="submit">Hapus</button>
                                    </form>
                                </td>
                            <td>
                                <a href="{{route('kelas7.pkn.soal.ubah',$dailyTest->id)}} " class="btn btn-warning">Ubah</a>
                            </td>
                        </tbody>
                        @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
