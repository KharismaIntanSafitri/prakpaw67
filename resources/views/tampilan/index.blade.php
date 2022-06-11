@extends('layouts.main')
@section('container')
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <tr>
                        <th>NO.</th>
                        <th>NRP</th>
                        <th>NAMA</th>
                        <th>EMAIL</th>
                        <th>ALAMAT</th>
                        <th>OPTION</th>
                    </tr>
                    </tr>
                </thead>
                <tbody>
                    {{-- @dd($mahasiswa) --}}
                    @foreach ($mahasiswa as $data_mhs)
                        <tr>
                            <td>{{ $no++ }}</td>
                            <td>{{ $data_mhs->nrp }}</td>
                            <td>{{ $data_mhs->nama }}</td>
                            <td>{{ $data_mhs->email }}</td>
                            <td>{{ $data_mhs->alamat }}</td>
                            <td>

                                <a class="btn btn-primary" href="/{{ $data_mhs->nrp }}/edit" role="button">Edit</a>

                                <form action="/{{ $data_mhs->nrp }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('delete')
                                    <button class="btn btndanger">Hapus</button>
                                </form>

                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
