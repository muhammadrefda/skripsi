@extends('master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Ubah Soal</h1>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
{{--            <form action="{{route('kelas7.penjas.soal.ubah')}}" method="POST">--}}
            <form action="/kelas-7/penjaskes/soal/{{}}" method="POST">

            @csrf
                <div class="form-group">
                    <label>Bab</label>
                    <select class="form-control" name="chapter_id">
                        @foreach($chapters as $chapter)
                            <option value="{{$chapter->id}}">{{$chapter->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan </label>
                    <input type="text" class="form-control" name="question">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban </label>
                    <input type="text" class="form-control" name="answer">
                </div>
                <div class="form-group">
                    <label for="">Kata Kunci Jawaban </label>
                    <input type="text" class="form-control" name="keyword">
                </div>
                <input type="submit" name="submit" class="btn btn-outline-primary" value="simpan">
            </form>

        </div>
    </div>

@endsection
