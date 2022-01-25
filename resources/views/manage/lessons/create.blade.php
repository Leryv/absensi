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
                    <form action="{{route('store.lesson')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Guru</label>

                                    <select name="teacher" type="option"  id="" class="form-control" placeholder="Nama Guru">
                                        <option value="">Pilih Nama Guru</option>
                                        <option value="John Doe">John Doe</option>
                                        <option value="John">John</option>
                                        <option value="Taylor Otwel">Taylor Otwel</option>
                                        <option value="Adam Wathan">Adam Wathan</option>

                                    </select>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select type="option" name="class" id="" class="form-control" placeholder="Nama Kelas">

                                        <option value="">Pilih Nama Kelas</option>
                                        <option value="X">X</option>
                                        <option value="XI">XI</option>
                                        <option value="XII">XXI</option>

                                    </select>
                                    </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Pelajaran</label>
                                    <select type="option" name="name" id="" class="form-control" placeholder="Nama Pelajaran">
                                        <option value="">Pilih Nama Pelajaran</option>
                                        <option value="1">Ipa</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jam Masuk</label>
                                    <input type="time" name="jam_masuk" id="" class="form-control" placeholder="Jam Masuk">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jam Keluar</label>
                                    <input type="time" name="jam_selesai" id="" class="form-control" placeholder="Jam Selesai">
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
