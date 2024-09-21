@extends('layout.master')

@section('title', 'create book')

@section('content')
    <div class="text-center">
        <h1 class="">Create Book</h1>
        <div class="mx-auto d-flex flex-column">
            <form action="{{ route('book.store') }}" method="post" class="">
                @csrf
                <div class="mb-3">
                    <label class="form-label" for="">Judul</label>
                    <input class="form-text" type="text" name="judul">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Penulis</label>
                    <input class="form-text" type="text" name="penulis">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Harga</label>
                    <input class="form-text" type="text" name="harga">
                </div>
                <div class="mb-3">
                    <label class="form-label" for="">Tanggal terbit</label>
                    <input class="form-date" type="date" name="tgl_terbit">
                </div>
                <!-- <div>Penulis <input type="text" name="penulis"></div>
                <div>Harga <input type="text" name="harga"></div>
                <div>Tanggal terbit <input type="date" name="tgl_terbit"></div> -->
                <button type="submit" class="btn btn-primary d-grid gap-2 col-6 mx-auto mb-2">Save</button>
                <a href="{{ '/book' }}" class="btn btn-primary d-block col-md-6 mx-auto text-center mt-2">Back</a>
            </form>
        </div>
    </div>
@endsection