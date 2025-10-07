@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Admin Dashboard</h1>
            <p>Monitor all activities</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Borrows</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Book</th>
                        <th>Borrow Date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($borrows as $borrow)
                    <tr>
                        <td>{{ $borrow->id }}</td>
                        <td>{{ $borrow->user ? $borrow->user->name : 'N/A' }}</td>
                        <td>{{ $borrow->book ? $borrow->book->title_book : 'N/A' }}</td>
                        <td>{{ $borrow->borrow_date }}</td>
                        <td>{{ $borrow->status }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $borrows->links() }}
        </div>

        <div class="col-md-6">
            <h3>Users</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($users as $user)
                    <tr>
                        <td>{{ $user->id }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->role }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $users->links() }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Books</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Category</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($books as $book)
                    <tr>
                        <td>{{ $book->id }}</td>
                        <td>{{ $book->title_book }}</td>
                        <td>{{ $book->author }}</td>
                        <td>{{ $book->category }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $books->links() }}
        </div>

        <div class="col-md-6">
            <h3>Data Users</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>User</th>
                        <th>Student ID</th>
                        <th>Class</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataUsers as $dataUser)
                    <tr>
                        <td>{{ $dataUser->id }}</td>
                        <td>{{ $dataUser->user ? $dataUser->user->name : 'N/A' }}</td>
                        <td>{{ $dataUser->student_id }}</td>
                        <td>{{ $dataUser->class }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $dataUsers->links() }}
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('admin.logout') }}" class="btn btn-danger">Logout</a>
        </div>
    </div>
</div>
@endsection
