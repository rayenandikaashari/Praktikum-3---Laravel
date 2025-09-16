@extends('app')

@section('content')
<h1>Welcome to the tambahmahasiswa page</h1>
<form action="/simpanmahasiswa" method="POST">
    @csrf
    <div>
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
    </div>
    <div>
        <label for="npm">NPM:</label>
        <input type="text" id="npm" name="npm" required>
    </div>
    <div>
        <label for="jurusan">Jurusan:</label>
        <input type="text" id="jurusan" name="jurusan" required>
    </div>
    <div>
    <button type="submit">Submit</button>
    </div>
</form>
@endsection