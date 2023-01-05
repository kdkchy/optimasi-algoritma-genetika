@extends('layouts.master')
@section('ruangan', 'active')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Ruangan</h4>
            <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
        </div>
    </div>

    <div class="card card-preview">
        <table class="table table-orders">
            <thead class="tb-odr-head">
                <tr class="tb-odr-item">
                    <th class="tb-odr-info">
                        <span class="tb-odr-id">#</span>
                        <span class="tb-odr-date d-none d-md-inline-block">Ruangan</span>
                    </th>
                    <th class="tb-odr-action">Total</th>
                    <!-- <th class="tb-odr-action">Aksi</th> -->
                </tr>
            </thead>
            <tbody class="tb-odr-body">
                @forelse($ruangan as $item)
                <tr class="tb-odr-item">
                    <td class="tb-odr-info">
                        <span class="tb-odr-id"><a href="#">{{ ($ruangan->currentpage()-1) * $ruangan->perpage() + $loop->index + 1 }}</a></span>
                        <span class="amount">{{ $item->label }}</span>
                    </td>
                    <td class="tb-odr-action">
                        {{ $item->total }}
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
        {!! $ruangan->appends($_GET)->links() !!}
    </div>
</div><!-- nk-block -->
@endsection
