@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item active"><a href="/mata-pelajaran7/">Mata Pelajaran</a></li>
                <li class="breadcrumb-item"><a href="{{route('kelas7.penjas.soal')}}">Bab </a></li>
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
                        <a class="btn btn-outline-warning text-success" href="{{route('kelas7.penjas.create')}}">Tambah Soal</a>
                        <hr>

                        <thead>
                        <tr>
{{--                            <th>id</th>--}}
                            <th>soal </th>
                            <th>jawaban</th>
                            <th>kata kunci</th>
                            <th>aksi</th>
                        </tr>
                        </thead>
                        <tbody>
{{--                        @foreach($dailyTests as $dailyTest)--}}
{{--                            <td>{{ $loop->iteration }}</td>--}}
{{--                        @endforeach--}}

                        @foreach($dailyTests as $dailyTest)
{{--                                <td>{{$dailyTest->id}}</td>--}}

{{--                                <td>{{$dailyTest->chapter_id}}</td>--}}
                                <td>{{$dailyTest->question}}</td>
                                <td>{{$dailyTest->answer}}</td>
                                <td>{{$dailyTest->keyword}}</td>
                                <td>

                                    <form action="{{route('kelas7.penjas.soal.hapus',$dailyTest->id)}}" method="POST" onsubmit="return confirm('Yakin menghapus soal ini?')">
                                        @csrf
{{--                                        @method('DELETE')--}}
                                        <input type="hidden" name="_method" value="DELETE"/>
{{--                                        <input type="submit" class="btn-danger" value="Delete">--}}
                                        <button class="btn btn-outline-danger" type="submit">Hapus</button>
                                    </form>
                                </td>

                        </tbody>
                        @endforeach

                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->
@endsection
