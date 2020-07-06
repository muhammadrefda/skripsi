@extends('master')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
        </div>

    </div>
    <!-- /.container-fluid -->

    <!-- Approach -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
        </div>
        <div class="card-body">
            <form action="{{route('soal.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="FormControlSelectMaPel">Pilih Mata Pelajaran</label>
{{--                    @foreach($dailyTests as $dailyTest)--}}
                    <select class="form-control" id="exampleFormControlSelect1">
{{--                        <option>Pilih Mata Pelajaran</option>--}}
                        @foreach()
{{--                        <option>{{$dailyTest->nama}}</option>--}}

                        {{--                        <option>Bahasa Indonesia</option>--}}
{{--                        <option>Ilmu Pengetahuan Sosial</option>--}}
{{--                        <option>Pendidikan Kewarganegaraan</option>--}}
                        @endforeach
                    </select>
{{--                    @endforeach--}}

                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Bab Pelajaran</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan No 1</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 1</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 2</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan No 2</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 2</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan No 3</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 3</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan No 4</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 4</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan No 5</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 5</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan No 6</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 6</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan No 7</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 7</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan No 8</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 8</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan No 9</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 9</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlInput1">Pertanyaan No 10</label>
                    <input type="" class="form-control" id="exampleFormControlInput1">
                </div>

                <div class="form-group">
                    <label for="exampleFormControlInput1">Jawaban No 10</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1">
                </div>
                <button type="submit" class="btn btn-primary">Simpan</button>

            </form>

        </div>
    </div>
@endsection
