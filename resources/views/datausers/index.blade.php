@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Data Users</h3>
                    <a href="{{ route('datausers.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>User</th>
                                <th>Student ID</th>
                                <th>Class</th>
                                <th>Phone</th>
                                <th>Gender</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($dataUsers as $dataUser)
                            <tr>
                                <td>{{ $dataUser->id }}</td>
                                <td>{{ $dataUser->user ? $dataUser->user->name : 'N/A' }}</td>
                                <td>{{ $dataUser->student_id }}</td>
                                <td>{{ $dataUser->class }}</td>
                                <td>{{ $dataUser->phone }}</td>
                                <td>{{ $dataUser->gender }}</td>
                                <td>
                                    <a href="{{ route('datausers.show', $dataUser) }}" class="btn btn-info">View</a>
                                    <a href="{{ route('datausers.edit', $dataUser) }}" class="btn btn-warning">Edit</a>
                                    <form action="{{ route('datausers.destroy', $dataUser) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Delete</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    {{ $dataUsers->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
