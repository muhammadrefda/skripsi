@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="{{route('mata-pelajaran7.index')}}">Mata Pelajaran</a></li>
                <li class="breadcrumb-item active"><a href="{{route('kelas7.ipa')}}">Bab </a></li>
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
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($chapters as $chapter)
                            <tr>
                                <td><a href="{{route('kelas7.ipa.soal')}}">{{$chapter->name}}</a></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
@endsection
