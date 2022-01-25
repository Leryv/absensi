@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card border-0 shadow-sm">
                    <div class="card-header shadow-sm bg-white">
                        <h4 class="text-secondary">
                            Enter the information to add a new class, enter the class correctly
                        </h4>
                    </div>
                    <div class="card-body">
                        <form action="{{route('update.class', $class->id)}}" method="post">
                            @csrf
                            @method('PATCH')
                            <input type="hidden" name="id" value="{{ $class->id }}" >
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Nama Kelas</label>
                                        <select name="name" id="name" class="form-control">
                                            <option>pilih kelas</option>
                                            <option value="X">X</option>
                                            <option value="XI">XI</option>
                                            <option value="XII">XII</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="walas">Walikelas</label>
                                        <select name="walas" id="walas" class="form-control">
                                            <option value="">Pilih walikelas</option>
                                            <option value="agus">Agus</option>
                                            <option value="udin">Udin</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Jurusan</label>
                                        <input type="text" name="jurusan" id="" class="form-control" value="{{ $class->jurusan }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="">Jumlah Siswa</label>
                                        <input type="text" name="jumlah" id="" class="form-control" placeholder="Jumlah Siswa" value="{{ $class->jumlah }}">
                                    </div>
                                </div>
                                <div class="mt-2 ml-3">
                                    <button type="submit" class="btn btn-outline-info">Add Class</button>
                                    <a href="{{ route('home') }}" class="btn btn-outline-secondary">Back To Home</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
