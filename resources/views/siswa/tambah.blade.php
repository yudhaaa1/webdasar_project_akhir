@extends('layout')

@section ('konten')

<h4>Tambah Siswaa</h4>
<form action="{{ route('siswa.submit') }}" method="post">
    @csrf
    <label>Nis</label>
    <input type="number" name="nis" class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" class="form-control mb-2">
    <label>No Hp</label>
    <input type="int" name="no_hp" class="form-control mb-2">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin">
    <option value="laki_laki">Laki Laki</option>
    <option value="perempuan">Perempuan</option>
    </select>
    <br>
    <label>Hobi</label>
    <input type="text" name="hobi" class="form-control mb-2">

    <button class="btn btn-primary">Tambah</button>
</form>
@endsection