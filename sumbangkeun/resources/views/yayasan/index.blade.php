@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h2>Yayasan</h2>
                <hr>

                <p><a class="btn btn-primary" href="{{ route('yayasan.create') }}">Tambah Yayasan</a></p>
                
                @if(session()->get('success'))
                <div class="alert alert-success">
                    {{ session()->get('success') }}
                </div>
                @endif
                
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nama</th>
                            <th scope="col">Status</th>
                            <th scope="col">Alamat</th>
                            <th scope="col">Deskripsi</th>
                            <th scope="col">Url</th>                            
                            <th scope="col">Edit</th>
                            <th scope="col">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($yayasan as $n)
                        <tr>
                            <td>{{ $n->id }}</td>
                            <td>{{ $n->nama }}</td>
                            <td>{{ $n->status ? 'enabled' : 'disabled' }}</td>
                            <td>{{ $n->alamat->alamat_name }}</td>
                            <td>{{ $n->deskripsi }}</td>
                            <td><img src="{{ $n->url }}" style="width: 20px; height: 20px;"></td>
                            <td><a class="btn btn-warning" href="{{ route('yayasan.edit', $n->id) }}">Edit</a> </td>
                            <td>
                                <form onsubmit="return confirm('Apakah anda yakin?');" action="{{ route('yayasan.destroy', $n->id) }}" method="POST">
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