@extends('layout')

@section('content')
    <h1>Edit Data Dosen</h1>
    <form action="{{ route('dosens.update', $dosen->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label for="nid">NIP:</label>
            <input type="text" id="nid" name="nid" value="{{ $dosen->nid }}" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" value="{{ $dosen->nama }}" required>
        </div>
        <div>
            <label for="departemen">Departemen:</label>
            <input type="text" id="departemen" name="departemen" value="{{ $dosen->departemen }}" required>
        </div>
        <button type="submit">Edit</button>
    </form>
@endsection
