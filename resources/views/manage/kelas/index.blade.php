@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-0 bg-white shadow-sm">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('manage.add.form.kelas')}}" class="btn btn-outline-info">Tambah Kelas</a>
                        <a href="{{route('home')}}" class="btn btn-outline-secondary ml-3">Back To Home</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="mt-2 mb-2">
                    </div>
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Kelas</th>
                                    <th>Wali Kelas</th>
                                    <th>Jurusan</th>
                                    <th>Jumlah siswa</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($classes as $class)
                                    <tr>
                                        <td>{{ $class->name }}</td>
                                        <td>{{ $class->walas }}</td>
                                        <td>{{ $class->jurusan }}</td>
                                        <td>{{ $class->jumlah }}</td>
                                        <td>
                                            <form action="{{route('destroy.class',$class->id)}}" method="post">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{ route('edit.class', $class->id) }}" class="btn btn-outline-info btn-sm" type="submit">Edit</a>
                                                <button class="btn btn-outline-danger btn-sm" type="submit">Delete</button>
                                            </form>
                                        </td>
                                        @empty
                                        <td colspan="5" class="text-center">
                                            Sorry, kelas is not available, TAmbah kelas
                                        </td>
                                    </tr>
                                </tbody>

                                @endforelse
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection



