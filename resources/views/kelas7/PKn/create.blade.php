@extends('master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="{{route('mata-pelajaran7.index')}}">Mata Pelajaran</a></li>
                <li class="breadcrumb-item active"><a href="{{route('kelas7.pkn')}}">Bab </a></li>
                <li class="breadcrumb-item"><a href="">Soal </a></li>
            </ol>
        </nav>


    </div>
    <!-- /.container-fluid -->

    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <form action="{{route('kelas7.pkn.store')}}" method="POST">
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
                    <label>Kelas</label>
                    <select class="form-control" name="grade_id">
                        @foreach($grades as $grade)
                            <option value="{{$grade->id}}">{{$grade->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label>mapel</label>
                    <select class="form-control" name="subject_id">
                        @foreach($subjects as $grade)
                            <option value="{{$grade->id}}">{{$grade->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan </label>
                    <input type="text" class="form-control" name="question">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban </label>
                    <input type="text" class="form-control" name="answer_teacher">
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
