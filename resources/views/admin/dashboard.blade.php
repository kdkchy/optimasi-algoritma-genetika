@extends('layouts.master')
@section('home', 'active')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Dashboard</h4>
            <h6 class="nk-block-title">Sistem Penjadwalan dengan Optimasi Algoritma Genetika</h6>
            <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
        </div>
    </div>

    <div class="card card-preview p-5">
        <h5 class="nk-block-title">Skripsi</h5>
        <table class="table table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Tanggal / Ruangan</th>
                    <th>Nama</th>
                    <th>Pembimbing</th>
                    <th>Narasumber</th>
                    <th>Judul</th>
                    <th>*</th>
                </tr>
            </thead>
            <tbody>
                <tr></tr>
            </tbody>
        </table>

    </div><!-- .card -->
</div><!-- nk-block -->
@endsection


