@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('simpan.mahasiswa') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="text">NPM</label>
                            <input type="text" class="form-control" name="npm" placeholder="Masukkan NPM">
                        </div>
                        <div class="form-group">
                            <label for="text">Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukkan Nama Mahasiswa">
                        </div>
                        <div class="form-group">
                            <label for="text">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="">
                        </div>
                        <div class="form-group">
                            <label for="text">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir">
                        </div>
                        <div class="form-group">
                            <label for="jeniskelamin">Jenis Kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="L">Laki - Laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="text">Nomor Telp</label>
                            <input type="text" class="form-control" name="hp" placeholder="Masukkan Nomor Telp">
                        </div>
                        <div class="form-group">
                            <label for="text">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">simpan</button>
                        <a href="{{ route('mahasiswa') }}" class="btn btn-md btn-danger">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
