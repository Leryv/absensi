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
                    <form action="{{route('update.user', $user->id)}}" method="POST">
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">NISN</label>
                                    <input type="text" name="nisn" id="" value="{{$user->nisn ?? '-'}}"class="form-control" placeholder="NISN">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">NUPTK</label>
                                    <input type="text" name="nuptk" id="" value="{{$user->nuptk ?? '-'}}" class="form-control" placeholder="Nisn">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">User Name</label>
                                    <input type="text" name="name" id="" value="{{$user->name}}"class="form-control" placeholder="User name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" id="" value="{{$user->phone}}"class="form-control" placeholder="Phone">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Address</label>
                                    <input type="text" name="address" id="" value="{{$user->address}}" class="form-control" placeholder="Address">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Gender</label>
                                    <select name="gender" class="form-control" id="">

                                        <option value="male"
                                        {{$user->gender == 'male' ? 'selected':''}}>
                                            Male
                                        </option>

                                        <option value="female"
                                        {{$user->gender == 'female' ? 'selected':''}}>
                                            Female
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" id="" value="{{$user->email}}" class="form-control" placeholder="E-mail">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Password</label>
                                    <input type="password" name="password" id="" class="form-control" placeholder="password">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="">Religion</label>
                                    <select name="religion" class="form-control" id="">

                                        <option value="">Select your religion</option>

                                        <option value="religion"
                                        {{$user->religion ?? 'Islam'?'selected':''}}>
                                            Islam
                                        </option>

                                        <option value="religion"
                                        {{$user->religion ?? 'Kristen'?'selected':''}}>
                                            Kristen
                                        </option>

                                        <option value="religion"
                                        {{$user->religion ?? 'Hindu'?'selected':''}}>
                                            Hindu
                                        </option>

                                        <option value="religion"
                                        {{$user->religion ?? 'Buddha'?'selected':''}}>
                                            Buddha
                                        </option>

                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="roles">Akses</label>
                                    <select name="roles" id="roles" class="form-control">

                                        @foreach ($roles as $get)
                                        <option value= "{{$get}}" {{$user->roles->implode ('name',', ') == $get ? 'selected' : ''}}>
                                            {{$get}}
                                        </option>
                                        @endforeach

                                    </select>
                                </div>
                            </div>


                            <div class="mt-2 ml-3">
                                <button class="btn btn-primary">Ubah Data</button>
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
