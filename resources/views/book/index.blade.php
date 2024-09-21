@extends('layout.master')

@section('title', 'book')
@section('content')
    <a href="{{ route('book.create') }}" class="btn btn-primary float-end mt-3 mr-3">Add Book</a>
    <h1 class="header">Books list</h1>
    <table class="table table-stripped">
        <thead>
            <tr>
                <th>id</th>
                <th>judul</th>
                <th>penulis</th>
                <th>harga</th>
                <th>tanggal terbit</th>
                <th>aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data_book as $index => $book)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $book->judul }}</td>
                    <td>{{ $book->penulis }}</td>
                    <td>{{ "Rp " . number_format($book->harga, 2, ',', '.') }}</td>
                    <td>{{ $book->tgl_terbit }}</td>
                    <td>
                        <form action="{{ route('book.destroy', $book->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button onclick="return confirm('Are you sure to delete?')" type="submit"
                                class="btn btn-sm btn-danger">Delete</button>
                        </form>
                        <a href="{{ route('book.edit', $book->id) }}" class="btn btn-sm btn-secondary">Edit</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    <h3>Total data -> {{ $summary_data }}</h3>
    <h3>Total price -> {{ $total_price }}</h3>
@endsection