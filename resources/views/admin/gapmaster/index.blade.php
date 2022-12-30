@extends('layouts.master')
@section('gap-master', 'active')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Gap Master</h4>
            <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
        </div>
    </div>

    <div class="card card-preview">
    <table class="table table-hover">
        <thead>
            <tr>
                <th scope="col" class="text-end">Selisih</th>
                <th scope="col" class="text-end">Bobot Nilai</th>
                <th width="50px"></th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead>
        <tbody>
            @foreach($gap_master as $item)
            <tr>
                <td class="text-end">{{ $item->selisih }}</td>
                <td class="text-end">{{ $item->bobot_nilai }}</td>
                <th width="50px"></th>
                <td>{{ $item->keterangan }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    </div><!-- .card -->
</div><!-- nk-block -->
@endsection