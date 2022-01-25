@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-0 bg-white shadow-sm">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('manage.add.form.invite')}}" class="btn btn-outline-info">Tambah Member</a>
                        <a href="{{route('home')}}" class="btn btn-outline-secondary ml-3">Back To Home</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2 mb-2">
                        <a href="#" class="btn btn-outline-info">Manage Student</a>
                        <a href="#" class="btn btn-outline-secondary">Manage Teacher</a>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>User name</th>
                                    <th>Email</th>
                                    <th>Role</th>
                                    <th>Phone</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tbody>
                                    @forelse($users as $user)
                                    <tr>
                                        <td>{{ $user->id }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone }}</td>
                                        <td>
                                            <form action="{{route('destroy.user', $user->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                {{--  <a href="#" class="btn btn-info btn-sm">Edit lesson</a>
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>  --}}
                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Sorry, currently user data is not available, please invite new users
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                        {{$users->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
{{--  {{route('edit.user',$user->id)}}  --}}
