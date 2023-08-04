@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Penggalang</h2>
                <hr>

                <p><a class="btn btn-primary" href="{{ route('penggalang.create') }}">Tambah Penggalang</a></p>
                
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Judul</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Status</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Biaya</th>
                            <th scope="col">Url</th>
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    <tbody>
                        @foreach($penggalang as $n)
                        <tr>
                            <td>{{ $n->id }}</td>
                            <td>{{ $n->judul }}</td>
                            <td>{{ $n->nama }}</td>
                            <td>{{ $n->status ? 'enabled' : 'disabled' }}</td>
                            <td>{{ $n->kategori }}</td>
                            <td>Rp.{{ $n->biaya }}</td>
                            <td><img src="{{ $n->url }}" style="width: 20px; height: 20px;"></td>
                            <td><a class="btn btn-warning" href="{{ route('penggalang.edit', $n->id) }}">Edit</a> </td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('penggalang.destroy', $n->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger" type="submit">Delete</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection