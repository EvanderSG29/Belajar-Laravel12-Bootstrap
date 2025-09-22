@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Kategori</div>

                <div class="card-body">
                    @section('success')
                    <div class="alert alert-success" role="alert">{{ $value }}</div>
                    @endsection

                    <div class="d-grid gap-2 d-md-flex justify-content-md-end"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
