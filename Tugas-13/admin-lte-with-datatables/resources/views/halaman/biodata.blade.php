@extends('layout.master')

@section('judul')
Halaman Biodata
@endsection

@section('content')
<form action="/kirim" method="post">
  @csrf
  <label>Nama Lengkap</label> <br>
  <input type="text" name="name"> <br>
  <label>Alamat</label> <br>
  <textarea name="alamat" id="" cols="30" rows="10"></textarea> <br>
  <label>Jenis Kelamin</label> <br>
  <input type="radio" name="jk" value="1"> Laki-laki
  <input type="radio" name="jk" value="2"> Perempuan <br>
  <input type="submit" value="Kirim">
</form>
@endsection