@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-0 bg-white shadow-sm">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('manage.add.form.invite')}}" class="btn btn-outline-info">Invite New Member</a>
                        <a href="{{route('home')}}" class="btn btn-outline-secondary ml-3">Back To Home</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2 mb-2">
                        <div class="dropdown">
                            <button class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort By
                            </button>

                        <div class="dropdown-menu">
                        <a href="{{route('student')}}" class="btn btn-outline-info dropdown-item">Data Siswa</a>
                        <a href="{{route('walikelas')}}" class="btn btn-outline-secondary dropdown-item">Data Wali Kelas</a>
                        </div>
                    </div>
                </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>User Name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Phone</th>
                                    <th>Options</th>
                                </tr>
                            </thead>

                                @foreach ($users as $record)
                                <tr>
                                    <td>{{ $record->name}}</td>
                                    <td>{{ $record->email}}</td>
                                    <td>{{ $record->roles->implode('name', ', ')}}</td>
                                    <td>{{ $record->phone}}</td>
                                    <td>
                                        <form action="{{route('destroy.user',$record->id)}}" method="post">
                                            @csrf
                                            @method('DELETE')
                                            <a href="{{route ('edit.user', $record->id)}}" class="btn btn-outline-info btn-sm">Edit</a>
                                            <button type="submit" class="btn btn-outline-danger btn-sm">Hapus</button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
{{--  {{route ('destroy.user')}}  --}}

{{--  <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Student</a>
            <a class="dropdown-item" href="#">Wali Kelas</a>
        </div>
    </div>  --}}
