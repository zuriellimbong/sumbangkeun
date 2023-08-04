@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Create Penggalang</h2>
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
                <form action="{{ route('penggalang.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" name="judul" id="judul" placeholder="Masukkan Judul">
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <textarea class="form-control" name="nama" id="nama" placeholder="Masukkan Nama"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <div class="form-check">
                            <div class="radio">
                                <input class="form-check-input" type="radio" name="status" value="1">
                                <label class="form-check-label">
                                Enabled
                                </label>
                            </div>
                            <div class="radio">
                                <input class="form-check-input" type="radio" name="status" value="0">
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
                            <option value="Balita">Balita</option>
                            <option value="Kesehatan">Kesehatan</option>
                            <option value="Pendidikan">Pendidikan</option>
                            <option value="Lainnya">Lainnya</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="biaya">Biaya</label>
                        <textarea class="form-control" name="biaya" id="biaya" placeholder="Masukkan Biaya"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <textarea class="form-control" name="url" id="url" placeholder="Masukkan Url"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
    </div>

@endsection