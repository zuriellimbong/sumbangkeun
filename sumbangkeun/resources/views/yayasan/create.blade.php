@extends('layouts.app')

@section('content')

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h2>Create Yayasan</h2>
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
                <form action="{{ route('yayasan.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama">
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
                        <label>Alamat</label>
                        <select class="form-control" name="alamat_id">
                            <option value="">Pilih Alamat</option>
                            @foreach($alamats as $alamat)
                                <option value="{{ $alamat->id }}">
                                {{ $alamat->alamat_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>                    
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi</label>
                        <textarea class="form-control" name="deskripsi" id="deskripsi" rows="3" placeholder="Masukkan Deskripsi"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="url">Url</label>
                        <textarea class="form-control" name="url" id="url" rows="3" placeholder="Masukkan Url"></textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-warning">Reset</button>
                </form>
            </div>
        </div>
    </div>

@endsection