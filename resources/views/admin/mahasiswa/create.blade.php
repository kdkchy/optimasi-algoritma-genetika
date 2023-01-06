@extends('layouts.master')
@section('mahasiswa', 'active')

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="row">
            <div class="col-md-8 mb-5">
                <h4 class="nk-block-title">Tambah Mahasiswa</h4>
            </div>
            <div class="col-md-4 mb-5 text-end">
                <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-secondary"><em class="icon ni ni-bold-left"></em><span>Kembali</span> </a>
            </div>
        </div>

    </div><!-- nk-block -->

    <div class="card card-preview">
        <div class="card-header">
            <h5>Input data Mahasiswa</h5>
        </div>
        <div class="card-body">
            <form method="POST" action="{{ route('admin.mahasiswa.store') }}">
                @csrf
                <div class="form-group col-xl-6 col-md-8 col-sm-12">
                    <div class="form-label-group">
                        <label class="form-label" for="uniq_id">NIM</label>
                    </div>
                    <div class="form-control-wrap">
                        <input id="uniq_id" type="text" class="form-control form-control-lg @error('uniq_id') is-invalid @enderror" name="uniq_id" value="{{ old('uniq_id') }}" required autofocus autocomplete="off">

                        @error('uniq_id')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group col-xl-8 col-md-12 col-sm-12">
                    <div class="form-label-group">
                        <label class="form-label" for="name">Nama</label>
                    </div>
                    <div class="form-control-wrap">
                        <input id="name" type="text" class="form-control form-control-lg @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autofocus autocomplete="off">

                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                <div class="form-group mt-5">
                    <button id="simpan" type="submit" class="btn btn-lg btn-primary">Simpan Data</button>
                </div>
            </form>

        </div>


    </div>

@endsection
