@extends('master')
@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">


        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item "><a href="{{route('mata-pelajaran7.index')}}">Mata Pelajaran</a></li>
                <li class="breadcrumb-item active"><a href="">Bab </a></li>
                <li class="breadcrumb-item"><a href="">Soal </a></li>
            </ol>
        </nav>


        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h5 class="m-0 font-weight-bold text-primary">Silahkan Pilih Mata Pelajaran</h5>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                        <tr>
                            <th>Nomor </th>
                            <th>Mata Pelajaran</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td><a href="{{route('kelas7.penjas')}}">penjaskes</a></td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td><a href="{{route('kelas7.ipa')}}">Ilmu Pengetahuan Alam</a></td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td><a href="{{route('kelas7.ips')}}">Ilmu Pengetahuan Sosial</a></td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td><a href="{{route('kelas7.pai')}}">Pendidikan Agama Islam</a></td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td><a href="{{route('kelas7.senibudaya')}}">Seni Budaya</a></td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td><a href="{{route('kelas7.bind')}}">Bahasa Indonesia</a></td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td><a href="{{route('kelas7.bing')}}">Bahasa Inggris</a></td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td><a href="{{route('kelas7.prakarya')}}">Prakarya</a></td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td><a href="{{route('kelas7.pkn')}}">Pendidikan Kewarganegaraan</a></td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    <!-- /.container-fluid -->
@endsection
