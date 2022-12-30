@extends('layouts.master')
@section('bidang-keahlian', 'active')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Bidang Keahlian</h4>
            <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
        </div>
    </div>
    <div class="row">
        <div class="col-md-8 mb-5">
            <form method="GET" action="{{ route('admin.bidang-keahlian.index') }}">
                <div class="row">
                    <div class="col-md-8">
                        <div class="form-group">
                            <div class="form-control-wrap">
                                <input type="text" class="form-control" name="search" value="{{ request()->search }}" placeholder="Bidang Keahlian">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                        <button type="submit" class="btn btn-secondary btn-dim"><em class="icon ni ni-search"></em><span>Cari Bidang Keahlian</span> </button>
                        </div>
                    </div>
                </div>    
            </form>
        </div>
        <div class="col-md-4 mb-5 text-end">
            <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#tambahBidang"><em class="icon ni ni-plus"></em><span>Tambah Bidang Keahlian</span> </button>
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
                    <th class="tb-odr-action">Aksi</th>
                </tr>
            </thead>
            <tbody class="tb-odr-body">
                @forelse($bidang_keahlians as $item)
                <tr class="tb-odr-item">
                    <td class="tb-odr-info">
                        <span class="tb-odr-id"><a href="#">{{ $loop->iteration }}</a></span>
                        <span class="amount">{{ $item->kriteria }}</span>
                    </td>
                    <td class="tb-odr-action">
                        <div class="dropdown">
                            <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                <ul class="link-list-plain">
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#editBidang_{{ $item->id }}" class="text-primary">View / Edit</a></li>
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#deleteBidang_{{ $item->id }}" class="text-danger">Hapus</a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
                @empty
                    <td class="text-center" colspan="4">Tidak ada data</td>
                @endforelse
            </tbody>
        </table>
    </div><!-- .card -->
</div><!-- nk-block -->

    <!-- component goes here -->
    @component('admin.layouts.modal.tambah-bidang')
    @endcomponent

    @foreach($bidang_keahlians as $item)
        @component('admin.layouts.modal.edit-bidang', [
            'item' => $item
        ])
        @endcomponent
    @endforeach

    @foreach($bidang_keahlians as $item)
        @component('admin.layouts.modal.delete-bidang', [
            'item' => $item, 
        ])
        @endcomponent
    @endforeach

@endsection