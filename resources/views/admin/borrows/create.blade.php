@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between">
                        <h5>{{ __('Create Borrower') }}</h5>
                        <a href="{{ route('borrows.index') }}" class="btn btn-secondary">Back</a>
                    </div>
                </div>

                <div class="card-body">
                    <form action="{{ route('borrows.store') }}" method="POST">
                        @csrf

                        <div class="mb-3">
                            <label for="data_borrow_id" class="form-label">Borrower</label>
                            <select name="data_borrow_id" id="data_borrow_id" class="form-control @error('data_borrow_id') is-invalid @enderror" required>
                                <option value="">Select Borrower</option>
                                @foreach($databorrows as $databorrow)
                                    <option value="{{ $databorrow->id }}" {{ old('data_borrow_id') == $databorrow->id ? 'selected' : '' }}>{{ $databorrow->name_borrower }}</option>
                                @endforeach
                            </select>
                            @error('data_borrow_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="book_id" class="form-label">Book</label>
                            <select name="book_id" id="book_id" class="form-control @error('book_id') is-invalid @enderror" required>
                                <option value="">Select Book</option>
                                @foreach($books as $book)
                                    <option value="{{ $book->id }}" {{ old('book_id') == $book->id ? 'selected' : '' }}>{{ $book->title_book }}</option>
                                @endforeach
                            </select>
                            @error('book_id')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="borrow_date" class="form-label">Borrow Date</label>
                            <input type="date" name="borrow_date" id="borrow_date" class="form-control @error('borrow_date') is-invalid @enderror" value="{{ old('borrow_date', now()->toDateString()) }}" required readonly>
                            @error('borrow_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label for="return_date" class="form-label">Return Date</label>
                            <input type="date" name="return_date" id="return_date" class="form-control @error('return_date') is-invalid @enderror" value="{{ old('return_date') }}">
                            @error('return_date')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Save</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
