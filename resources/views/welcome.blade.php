@include('layouts.main.head')
    <nav class="navbar shadow-sm p-3 mb-5 bg-body-tertiary">
        <div class="container">
            <div class="">
                <h3 class="mb-1">Si-Paris</h3>
                <h5 class="ff-base fw-medium text-soft">Sistem Penjadwalan Pra dan Skripsi dengan Algoritma Genetika</h5>
            </div>
            @if (Route::has('login'))
                <div class="hidden fixed top-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
                    @endif
                </div>
            @endif
        </div>
    </nav>
    <div class="container mt-5">
        <div class="card card-preview p-5 shadow">
            <h5 class="nk-block-title">Skripsi</h5>
            <table class="table table-hover">
            <thead>
                    <tr>
                        <th>#</th>
                        <th width="200px">Waktu / Tanggal / Ruangan</th>
                        <th>Nama</th>
                        <th>Pembimbing</th>
                        <th>Narasumber I</th>
                        <th>Narasumber II</th>
                        <th>Judul</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($skripsi as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ hari_jam($item->hari_jam) }} <br> {{  date('j \\ F Y', strtotime($item->tanggal)) }} <br> <span class="badge bg-primary rounded-pill">{{ $item->ruangan->label }}</span></td>
                        <td>{{ $item->peserta->name }} <br> ({{ $item->peserta->uniq_id }})</td>
                        <td>{{ $item->pembimbing->name }}</td>
                        <td>{{ $item->narsum->name }}</td>
                        <td>{{ $item->narsumNd->name }}</td>
                        <td>{{ $item->judul }}</td>
                    </tr>
                    @empty
                        <td class="text-center" colspan="8">Tidak ada jadwal</td>
                    @endforelse
                </tbody>
            </table>
        </div><!-- .card -->

        <div class="card card-preview p-5 shadow">
            <h5 class="nk-block-title">Pra Skripsi</h5>
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>#</th>
                        <th width="200px">Waktu / Tanggal / Ruangan</th>
                        <th>Nama</th>
                        <th>Pembimbing</th>
                        <th>Narasumber I</th>
                        <th>Narasumber II</th>
                        <th>Judul</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($pra_skripsi as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ hari_jam($item->hari_jam) }} <br> {{  date('j \\ F Y', strtotime($item->tanggal)) }} <br> <span class="badge bg-primary rounded-pill">{{ $item->ruangan->label }}</span></td>
                        <td>{{ $item->peserta->name }} <br> ({{ $item->peserta->uniq_id }})</td>
                        <td>{{ $item->pembimbing->name }}</td>
                        <td>{{ $item->narsum->name }}</td>
                        <td>{{ $item->narsumNd->name }}</td>
                        <td>{{ $item->judul }}</td>
                    </tr>
                    @empty
                        <td class="text-center" colspan="8">Tidak ada jadwal</td>
                    @endforelse
                </tbody>
            </table>
        </div><!-- .card -->
    </div>


@include('layouts.main.end')
