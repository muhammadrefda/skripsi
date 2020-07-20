@extends('master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">
        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h5 class="h3 mb-0 text-gray-800">Ubah Soal</h5>
        </div>
    </div>
    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <form action="{{route('kelas8.penjas.soal.update', $dailyTest->id)}}" method="POST">
            @csrf
                @method('PUT')
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan </label>
                    <input type="text" class="form-control" name="question" value="{{$dailyTest->question}}">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban </label>
                    <input type="text" class="form-control" name="answer_teacher" value="{{$dailyTest->answer_teacher}}">
                </div>
                <div class="form-group">
                    <label for="">Kata Kunci Jawaban </label>
                    <input type="text" class="form-control" name="keyword" value="{{$dailyTest->keyword}}">
                </div>

                <input type="submit" name="submit" class="btn btn-outline-primary" value="simpan">

            </form>
        </div>
    </div>

@endsection
