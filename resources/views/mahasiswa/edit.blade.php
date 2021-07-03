@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('update.mahasiswa', $mahasiswa->id) }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="text">NPM</label>
                            <input type="text" class="form-control" name="npm" placeholder="Masukkan NPM" value="{{ is_null('$mahasiswa') ? '' : $mahasiswa->npm }}">
                        </div>
                        <div class="form-group">
                            <label for="text">Nama Mahasiswa</label>
                            <input type="text" class="form-control" name="nama_mahasiswa" placeholder="Masukkan Nama Mahasiswa" value="{{ is_null('$mahasiswa') ? '' : $mahasiswa->nama_mahasiswa }}">
                        </div>
                        <div class="form-group">
                            <label for="text">Tanggal Lahir</label>
                            <input type="date" class="form-control" name="tgl_lahir" placeholder="" value="{{ is_null('$mahasiswa') ? '' : $mahasiswa->tgl_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="text">Tempat Lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir" placeholder="Masukkan Tempat Lahir" value="{{ is_null('$mahasiswa') ? '' : $mahasiswa->tempat_lahir}}">
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
                            <input type="text" class="form-control" name="hp" placeholder="Masukkan Nomor Telp" value="{{ is_null('$mahasiswa') ? '' : $mahasiswa->hp }}">
                        </div>
                        <div class="form-group">
                            <label for="text">Alamat</label>
                            <textarea class="form-control" name="alamat" rows="3" placeholder="{{ is_null('$mahasiswa') ? '' : $mahasiswa->alamat }}"></textarea>
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
