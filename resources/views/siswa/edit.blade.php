@extends('layout')

@section ('konten')

<h4>Edit Siswa</h4>
<form action="{{ route('siswa.update,$siswa->id') }}" method="post">
    @csrf
    <label>Nis</label>
    <input type="number" name="nis" value="{{ $siswa->nis }}"  class="form-control mb-2">
    <label>Nama</label>
    <input type="text" name="nama" value="{{ $siswa->nama }}" class="form-control mb-2">
    <label>Alamat</label>
    <input type="text" name="alamat" value="{{ $siswa->alamat }}" class="form-control mb-2">
    <label>No Hp</label>
    <input type="int" name="no_hp" value="{{ $siswa->no_hp }}" class="form-control mb-2">
    <label>Jenis Kelamin</label>
    <select name="jenis_kelamin" value="{{ $siswa->jenis_kelamin }}">
    <option value="laki_laki">Laki Laki</option>
    <option value="perempuan">Perempuan</option>
    </select>
    <br>
    <label>Hobi</label>
    <input type="text" name="hobi" value="{{ $siswa->hobi }}" class="form-control mb-2">

    <button class="btn btn-primary">Edit</button>
</form>
@endsection
