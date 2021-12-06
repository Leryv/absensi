@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header shadow-sm bg-white">
                    <h4 class="text-secondary">
                        Enter the information to add a new lesson, enter the data correctly
                    </h4>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Guru</label>
                                    <select type="option" name="" id="" class="form-control" placeholder="Nama Guru">
                                    <option value="">Pilih Nama Guru</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select type="option" name="" id="" class="form-control" placeholder="Nama Kelas">
                                        <option value="">Pilih Nama Kelas</option>
                                    </select>
                                    </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Pelajaran</label>
                                    <select type="option" name="" id="" class="form-control" placeholder="Nama Pelajaran">
                                        <option value="">Pilih Nama Pelajaran</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jam Masuk</label>
                                    <input type="text" name="Jam Masuk" id="" class="form-control" placeholder="Jam Masuk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jam Selesai</label>
                                    <input type="text" name="Jam Selesai" id="" class="form-control" placeholder="Jam Selesai">
                                </div>
                            </div>
                            <div class="mt-2 ml-3">
                                <button class="btn btn-outline-info">Invite Member</button>
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
