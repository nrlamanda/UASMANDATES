@extends('layouts.app')
@section('content')
<div>
    <h1 class="text-center">Data Pasien Rumah Sakit Laravel</h1>
</div>
<div>
    <a href="{{ route('pasien.create') }}" class="btn btn-success mb-3">Tambah Data</a>
    <div class="m-3">
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>            
        @endif
    </div>
    <table class="table table-striped table-bordered">
        <thead>
          <tr>
            <th scope="col">Nama Pasien</th>
            <th scope="col">Dokter Pasien</th>
            <th scope="col">Nomor Telepon Pasien</th>
            <th scope="col">Alamat Pasien</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody class="table-group-divider">
            @foreach ($pasiens as $pasien)
            <tr>
              <td>{{ $pasien->nama }}</td>
              <td>{{ $pasien->dokter->nama }}</td>
              <td>{{ $pasien->nomor }}</td>
              <td>{{ $pasien->alamat }}</td>
              <td>
                <a href="{{ route('pasien.edit', ['pasien' => $pasien->id]) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('pasien.destroy', ['pasien' => $pasien->id]) }}" method="POST" class="d-inline">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="pagination">
      {{ $pasiens->links() }}
    </div>
</div>
@endsection