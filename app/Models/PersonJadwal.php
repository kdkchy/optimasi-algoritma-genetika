<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\DB;

class PersonJadwal extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'person_jadwal';
    protected $primaryKey = 'id';

    protected $fillable = [
        'person_id',
        'status',
        'hari',
        'jam',
        'hari_jam',
        'desk_kegiatan',
        'status_kepesertaan_id',
        'status_ujian_id',
    ];

    public function statusKepesertaan()
    {
        return $this->belongsTo(StatusKepesertaan::class, 'status_kepesertaan_id', 'id');
    }

    public function statusUjian()
    {
        return $this->belongsTo(StatusUjian::class, 'status_ujian_id', 'id');
    }

    public function insertJadwal($request){
        //senin
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[11] == null ? 0 : 1,
            'hari' => 1,
            'jam' => 1,
            'hari_jam' => 11,
            'desk_kegiatan' => $request[11] == null ? null : $request[11],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[12] == null ? 0 : 1,
            'hari' => 1,
            'jam' => 2,
            'hari_jam' => 12,
            'desk_kegiatan' => $request[12] == null ? null : $request[12],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[13] == null ? 0 : 1,
            'hari' => 1,
            'jam' => 3,
            'hari_jam' => 13,
            'desk_kegiatan' => $request[13] == null ? null : $request[13],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[14] == null ? 0 : 1,
            'hari' => 1,
            'jam' => 4,
            'hari_jam' => 14,
            'desk_kegiatan' => $request[14] == null ? null : $request[14],
            'dinas' => 0,
        ]);

        //selasa
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[21] == null ? 0 : 1,
            'hari' => 2,
            'jam' => 1,
            'hari_jam' => 21,
            'desk_kegiatan' => $request[21] == null ? null : $request[21],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[22] == null ? 0 : 1,
            'hari' => 2,
            'jam' => 2,
            'hari_jam' => 22,
            'desk_kegiatan' => $request[22] == null ? null : $request[22],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[23] == null ? 0 : 1,
            'hari' => 2,
            'jam' => 3,
            'hari_jam' => 23,
            'desk_kegiatan' => $request[23] == null ? null : $request[23],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[24] == null ? 0 : 1,
            'hari' => 2,
            'jam' => 4,
            'hari_jam' => 24,
            'desk_kegiatan' => $request[24] == null ? null : $request[24],
            'dinas' => 0,
        ]);

        //rabu
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[31] == null ? 0 : 1,
            'hari' => 3,
            'jam' => 1,
            'hari_jam' => 31,
            'desk_kegiatan' => $request[31] == null ? null : $request[31],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[32] == null ? 0 : 1,
            'hari' => 3,
            'jam' => 2,
            'hari_jam' => 32,
            'desk_kegiatan' => $request[32] == null ? null : $request[32],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[33] == null ? 0 : 1,
            'hari' => 3,
            'jam' => 3,
            'hari_jam' => 33,
            'desk_kegiatan' => $request[33] == null ? null : $request[33],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[34] == null ? 0 : 1,
            'hari' => 3,
            'jam' => 4,
            'hari_jam' => 34,
            'desk_kegiatan' => $request[34] == null ? null : $request[34],
            'dinas' => 0,
        ]);

        //kamis
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[41] == null ? 0 : 1,
            'hari' => 4,
            'jam' => 1,
            'hari_jam' => 41,
            'desk_kegiatan' => $request[41] == null ? null : $request[41],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[42] == null ? 0 : 1,
            'hari' => 4,
            'jam' => 2,
            'hari_jam' => 42,
            'desk_kegiatan' => $request[42] == null ? null : $request[42],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[43] == null ? 0 : 1,
            'hari' => 4,
            'jam' => 3,
            'hari_jam' => 43,
            'desk_kegiatan' => $request[43] == null ? null : $request[43],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[44] == null ? 0 : 1,
            'hari' => 4,
            'jam' => 4,
            'hari_jam' => 44,
            'desk_kegiatan' => $request[44] == null ? null : $request[44],
            'dinas' => 0,
        ]);

        //jumat
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[51] == null ? 0 : 1,
            'hari' => 5,
            'jam' => 1,
            'hari_jam' => 51,
            'desk_kegiatan' => $request[51] == null ? null : $request[51],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[52] == null ? 0 : 1,
            'hari' => 5,
            'jam' => 2,
            'hari_jam' => 52,
            'desk_kegiatan' => $request[52] == null ? null : $request[52],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[53] == null ? 0 : 1,
            'hari' => 5,
            'jam' => 3,
            'hari_jam' => 53,
            'desk_kegiatan' => $request[53] == null ? null : $request[53],
            'dinas' => 0,
        ]);
        DB::table('person_jadwal')->insert([
            'person_id' => $request->person_id,
            'status' => $request[54] == null ? 0 : 1,
            'hari' => 5,
            'jam' => 4,
            'hari_jam' => 54,
            'desk_kegiatan' => $request[54] == null ? null : $request[54],
            'dinas' => 0,
        ]);
    }

    public function updateTerjadwalkan($request){
        $isRemove = false;
        DB::beginTransaction();
        try {
            $update_peserta = self::updateJadwal(
                $isRemove,
                $request['peserta_id'],
                $request['hari_jam'],
                3,
                $request['status_ujian_id'],
            );

            $update_pembimbing = self::updateJadwal(
                $isRemove,
                $request['pembimbing_id'],
                $request['hari_jam'],
                2,
                $request['status_ujian_id'],
            );

            $update_narsum = self::updateJadwal(
                $isRemove,
                $request['narsum_id'],
                $request['hari_jam'],
                1,
                $request['status_ujian_id'],
            );

            if($request['narsum_nd_id'] != 1) {
                $update_narsum_nd = self::updateJadwal(
                    $isRemove,
                    $request['narsum_nd_id'],
                    $request['hari_jam'],
                    1,
                    $request['status_ujian_id'],
                );
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            // session()->flash('danger','Penambahan Gagal');
        }
    }

    public function removeTerjadwalkan($request){
        $isRemove = true;
        DB::beginTransaction();
        try {
            $update_peserta = self::updateJadwal(
                $isRemove,
                $request['peserta_id'],
                $request['hari_jam'],
                null,
                null,
            );

            $update_pembimbing = self::updateJadwal(
                $isRemove,
                $request['pembimbing_id'],
                $request['hari_jam'],
                null,
                null,
            );

            $update_narsum = self::updateJadwal(
                $isRemove,
                $request['narsum_id'],
                $request['hari_jam'],
                null,
                null,
            );

            if($request['narsum_nd_id'] != 1) {
                $update_narsum_nd = self::updateJadwal(
                    $isRemove,
                    $request['narsum_nd_id'],
                    $request['hari_jam'],
                    null,
                    null,
                );
            }
            DB::commit();
        } catch (\Exception $e) {
            DB::rollback();
            session()->flash('danger','Penambahan Gagal');
        }
    }

    public function updateJadwal($isRemove, $id, $hari_jam, $status_peserta, $status_ujian){
        $status = 1;

        if($isRemove) {
            $search_jadwal = DB::table('person_jadwal')
            ->where('person_id', $id)
            ->where('hari_jam', $hari_jam)
            ->first();

            if($search_jadwal->desk_kegiatan == null) {
                $status = 0;
            }
        }

        $update = DB::table('person_jadwal')
            ->where('person_id', $id)
            ->where('hari_jam', $hari_jam)
            ->update([
                'status' => $status,
                'status_kepesertaan_id' => $status_peserta,
                'status_ujian_id' => $status_ujian,
            ]);

        if($update){
            return true;
        } else {
            return false;
        }
    }
}
