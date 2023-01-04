@extends('layouts.master')
@section('perancangan', 'active')

@section('style')

@endsection

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Perancangan</h4>
            <p>Lengkapi data berikut untuk pencarian jadwal</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <form method="POST" action="{{ route('admin.perancangan.rancang') }}">
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <h6>Mahasiswa</h6>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" data-search="on" name="mahasiswa" required>
                                        <option value="" selected disabled>Pilih Mahasiswa</option>
                                    @foreach($mahasiswa as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6>Pembimbing</h6>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" data-search="on" name="pembimbing" required>
                                        <option value="" selected disabled>Pilih Pembimbing</option>
                                    @foreach($pembimbing as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6>Narasumber I</h6>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" data-search="on" name="narsum_1" required>
                                        <option value="" selected disabled>Pilih Narasumber I</option>
                                    @foreach($narsum_1 as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <h6>Narasumber II</h6>
                            <div class="form-control-wrap">
                                <select class="form-select js-select2" data-search="on" name="narsum_2" required>
                                        <option value="" selected disabled>Pilih Narasumber II</option>
                                    @foreach($narsum_2 as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 mt-5">
                        <button type="submit" class="btn btn-primary"><em class="icon ni ni-search"></em><span>Cari Jadwal</span> </button>
                    </div>
                </div>
            </form>
        </div>
    </div>

</div><!-- nk-block -->
@endsection

@section('script')

@endsection
