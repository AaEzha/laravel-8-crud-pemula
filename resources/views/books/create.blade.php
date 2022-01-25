@extends('layouts.master')

@section('content')
    <form action="{{ route('book.store') }}" method="post">
        @csrf

        <div class="form-group">
            <label for="judul">Judul Buku</label>
            <input type="text" class="form-control" name="judul" id="judul" aria-describedby="helpjudul"
                placeholder="Tulis judul buku">
            <small id="helpjudul" class="form-text text-danger">Help text</small>
        </div>

        <div class="form-group">
            <label for="penulis">Nama Penulis</label>
            <input type="text" class="form-control" name="penulis" id="penulis" aria-describedby="helppenulis"
                placeholder="Tulis nama penulis">
            <small id="helppenulis" class="form-text text-danger">Help text</small>
        </div>

        <div class="form-group">
            <label for="tahun">Tahun Terbit</label>
            <input type="year" class="form-control" name="tahun" id="tahun" aria-describedby="helptahun"
                placeholder="Tulis tahun terbit">
            <small id="helptahun" class="form-text text-danger">Help text</small>
        </div>

        <div class="form-group">
            <label for="sinopsis">Sinopsis</label>
            <textarea class="form-control" name="sinopsis" id="sinopsis" aria-describedby="helpsinopsis" rows="3" placeholder="Tulis sinopsis"></textarea>
            <small id="helpsinopsis" class="form-text text-danger">Help text</small>
        </div>

        <input name="simpan" id="simpan" class="btn btn-primary" type="submit" value="Simpan">

        <a class="btn btn-default" href="{{ route('book.index') }}" role="button">Kembali</a>

    </form>
@endsection
