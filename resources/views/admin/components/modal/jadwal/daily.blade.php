<div>{{ $jadwal->desk_kegiatan ? $jadwal->desk_kegiatan : '-' }}</div>
<div><span class="badge bg-primary rounded-pill">{{ $jadwal->statusUjian ? 'Ujian' : ''}} {{ $jadwal->statusUjian ? $jadwal->statusUjian->label : '' }}</span></div>
<div><span class="badge bg-warning rounded-pill">{{ $jadwal->statusKepesertaan ? $jadwal->statusKepesertaan->label : ' ' }}</span></div>
<div><span class="badge bg-info rounded-pill">{{ $jadwal->dinas == 1 ? 'Dinas Keluar' : ' ' }}</span></div>
@if( !$jadwal->statusUjian )
    <div class="text-end" style=""><a href="#" data-bs-toggle="modal" data-bs-target="#editJadwal_{{ $jadwal->id }}" class="text-primary btn btn-icon btn-trigger" ><em class="icon ni ni-pen"></em></a></div>
@endif


@if(!$jadwal->status_ujian_id)
    @component('admin.components.modal.jadwal.edit', [
        'item' => $jadwal,
        'person' => $person
    ])
    @endcomponent
@endif

