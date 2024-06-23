@extends('layouts.app')
@section('content')
<div>
    <h1 class="text-center">Tambah Data Pasien Rumah Sakit Laravel</h1>
</div>
<hr>
<hr>
<div class="card text-center">
    <div class="m-5">
        <form action="{{ route('pasien.store') }}" method="post">
            @csrf
            <div class="form-floating mb-3">
                <input type="string" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama">
                @error('nama')
                    <div class="invalid-feedback">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                <label for="nama">Nama Pasien</label>
            </div>
            <div class="form-floating  mb-3">
                <select name="dokter_id" id="dokter_id" class="form-select @error('dokter_id') is-invalid @enderror">
                    @foreach ($dokters as $dokter)
                        <option value="{{ $dokter->id }}" selected>{{ $dokter->nama }}</option>
                    @endforeach
                </select>
                @error('dokter_id')
                    <div class="invalid-feedback">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                <label for="dokter_id">Pilih Dokter</label>
            </div>
            <div class="form-floating mb-3">
                <input type="string" class="form-control @error('nomor') is-invalid @enderror" id="nomor" name="nomor">
                @error('nomor')
                    <div class="invalid-feedback">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                <label for="nomor">Nomor Telepon Pasien</label>
            </div>
            <div class="form-floating mb-3">
                <input type="string" class="form-control @error('alamat') is-invalid @enderror" id="alamat" name="alamat">
                @error('alamat')
                    <div class="invalid-feedback">
                        <p>{{ $message }}</p>
                    </div>
                @enderror
                <label for="alamat">Alamat Pasien</label>
            </div>
            <button type="submit" class="btn btn-primary">Tambahkan Data</button>
        </form>
    </div>
</div>
@endsection