@extends('layouts.master')

@section('content')
    <div class="mb-3">
        <a class="btn btn-primary" href="{{ route('book.create') }}" role="button">Tambah Buku</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul Buku</th>
                <th>Penulis</th>
                <th>Tahun Terbit</th>
                <th>Sinopsis</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($books as $book)
            <tr>
                <td scope="row">{{ ($books->currentpage()-1) * $books->perpage() + $loop->index + 1 }}</td>
                <td>{{ $book->judul }}</td>
                <td>{{ $book->penulis }}</td>
                <td>{{ $book->tahun }}</td>
                <td>{{ Str::words($book->sinopsis, 5) }}</td>
                <td>
                    <a class="btn btn-primary btn-sm mb-1" href="{{ route('book.edit', $book->getKey()) }}" role="button">ubah</a>
                    <a class="btn btn-danger btn-sm" href="#" role="button">hapus</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    {{ $books->links() }}
@endsection
