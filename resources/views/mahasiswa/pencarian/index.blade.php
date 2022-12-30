@extends('layouts.master')
@section('pencarian', 'active')

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title text-center">Pencarian Dosen Pembimbing</h4>
                <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 m-auto">
                <form method="POST" action="{{ route('mahasiswa.pencarian.hasilpencarian') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <h6>Bidang Keahlian</h6>
                                <div class="form-control-select">
                                    <select class="form-control" name="bidang_keahlian_id" required>
                                            <option value="" selected disabled>Pilih Bidang Keahlian</option>
                                        @foreach($bidang_keahlians as $item)
                                            <option value="{{ $item->id }}">{{ $item->kriteria }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <h6>Gender</h6>
                                <div class="form-control-select">
                                    <select class="form-control" name="gender" required>
                                        <option value="" selected disabled>Pilih Gender</option>
                                        <option value="1">Laki - laki</option>
                                        <option value="0">Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-5">
                            <div class="form-group">
                                <h6>Pendidikan Terakhir</h6>
                                <div class="form-control-select">
                                    <select class="form-control" name="pendidikan_terakhir" required>
                                        <option value="" selected disabled>Pendidikan Terakhir</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-2">
                            <div class="form-group">
                                <h6>Ketersediaan Waktu</h6>
                                <div class="form-control-select">
                                    <select class="form-control" name="ketersediaan_waktu" required>
                                        <option value="" selected disabled>Ketersediaan Waktu / Minggu</option>
                                        @for($i = 1; $i <= 5; $i++)
                                            <option value="{{ $i }}">{{ $i }} hari</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-5 text-center">
                            <button type="submit" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahDosen"><em class="icon ni ni-search"></em><span>Cari Dosen Pembimbing</span> </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
