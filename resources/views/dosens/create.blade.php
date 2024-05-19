@extends('layout')

@section('content')
    <h1>Add Dosen</h1>
    <form action="{{ route('dosens.store') }}" method="POST">
        @csrf
        <div>
            <label for="nid">NIP:</label>
            <input type="text" id="nid" name="nid" required>
        </div>
        <div>
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>
        </div>
        <div>
            <label for="departemen">Departemen:</label>
            <input type="text" id="departemen" name="departemen" required>
        </div>
        <button type="submit">Submit</button>
    </form>
@endsection
