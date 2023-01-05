@extends('layouts.master')
@section('perancangan', 'active')

@section('content')
<div class="nk-block nk-block-lg">
    <div class="nk-block-head">
        <div class="nk-block-head-content">
            <h4 class="nk-block-title">Setup Jadwal</h4>
            <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
        </div>
    </div>

    @if($errors->any())
    <div class="card p-2">
        <ul class="list list-sm list-cross">
            {!! implode('', $errors->all('<li class="text-danger">:message</li>')) !!}
        </ul>
    </div>
    @endif

    <div class="card card-preview">
        <div class="row mt-2" >
            <div class="text-center col-3">
                <p class="mb-0">Mahasiswa</p>
                <h5 class="title">{{ $pengisi->peserta->name }}</h5>
            </div>
            <div class="text-center col-3">
                <p class="mb-0">Pembimbing</p>
                <h5 class="title">{{ $pengisi->pembimbing->name }}</h5>
            </div>
            <div class="text-center col-3">
                <p class="mb-0">Narasumber I</p>
                <h5 class="title">{{ $pengisi->narsum->name }}</h5>
            </div>
            <div class="text-center col-3">
                <p class="mb-0">Narasumber II</p>
                <h5 class="title">{{ $pengisi->narsumNd->name }}</h5>
            </div>
        </div>
        <hr>
        <div id="accordion" class="accordion">
            @foreach($jadwal_pengganti as $item)
            <div class="accordion-item">
                <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#accordion-item-{{ $loop->iteration }}">
                    <!-- <h6 class="title">What are some of the benefits of receiving my bill electronically?</h6> -->
                    <h5 class="title text-center">{{ hari_jam($item->hari_jam) }}</h5>
                    <div class="row">
                        <div class="text-center col-3">
                            {!! $item->jadwalPeserta->status == 0 ? '' : '<span class="badge bg-outline-warning">'.$item->jadwalPeserta->desk_kegiatan.'</span>' !!}
                            {!! $item->jadwalPeserta->dinas == 0 ? '' : '<span class="badge bg-outline-danger">Dinas - tidak ditempat</span>' !!}
                        </div>
                        <div class="text-center col-3">
                            {!! $item->jadwalPembimbing->status == 0 ? '' : '<span class="badge bg-outline-warning">'.$item->jadwalPembimbing->desk_kegiatan.'</span>' !!}
                            {!! $item->jadwalPembimbing->dinas == 0 ? '' : '<span class="badge bg-outline-danger">Dinas - tidak ditempat</span>' !!}
                        </div>
                        <div class="text-center col-3">
                            {!! $item->jadwalNarsum->status == 0 ? '' : '<span class="badge bg-outline-warning">'.$item->jadwalNarsum->desk_kegiatan.'</span>' !!}
                            {!! $item->jadwalNarsum->dinas == 0 ? '' : '<span class="badge bg-outline-danger">Dinas - tidak ditempat</span>' !!}
                        </div>
                        <div class="text-center col-3">
                            {!! $item->jadwalNarsumNd->status == 0 ? '' : '<span class="badge bg-outline-warning">'.$item->jadwalNarsumNd->desk_kegiatan.'</span>' !!}
                            {!! $item->jadwalNarsumNd->dinas == 0 ? '' : '<span class="badge bg-outline-danger">Dinas - tidak ditempat</span>' !!}
                        </div>
                    </div>
                    <!-- <span class="accordion-icon"></span> -->
                </a>
                <div class="accordion-body collapse" id="accordion-item-{{ $loop->iteration }}" data-bs-parent="#accordion" >
                    <div class="accordion-inner">
                        <form action="{{ route('admin.perancangan.store') }}" method="post">
                            @csrf
                            <input type="hidden" value="{{ request()->generated_id }}" name="generated_id">
                            <input type="hidden" value="{{ $pengisi->peserta->id }}" name="peserta_id">
                            <input type="hidden" value="{{ $pengisi->pembimbing->id }}" name="pembimbing_id">
                            <input type="hidden" value="{{ $pengisi->narsum->id }}" name="narsum_id">
                            <input type="hidden" value="{{ $pengisi->narsumNd->id }}" name="narsum_nd_id">
                            <input type="hidden" value="{{ $item->hari_jam }}" name="hari_jam">
                            <div class="row">
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-label" for="default-06">Ruangan</label>
                                        <div class="form-control-wrap ">
                                            <div class="form-control-select">
                                                <select class="form-control" id="default-06" name="ruangan_id">
                                                    <option selected disabled>Pilih Ruangan</option>
                                                    @foreach($item->ruangan as $rng)
                                                        <option value="{{$rng->id}}">{{ $rng->label }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="form-group">
                                        <label class="form-label" for="default-textarea">Judul</label>
                                        <div class="form-control-wrap">
                                            <textarea class="form-control no-resize" name="judul"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-label">Tanggal</label>
                                        <div class="form-control-wrap">
                                            <div class="form-icon form-icon-left">
                                                <em class="icon ni ni-calendar"></em>
                                            </div>
                                            <input type="text" id="tanggal" name="tanggal" class="form-control date-picker" data-date-format="yyyy-mm-dd">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-1">
                                    <div class="form-group">
                                        <label class="form-label">Status</label>
                                        <div>
                                            <div class="custom-control custom-control-sm custom-radio checked">
                                                <input type="radio" class="custom-control-input" value="1" name="status_ujian_id" id="status-skripsi-{{ $loop->iteration }}">
                                                <label class="custom-control-label" for="status-skripsi-{{ $loop->iteration }}">Skripsi</label>
                                            </div>
                                            <div class="custom-control custom-control-sm custom-radio checked">
                                                <input type="radio" class="custom-control-input" value="2" name="status_ujian_id" id="status-pra-{{ $loop->iteration }}">
                                                <label class="custom-control-label" for="status-pra-{{ $loop->iteration }}">Pra Skripsi</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-2">
                                    <div class="form-group">
                                        <label class="form-label"></label>
                                        <div>
                                            <button type="submit" class="btn btn-primary">Simpan Jadwal</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

    </div><!-- .card -->
</div><!-- nk-block -->
@endsection


@section('script')
    <!-- <script>
        $('#tanggal').datepicker({
            todayBtn: true,
            clearBtn: true,
            daysOfWeekHighlighted: "5",
            autoclose: true
        });
    </script> -->
@endsection
