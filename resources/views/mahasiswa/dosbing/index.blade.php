@extends('layouts.master')
@section('dosbing', 'active')

@section('content')
<div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Daftar Dosen Pembimbing</h4>
                <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mb-2">
                <form method="GET" action="{{ route('mahasiswa.dosbing.index') }}">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="search" value="{{ request()->search }}" placeholder="Cari Dosen, Bidang Keahlian">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <button type="submit" class="btn btn-secondary btn-dim"><em class="icon ni ni-search"></em><span>Cari Dosen</span> </button>
                            </div>
                        </div>
                    </div>    
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3 mb-5">
                <form id="bidang-keahlian" method="GET" action="{{ route('mahasiswa.dosbing.index') }}">
                    <div class="form-group">
                        <div class="form-control-select">
                            <select class="form-control" name="bidang_keahlian_id" 
                                onchange="event.preventDefault();
                                document.getElementById('bidang-keahlian').submit();" required>
                                    <option value="" selected disabled>Pilih Bidang Keahlian</option>
                                @foreach($bidang_keahlians as $item)
                                    <option value="{{ $item->id }}" {{ request()->bidang_keahlian_id == $item->id ? 'selected' : '' }}>{{ $item->kriteria }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-1 mb-5">
                <form method="GET" action="{{ route('mahasiswa.dosbing.index') }}">
                    <div class="col-md-4">
                        <div class="form-group">
                        <input type="hidden" class="form-control" name="nama" value="{{ request()->nama == 'asc' ? 'desc' : 'asc' }}">
                        <button type="submit" class="{{ isset(request()->nama) ? 'btn btn-light' : 'btn btn-dim btn-outline-light' }}"><em class="icon ni {{ request()->nama == 'asc' ? 'ni-caret-up' : 'ni-caret-down' }}"></em><span>Nama</span> </button>
                        </div>
                    </div> 
                </form>
            </div>
            <div class="col-md-1 mb-5">
                <form method="GET" action="{{ route('mahasiswa.dosbing.index') }}">
                    <div class="col-md-4">
                        <div class="form-group">
                        <input type="hidden" class="form-control" name="gender" value="{{ request()->gender == 'asc' ? 'desc' : 'asc' }}">
                        <button type="submit" class="{{ isset(request()->gender) ? 'btn btn-light' : 'btn btn-dim btn-outline-light' }}"><em class="icon ni {{ request()->gender == 'asc' ? 'ni-caret-up' : 'ni-caret-down' }}"></em><span>Gender</span> </button>
                        </div>
                    </div> 
                </form>
            </div>
        </div>
        
        <div class="card card-preview">
            <table class="table table-orders">
                <thead class="tb-odr-head">
                    <tr class="tb-odr-item">
                        <th class="tb-odr-info">
                            <span class="tb-odr-id">#</span>
                            <span class="tb-odr-date d-none d-md-inline-block">Nama</span>
                        </th>
                        <th class="tb-odr-amount">
                            <span class="tb-odr-total">Gender</span>
                            <span class="tb-odr-status d-none d-md-inline-block">Bidang Keahlian</span>
                        </th>
                    </tr>
                </thead>
                <tbody class="tb-odr-body">
                    @forelse($dosen_pembimbings as $item)
                    <tr class="tb-odr-item">
                        <td class="tb-odr-info">
                            <span class="tb-odr-id"><a href="#">{{ $loop->iteration }}</a></span>
                            <span class="amount">{{ $item->nama }}</span>
                        </td>
                        <td class="tb-odr-amount">
                            <span class="tb-odr-total">
                                <span class="amount">{{ konversi_gender($item->gender) }}</span>
                            </span>
                            <span class="tb-odr-status">
                                <span class="amount">{{ $item->kriteria }}</span>
                            </span>
                        </td>
                    </tr>
                    @empty
                        <td class="text-center" colspan="4">Tidak ada data</td>
                    @endforelse
                </tbody>
            </table>
        </div><!-- .card -->
        <br>
        <div class="d-flex justify-content-center">
            {!! $dosen_pembimbings->appends($_GET)->links() !!}
        </div>
    </div><!-- nk-block -->
@endsection