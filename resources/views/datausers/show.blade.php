@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3>Data User Details</h3>
                </div>
                <div class="card-body">
                    <p><strong>User:</strong> {{ $dataUser->user ? $dataUser->user->name : 'N/A' }}</p>
                    <p><strong>Student ID:</strong> {{ $dataUser->student_id }}</p>
                    <p><strong>Class:</strong> {{ $dataUser->class }}</p>
                    <p><strong>Phone:</strong> {{ $dataUser->phone }}</p>
                    <p><strong>Gender:</strong> {{ $dataUser->gender }}</p>
                    <a href="{{ route('datausers.index') }}" class="btn btn-secondary">Back</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
