@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Edit Penggalang</h2>
                <hr>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        Something wrong
                        <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                        </ul>
                    </div>
                @endif
                <form action="{{ route('penggalang.update', $penggalang->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" value="{{ $penggalang->judul }}">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <textarea class="form-control" name="nama" id="nama">{{ $penggalang->nama }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div class="form-check">
                            <div class="radio">
                                <input class="form-check-input" type="radio" name="status" value="1" {{ $penggalang->status== '1' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                Enabled
                                </label>
                            </div>
                            <div class="radio">
                                <input class="form-check-input" type="radio" name="status" value="0" {{ $penggalang->status=='0' ? 'checked' : '' }}>
                                <label class="form-check-label">
                                Disabled
                                </label>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Kategori</label>
                        <select class="form-control" name="kategori">
                            <option value="">Pilih Kategori</option>                            
                            <option value="Balita" {{ $penggalang->kategori == 'Balita' ? 'selected' : '' }}>Balita</option>
                            <option value="Kesehatan" {{ $penggalang->kategori == 'Kesehatan' ? 'selected' : '' }}>Kesehatan</option>
                            <option value="Pendidikan" {{ $penggalang->kategori == 'Pendidikan' ? 'selected' : '' }}>Pendidikan</option>
                            <option value="Lainnya" {{ $penggalang->kategori == 'Lainnya' ? 'selected' : '' }}>Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="biaya">Biaya</label>
                        <textarea class="form-control" name="biaya" id="biaya">{{ $penggalang->biaya }}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <textarea class="form-control" name="url" id="url">{{ $penggalang->url }}</textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
    </div>

@endsection