@extends('layouts.master')
@section('ideal-master', 'active')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Ideal Master</h4>
            <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
        </div>
    </div>

    <div class="card card-preview">
    <table class="table table-hover">
        <tbody>
            <tr>
                <th width="100px" scope="row">1</th>
                <td>Bidang Keahlian</td>
                <td>{{ $ideal_master->bidang_keahlian }}</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Pendidikan Terakhir</td>
                <td>{{ $ideal_master->pendidikan_terakhir }}</td>
            </tr>
            <tr>
                <th scope="row">3</th>
                <td>Jml. Kelulusan Mahasiswa</td>
                <td>{{ $ideal_master->mahasiswa_lulus }}</td>
            </tr>
            <tr>
                <th scope="row">4</th>
                <td>Ketersediaan Waktu / Minggu</td>
                <td>{{ $ideal_master->ketersediaan_waktu }}</td>
            </tr>
            <tr>
                <th scope="row">5</th>
                <td>Gender</td>
                <td>{{ $ideal_master->gender }}</td>
            </tr>
        </tbody>
    </table>
    </div><!-- .card -->
</div><!-- nk-block -->
@endsection