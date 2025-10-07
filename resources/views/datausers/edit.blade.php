@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Edit Data User</h3>
                </div>
                <div class="card-body">
                    <form action="{{ route('datausers.update', $dataUser) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="user_id">User</label>
                            <select name="user_id" id="user_id" class="form-control" required>
                                <option value="">Select User</option>
                                @foreach(\App\Models\User::all() as $user)
                                <option value="{{ $user->id }}" {{ $dataUser->user_id == $user->id ? 'selected' : '' }}>{{ $user->name }} ({{ $user->email }})</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="student_id">Student ID</label>
                            <input type="text" name="student_id" id="student_id" class="form-control" value="{{ $dataUser->student_id }}" required>
                        </div>
                        <div class="form-group">
                            <label for="class">Class</label>
                            <input type="text" name="class" id="class" class="form-control" value="{{ $dataUser->class }}" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" id="phone" class="form-control" value="{{ $dataUser->phone }}" required>
                        </div>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control" required>
                                <option value="male" {{ $dataUser->gender == 'male' ? 'selected' : '' }}>Male</option>
                                <option value="female" {{ $dataUser->gender == 'female' ? 'selected' : '' }}>Female</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
