@extends('layouts.primary-layout')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-4 mx-auto">
                <form action="{{ route('latihan.store') }}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama</label>
                        <input type="text" name="nama" id="nama" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Jenis Kelamin</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1"
                                value="L">
                            <label class="form-check-label" for="exampleRadios1">
                                Laki-laki
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="exampleRadios1"
                                value="P">
                            <label class="form-check-label" for="exampleRadios1">
                                Perempuan
                            </label>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="nama" class="form-label">Alamat</label>
                        <input type="text" name="alamat" id="nama" class="form-control">
                    </div>

                    <button class="btn btn-primary" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
