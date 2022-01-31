@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header shadow-sm bg-white">
                    <h4 class="text-secondary">
                        Masukkan Informasi Untuk Melengkapi Data
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{route('store.user')}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">NISN</label>
                                    <input type="number" name="nisn" id="" class="form-control" placeholder="NISN" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Nuptk</label>
                                    <input type="number" name="nuptk" id="" class="form-control" placeholder="NUPTK" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">User Name</label>
                                    <input type="text" name="name" id="" class="form-control" placeholder="User name" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="number" name="phone" id="" class="form-control" placeholder="Phone" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" name="address" id="" class="form-control" placeholder="Address" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <select name="gender" class="form-control" id="">
                                        <option value="">Select Your Religion</option>
                                        <option value="Male"> Male </option>
                                        <option value="Female"> Female </option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" id="" class="form-control" placeholder="E-mail" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="" class="form-control" placeholder="password" required>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Religion</label>
                                    <select name="religion" class="form-control" id="">
                                        <option value="">Select Your Religion</option>
                                        <option value="islam">Islam</option>
                                        <option value="kristen">Kristen</option>
                                        <option value="hindu">Hindu</option>
                                        <option value="budha">Budha</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="">Akses</label>
                                    <select name="roles" class="form-control" id="roles">
                                        <option value=""> Please Select One </option>
                                        @foreach ($roles as $role)
                                        <option value="{{$role}}">
                                            {{$role}}
                                        </option>
                                        @endforeach
                                    </select>

                                        @if($errors->has('roles'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('roles') }}</strong>
                                        </span>
                                        @endif
                                </div>
                            </div>


                            <div class="mt-2 ml-3">
                                <button class="btn btn-outline-info">Invite Member</button>
                                <a href="{{route('manage.user')}}" class="btn btn-outline-secondary">Back To Home</a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
