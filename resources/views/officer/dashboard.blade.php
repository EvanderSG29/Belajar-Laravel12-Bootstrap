@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1>Officer Dashboard</h1>
            <p>Manage students and borrowers</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <h3>Data Borrows</h3>
            <a href="{{ route('databorrows.index') }}" class="btn btn-primary">Manage Data Borrows</a>
        </div>

        <div class="col-md-6">
            <h3>Borrows</h3>
            <a href="{{ route('borrows.index') }}" class="btn btn-primary">Manage Borrows</a>
        </div>
    </div>
</div>
@endsection
