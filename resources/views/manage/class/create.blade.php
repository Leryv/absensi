@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header shadow-sm bg-white">
                    <h4 class=" font-weight-bold">
                        Silahkan masukkan informasi kelas, Masukkan data yang akurat
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{route('store.class')}}" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Nama Kelas</label>
                                    <input type="text" name="" id="" class="form-control" placeholder="Nama Kelas">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Wali Kelas</label>
                                    <select name="class" class="form-control" id="">
                                        <option value="">Pilih Wali Kelas</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jurusan</label>
                                    <select name="Jurusan" class="form-control" id="">
                                        <option value="">Pilih Jurusan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jumlah siswa</label>
                                    <input type="number" name="" id="" class="form-control" placeholder="Jumlah Siswa">
                                </div>
                            </div>
                            <div class="mt-2 ml-3">
                                <button class="btn btn-outline-info">Tambah Kelas </button>
                                <a href="{{route('home')}}" class="btn btn-outline-secondary">Back To Home</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
