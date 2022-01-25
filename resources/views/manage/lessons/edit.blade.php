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
                    <form action="{{route('update.lesson', $lesson->id)}}" method="post">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Guru</label>
                                    <select name="teacher" id="" class="form-control">
                                        <option value="">Pilih Nama Guru</option>
                                        <option value="John Doe">John Doe</option>
                                        <option value="John">John</option>
                                        <option value="Taylor Otwel">Taylor Otwel</option>
                                        <option value="Adam wathan">Adam Wathan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Kelas</label>
                                    <select name="class" id="" class="form-control">
                                        <option value="">Pilih Nama Kelas</option>
                                        <option value="x">X</option>
                                        <option value="xi">XI</option>
                                        <option value="xii">XII</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nama Pelajaran</label>
                                    <input type="text" name="name" id="" value="{{$lesson->name}}" class="form-control"
                                        placeholder="Nama Pelajaran">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jam masuk</label>
                                    <input type="time" name="jam_masuk" value="{{$lesson->jam_masuk}}" id="" class="form-control"
                                        placeholder="Jam masuk">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="">Jam Selesai</label>
                                    <input type="time" name="jam_selesai" id="" value="{{$lesson->jam_selesai}}" class="form-control"
                                        placeholder="Jam selesai">
                                </div>
                            </div>
                            <div class="mt-2 ml-3">
                                <button class="btn btn-outline-info"> Ubah</button>
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
