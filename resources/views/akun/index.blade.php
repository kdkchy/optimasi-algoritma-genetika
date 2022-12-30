@extends('layouts.master')
@section('akun', 'active')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Akun</h4>
            <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
        </div>
    </div>

    <div class="card card-preview">
        <div class="m-2">
            <h4>{{ Auth::user()->name }}</h4>
            
        </div>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th width="250px" scope="row">Username</th>
                    <td>{{ Auth::user()->username }}</td>
                </tr>
                <tr>
                    <th scope="row">Role</th>
                    <td>{{ Auth::user()->role->role }}</td>
                </tr>
                <tr>
                    <th scope="row">Status Akun</th>
                    <td>{{ Auth::user()->status == 1 ? 'Aktif' : 'Nonaktif' }}</td>
                </tr>
            </tbody>
        </table>
    
    </div><!-- .card -->
</div><!-- nk-block -->
@endsection