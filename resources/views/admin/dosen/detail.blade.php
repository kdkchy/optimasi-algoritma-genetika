@extends('layouts.master')
@section('dosen', 'active')

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
                <h4 class="nk-block-title">Detail Dosen</h4>
            </div>
            <div class="col-md-4 mb-2 text-end">
                <a href="{{ route('admin.dosen.index') }}" class="btn btn-secondary" ><span>Kembali</span> </a>
                <a href="{{ route('admin.dosen.index') }}" class="btn btn-warning" ><span>Perbarui Data</span> </a>
                <a href="{{ route('admin.dosen.index') }}" class="btn btn-danger" ><span>Hapus</span> </a>
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
                        <th scope="row">NIP</th>
                        <td>{{ $person->uniq_id }}</td>
                    </tr>
                </tbody>
            </table>
        </div><!-- .card -->
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
                                <div>{{ $jadwal[11]->desk_kegiatan ? $jadwal[11]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[11]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[11]->statusUjian ? $jadwal[11]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[11]->statusKepesertaan ? $jadwal[11]->statusKepesertaan->label : ' ' }}</span></div>
                                <div class="text-end" style=""><button class="text-primary btn btn-icon btn-trigger" ><em class="icon ni ni-pen"></em></button></div>
                            </td>
                            <td class="@if($jadwal[21]->status) bg-light @endif">
                                <div>{{ $jadwal[21]->desk_kegiatan ? $jadwal[21]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[21]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[21]->statusUjian ? $jadwal[21]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[21]->statusKepesertaan ? $jadwal[21]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[31]->status) bg-light @endif">
                                <div>{{ $jadwal[31]->desk_kegiatan ? $jadwal[31]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[31]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[31]->statusUjian ? $jadwal[31]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[31]->statusKepesertaan ? $jadwal[31]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[41]->status) bg-light @endif">
                                <div>{{ $jadwal[41]->desk_kegiatan ? $jadwal[41]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[41]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[41]->statusUjian ? $jadwal[41]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[41]->statusKepesertaan ? $jadwal[41]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[51]->status) bg-light @endif">
                                <div>{{ $jadwal[51]->desk_kegiatan ? $jadwal[51]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[51]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[51]->statusUjian ? $jadwal[51]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[51]->statusKepesertaan ? $jadwal[51]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th height="100px" class="bg-info" scope="row">10:00</th>
                            <td class="@if($jadwal[12]->status) bg-light @endif">
                                <div>{{ $jadwal[12]->desk_kegiatan ? $jadwal[12]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[12]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[12]->statusUjian ? $jadwal[12]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[12]->statusKepesertaan ? $jadwal[12]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[22]->status) bg-light @endif">
                                <div>{{ $jadwal[22]->desk_kegiatan ? $jadwal[22]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[22]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[22]->statusUjian ? $jadwal[22]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[22]->statusKepesertaan ? $jadwal[22]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[32]->status) bg-light @endif">
                                <div>{{ $jadwal[32]->desk_kegiatan ? $jadwal[32]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[32]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[32]->statusUjian ? $jadwal[32]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[32]->statusKepesertaan ? $jadwal[32]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[42]->status) bg-light @endif">
                                <div>{{ $jadwal[42]->desk_kegiatan ? $jadwal[42]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[42]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[42]->statusUjian ? $jadwal[42]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[42]->statusKepesertaan ? $jadwal[42]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[52]->status) bg-light @endif">
                                <div>{{ $jadwal[52]->desk_kegiatan ? $jadwal[52]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[52]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[52]->statusUjian ? $jadwal[52]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[52]->statusKepesertaan ? $jadwal[52]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th height="100px" class="bg-info" scope="row">13:00</th>
                            <td class="@if($jadwal[13]->status) bg-light @endif">
                                <div>{{ $jadwal[13]->desk_kegiatan ? $jadwal[13]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[13]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[13]->statusUjian ? $jadwal[13]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[13]->statusKepesertaan ? $jadwal[12]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[23]->status) bg-light @endif">
                                <div>{{ $jadwal[23]->desk_kegiatan ? $jadwal[23]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[23]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[23]->statusUjian ? $jadwal[23]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[23]->statusKepesertaan ? $jadwal[23]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[33]->status) bg-light @endif">
                                <div>{{ $jadwal[33]->desk_kegiatan ? $jadwal[33]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[33]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[33]->statusUjian ? $jadwal[33]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[33]->statusKepesertaan ? $jadwal[33]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[43]->status) bg-light @endif">
                                <div>{{ $jadwal[43]->desk_kegiatan ? $jadwal[43]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[43]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[43]->statusUjian ? $jadwal[43]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[43]->statusKepesertaan ? $jadwal[43]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[53]->status) bg-light @endif">
                                <div>{{ $jadwal[53]->desk_kegiatan ? $jadwal[53]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[53]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[53]->statusUjian ? $jadwal[53]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[53]->statusKepesertaan ? $jadwal[53]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                        </tr>
                        <tr>
                            <th height="100px" class="bg-info" scope="row">15:00</th>
                            <td class="@if($jadwal[14]->status) bg-light @endif">
                                <div>{{ $jadwal[14]->desk_kegiatan ? $jadwal[14]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[14]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[14]->statusUjian ? $jadwal[14]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[14]->statusKepesertaan ? $jadwal[14]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[24]->status) bg-light @endif">
                                <div>{{ $jadwal[24]->desk_kegiatan ? $jadwal[24]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[24]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[24]->statusUjian ? $jadwal[24]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[24]->statusKepesertaan ? $jadwal[24]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[34]->status) bg-light @endif">
                                <div>{{ $jadwal[34]->desk_kegiatan ? $jadwal[34]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[34]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[34]->statusUjian ? $jadwal[34]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[34]->statusKepesertaan ? $jadwal[34]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[44]->status) bg-light @endif">
                                <div>{{ $jadwal[44]->desk_kegiatan ? $jadwal[44]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[44]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[44]->statusUjian ? $jadwal[44]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[44]->statusKepesertaan ? $jadwal[44]->statusKepesertaan->label : ' ' }}</span></div>
                            </td>
                            <td class="@if($jadwal[54]->status) bg-light @endif">
                                <div>{{ $jadwal[54]->desk_kegiatan ? $jadwal[54]->desk_kegiatan : '-' }}</div>
                                <div><span class="badge bg-primary rounded-pill">{{ $jadwal[54]->statusUjian ? 'Ujian' : ''}} {{ $jadwal[54]->statusUjian ? $jadwal[54]->statusUjian->label : '' }}</span></div>
                                <div><span class="badge bg-warning rounded-pill">{{ $jadwal[54]->statusKepesertaan ? $jadwal[54]->statusKepesertaan->label : ' ' }}</span></div>
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
