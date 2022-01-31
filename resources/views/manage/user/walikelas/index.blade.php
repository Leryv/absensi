@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-0 bg-white shadow-sm">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('manage.user')}}" class="btn btn-outline-secondary ml-3">Back To Home</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2 mb-2">
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
