@extends('layout.master')

@section('title', 'edit book')

@section('content')
    <div class="text-center">
        <h1 class="">Edit Book</h1>
        <div class="mx-auto d-flex flex-column">
            <form action="{{ route('book.update',$book->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <input class="form-text" type="hidden" name="id" value="{{ $book->id }}">
                <div class="mb-3">
                    <label class="form-label" for="">Judul</label>
                    <input class="form-text  flex-fill" type="text" name="judul" value="{{ $book->judul }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Penulis</label>
                    <input class="form-text" type="text" name="penulis" value="{{ $book->penulis }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Harga</label>
                    <input class="form-text" type="text" name="harga" value="{{ $book->harga }}">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Tanggal terbit</label>
                    <input class="form-text" type="date" name="tgl_terbit" value="{{ $book->tgl_terbit }}">
                </div>

                <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto mb-2">Update</button>
                <a href="{{ '/book' }}" class="btn btn-primary d-block col-md-6 mx-auto text-center mt-2">Back</a>
            </form>
        </div>
    </div>
@endsection