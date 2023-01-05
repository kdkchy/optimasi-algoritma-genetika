@extends('layouts.master')
@section('tentang', 'active')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Kadek Cahya</h4>
            <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
        </div>
    </div>

    <div class="card card-preview">
        <div class="m-2">
            <h5>Temukan saya di</h5>

        </div>
        <table class="table table-borderless">
            <tbody>
                <tr>
                    <th width="200px" scope="row">Email</th>
                    <td>kdkchy@gmail.com</td>
                </tr>
                <tr>
                    <th scope="row">LinkedIn</th>
                    <td><a href="https://www.linkedin.com/in/kdkchy/">Kadek Cahya</a></td>
                </tr>
                <tr>
                    <th scope="row">Github / Gitlab</th>
                    <td>@kdkchy</td>
                </tr>
                <tr>
                    <th scope="row">Sosial Media</th>
                    <td>@kdkchy</td>
                </tr>
            </tbody>
        </table>

    </div><!-- .card -->
</div><!-- nk-block -->
@endsection
