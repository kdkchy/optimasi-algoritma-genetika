@extends('layouts.master')
@section('mahasiswa', 'active')

@section('style')
<style>
textarea {
    /* border: none; */
    outline: none;
    resize: none;
}
</style>
@endsection

@section('content')
    <div class="nk-block nk-block-lg">
        <div class="row">
            <div class="col-md-8 mb-2">
                <h4 class="nk-block-title">Detail Mahasiswa</h4>
            </div>
            <div class="col-md-4 mb-2 text-end">
                <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-secondary" ><span>Kembali</span> </a>
                <!-- <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-warning" ><span>Perbarui Data</span> </a>
                <a href="{{ route('admin.mahasiswa.index') }}" class="btn btn-danger" ><span>Hapus</span> </a> -->
            </div>
        </div>

        <div class="card card-preview">
            <table class="table table-borderless">
                <tbody>
                    <tr>
                        <th width="250px" scope="row">Nama</th>
                        <td>{{ $person->name }}</td>
                    </tr>
                    <tr>
                        <th scope="row">NIM</th>
                        <td>{{ $person->uniq_id }}</td>
                    </tr>
                </tbody>
            </table>
        </div><!-- .card -->
        @if($errors->any())
        <div class="card p-2">
            <ul class="list list-sm list-cross">
                {!! implode('', $errors->all('<li class="text-danger">:message</li>')) !!}
            </ul>
        </div>
        @endif
        <div class="mt-5 mb-2">
            <div class="row">
                <div class="col-md-8">
                    <h5 class="nk-block-title">Jadwal</h5>
                    @if(!$jadwal)
                        <p>Buat jadwal terlebih dahulu</p>
                    @endif
                </div>
                <div class="col-md-4 text-end">
                    @if(!$jadwal)
                        <a href="{{ route('admin.jadwal.store') }}"
                            onclick="event.preventDefault();
                            document.getElementById('jadwal-form').submit();"
                        class="btn btn-primary" ><span>Buat Jadwal</span> </a>
                    @endif
                </div>
            </div>
        </div>

        @if(!$jadwal)
            <div class="card card-preview">
                <form action="{{ route('admin.jadwal.store') }}" id="jadwal-form" method="POST">
                    @csrf
                    <input type="hidden" name="person_id" value="{{ $person->id }}" >
                    <input type="hidden" name="status_person_id" value="{{ $person->status_person_id }}" >
                    <table class="table table-bordered">
                        <tbody>
                            <tr>
                                <th scope="row" class="bg-info">/</th>
                                <th width="280px" class="bg-info">Senin</th>
                                <th width="280px" class="bg-info">Selasa</th>
                                <th width="280px" class="bg-info">Rabu</th>
                                <th width="280px" class="bg-info">Kamis</th>
                                <th width="280px" class="bg-info">Jumat</th>
                            </tr>
                            <tr>
                                <th height="100px" class="bg-info" scope="row">08:00</th>
                                <td>
                                    <textarea name="11" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="21" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="31" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="41" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="51" id="" cols="30" rows="3"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th height="100px" class="bg-info" scope="row">10:00</th>
                                <td>
                                    <textarea name="12" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="22" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="32" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="42" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="52" id="" cols="30" rows="3"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th height="100px" class="bg-info" scope="row">13:00</th>
                                <td>
                                    <textarea name="13" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="23" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="33" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="43" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="53" id="" cols="30" rows="3"></textarea>
                                </td>
                            </tr>
                            <tr>
                                <th height="100px" class="bg-info" scope="row">15:00</th>
                                <td>
                                    <textarea name="14" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="24" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="34" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="44" id="" cols="30" rows="3"></textarea>
                                </td>
                                <td>
                                    <textarea name="54" id="" cols="30" rows="3"></textarea>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div><!-- .card -->
        @else
            <div class="card card-preview">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <th scope="row" class="bg-info">/</th>
                            <th width="280px" class="bg-info">Senin</th>
                            <th width="280px" class="bg-info">Selasa</th>
                            <th width="280px" class="bg-info">Rabu</th>
                            <th width="280px" class="bg-info">Kamis</th>
                            <th width="280px" class="bg-info">Jumat</th>
                        </tr>
                        <tr>
                            <th height="100px" class="bg-info" scope="row">08:00</th>
                            <td class="@if($jadwal[11]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[11],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[21]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[21],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[31]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[31],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[41]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[41],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[51]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[51],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                        </tr>
                        <tr>
                            <th height="100px" class="bg-info" scope="row">10:00</th>
                            <td class="@if($jadwal[12]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[12],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[22]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[22],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[32]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[32],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[42]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[42],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[52]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[52],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                        </tr>
                        <tr>
                            <th height="100px" class="bg-info" scope="row">13:00</th>
                            <td class="@if($jadwal[13]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[13],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[23]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[23],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[33]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[33],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[43]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[43],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[53]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[53],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                        </tr>
                        <tr>
                            <th height="100px" class="bg-info" scope="row">15:00</th>
                            <td class="@if($jadwal[14]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[14],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[24]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[24],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[34]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[34],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[44]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[44],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                            <td class="@if($jadwal[54]->status) bg-light @endif">
                                @component('admin.components.modal.jadwal.daily', [
                                    'jadwal' => $jadwal[54],
                                    'person' => $person
                                ])
                                @endcomponent
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div><!-- .card -->
        @endif
    </div><!-- nk-block -->

    <!-- component goes here -->
    {{--

    @foreach($list_mahasiswa as $item)
        @component('admin.layouts.modal.delete-dosen', [
            'item' => $item,
        ])
        @endcomponent
    @endforeach --}}

@endsection
