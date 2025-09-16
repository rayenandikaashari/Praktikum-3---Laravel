@extends('app')

@section('content')
<h1>Welcome to the tambahbuku page</h1>
<form action="/simpanbuku" method="POST">
    @csrf
    <div>
        <label for="judul">Judul:</label>
        <input type="text" id="judul" name="judul" required>
    </div>
    <div>
        <label for="pengarang">Pengarang:</label>
        <input type="text" id="pengarang" name="pengarang" required>
    </div>
    <div>
        <label for="penerbit">Penerbit:</label>
        <input type="text" id="penerbit" name="penerbit" required>
    </div>
    <div>
    <button type="submit">Submit</button>
    </div>
</form>
@endsection