@extends('layouts.master')
@section('mahasiswa', 'active')

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="nk-block-head">
            <div class="nk-block-head-content">
                <h4 class="nk-block-title">Daftar Mahasiswa</h4>
                <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 mb-5">
                <form method="GET" action="{{ route('admin.mahasiswa.index') }}">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <div class="form-control-wrap">
                                    <input type="text" class="form-control" name="search" value="{{ request()->search }}" placeholder="Cari Mahasiswa">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                            <button type="submit" class="btn btn-secondary btn-dim"><em class="icon ni ni-search"></em><span>Cari</span> </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-md-4 mb-5 text-end">
                <a href="{{ route('admin.mahasiswa.create') }}" class="btn btn-primary" ><em class="icon ni ni-plus"></em><span>Tambah Mahasiswa</span> </a>
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
                        <!-- <th class="tb-odr-action">Jadwal</th> -->
                        <th class="tb-odr-action">Aksi</th>
                    </tr>
                </thead>
                <tbody class="tb-odr-body">
                    @forelse($persons as $item)
                    <tr class="tb-odr-item">
                        <td class="tb-odr-info">
                            <span class="tb-odr-id"><a href="#">{{ ($persons->currentpage()-1) * $persons->perpage() + $loop->index + 1 }}</a></span>
                            <span class="amount">{{ $item->name }}</span>
                        </td>
                        <!-- <td>
                            belum punya jadwal
                        </td> -->
                        <td class="tb-odr-action">
                            <div class="dropdown">
                                <a class="text-soft dropdown-toggle btn btn-icon btn-trigger" data-bs-toggle="dropdown" data-offset="-8,0"><em class="icon ni ni-more-h"></em></a>
                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-xs">
                                    <ul class="link-list-plain">
                                        <li><a href="{{ route('admin.mahasiswa.detail', ['person' => $item->id]) }}" class="text-primary">View</a></li>
                                        <li><a href="#" data-bs-toggle="modal" data-bs-target="#deleteMahasiswa_{{ $item->id }}" class="text-danger">Hapus</a></li>
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
        <br>
        <div class="d-flex justify-content-center">
            {!! $persons->appends($_GET)->links() !!}
        </div>
    </div><!-- nk-block -->

    <!-- component goes here -->
    {{-- @foreach($list_mahasiswa as $item)
        @component('admin.layouts.modal.edit-dosen', [
            'item' => $item,
            'bidang_keahlians' => $bidang_keahlians
        ])
        @endcomponent
    @endforeach
    --}}

    @foreach($persons as $item)
        @component('admin.components.modal.person.deleteMahasiswa', [
            'item' => $item,
        ])
        @endcomponent
    @endforeach

@endsection
