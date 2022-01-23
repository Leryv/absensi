@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card border-0 shadow-sm">
                <div class="card-header border-0 bg-white shadow-sm">
                    <div class="d-flex justify-content-end">
                        <a href="{{route('lessons.create')}}" class="btn btn-outline-info">Add New Lesson</a>
                        <a href="{{route('home')}}" class="btn btn-outline-secondary ml-3">Back To Home</a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Guru</th>
                                    <th>Nama Pelajaran</th>
                                    <th>Kelas</th>
                                    <th>jam</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($lessons as $lesson)
                                    <tr>
                                        <td>{{$lesson->teacher}}</td>
                                        <td>{{$lesson->name}}</td>
                                        <td>{{$lesson->class}}</td>
                                        <td>{{$lesson->jam_masuk}} - {{$lesson->jam_selesai}}</td>
                                        <td>
                                            <form action="{{route('destroy.lesson', $lesson->id)}}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <a href="{{route('edit.lesson',$lesson->id)}}" class="btn btn-info btn-sm">Edit lesson</a>
                                                <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                            </form>

                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5" class="text-center">
                                            Sorry, currently lessons data is not available, please add new lessons
                                        </td>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>

                        {{$lessons->links()}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
