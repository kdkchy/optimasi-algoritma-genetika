@extends('layouts.master')
@section('bantuan', 'active')

@section('content')
<div class="nk-block nk-block-lg">
    <!-- <div class="nk-block-head">
        <div class="nk-block-head-content"> -->
            <!-- <h4 class="nk-block-title">Bantuan</h4> -->
            <!-- <p>The following table can be use for <strong class="text-primary">order history, invoice listing</strong> related transaction.</p> -->
        <!-- </div>
    </div> -->

    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="content-page wide-sm m-auto">
                        <div class="nk-block-head nk-block-head-lg wide-xs mx-auto">
                            <div class="nk-block-head-content text-center">
                                <div class="nk-block-head-sub"><span>FAQs</span></div>
                                <h2 class="nk-block-title fw-normal">Frequently Asked Questions</h2>
                            </div>
                        </div><!-- .nk-block-head -->
                        <div class="nk-block">
                            <div class="card">
                                <div id="faqs" class="accordion">
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head" data-bs-toggle="collapse" data-bs-target="#faq-q1">
                                            <h6 class="title">Tentang aplikasi</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse show" id="faq-q1" data-bs-parent="#faqs">
                                            <div class="accordion-inner">
                                                <p><strong>Sistem Penjadwalan Ujian Pra & Skripsi dengan Algoritma Genetika</strong> adalah sistem yang awalnya dibangun dengan menggunakan Flask bertujuan untuk pencarian jadwal kosong yang akan dipergunakan untuk Ujian Skripsi dan Ujian Pra Skripsi. Seiring waktu, sistem tersebut dikembangkan lagi dengan menggunakan Laravel agar memiliki arsitektur yang lebih bersih daripada penggunaan Flask, yang dimana sebelumnya tidak ada acuan dalam pembuatan aplikasi.</p>
                                            </div>
                                        </div>
                                    </div><!-- .accordion-item -->
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#faq-q2">
                                            <h6 class="title">Apakah saya bisa mendapatkan source code nya?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="faq-q2" data-bs-parent="#faqs">
                                            <div class="accordion-inner">
                                                <p>Anda bisa melakukan clone terhadap repositori sistem ini, entah Flask ataupun Laravel</p>
                                                <a href="https://github.com/kdkchy/Optimasi">Flask</a> dan
                                                <a href="https://github.com/kdkchy/optimasi-algoritma-genetika">Laravel</a>
                                            </div>
                                        </div>
                                    </div><!-- .accordion-item -->
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#pengembangan">
                                            <h6 class="title">Apakah saya bisa mengembangakan sistem ini?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="pengembangan" data-bs-parent="#faqs">
                                            <div class="accordion-inner">
                                                <p>Bisa, jangan lupa untuk mencantumkan link repositori aplikasi ini sebagai acuan pengembangan aplikasi yang akan anda lakukan sendiri.</p>
                                            </div>
                                        </div>
                                    </div><!-- .accordion-item -->
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#inputdata">
                                            <h6 class="title">Bagaimana cara input data Mahasiswa / Dosen?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="inputdata" data-bs-parent="#faqs">
                                            <div class="accordion-inner">
                                                <p>Pada panel sebelah kiri terdapat menu Master. Pilih Mahasiswa untuk input data Mahasiswa, pilih Dosen untuk input data Dosen</p>
                                                <h6>Langkah input data</h6>
                                                <ul class="list list-sm list-checked">
                                                    <li>Input Nomor Induk</li>
                                                    <li>Input Nama</li>
                                                    <li>Ketika sudah tersimpan cari data tersebut pada menu pencarian Mahasiswa / Dosen, dan pilih View untuk melihat rincian</li>
                                                    <li>Atau klik hapus untuk menghapus data</li>
                                                    <li>Input data jadwal dari hari Senin hingga Jumat, lalu simpan. Jika tidak memiliki jadwal maka simpan tanpa melakukan input jadwal</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .accordion-item -->
                                    <div class="accordion-item">
                                        <a href="#" class="accordion-head collapsed" data-bs-toggle="collapse" data-bs-target="#faq-q3">
                                            <h6 class="title">Bagaimana cara pembuatan jadwal Pra & Skripsi?</h6>
                                            <span class="accordion-icon"></span>
                                        </a>
                                        <div class="accordion-body collapse" id="faq-q3" data-bs-parent="#faqs">
                                            <div class="accordion-inner">
                                                <p>Pastikan data Mahasiswa dan Dosen sudah tersimpan dan memiliki jadwal</p>
                                                <p>Pilih menu Perancangan Jadwal pada panel sebelah kiri</p>

                                                <h6>Langkah perancangan jadwal</h6>
                                                <ul class="list list-sm list-checked">
                                                    <li>Cari data Mahasiswa, Pembimbing, Narasumber I, dan Narasumber II</li>
                                                    <li>Jika Sidang tidak memerlukan Narasumber II, maka pilih <strong>None</strong></li>
                                                    <li>Klik Cari Jadwal untuk menampilkan jadwal yang tersedia</li>
                                                    <li>Pilih jadwal yang palih sesuai lalu pilih Ruangan, input Judul, pilih Tanggal, Skripsi / Pra Skripsi. Lalu simpan jadwal</li>
                                                    <li>Data yang terancang sudah muncul pada dahsboard</li>
                                                </ul>

                                                <h6>Bagaimana jika jadwal tersebut tidak terlaksana?</h6>
                                                <ul class="list list-sm list-checked">
                                                    <li>Lakukan penjadwalan kembali dengan menekan tombol Jadwalkan Kembali, lalu pilih jadwal yang sesuai</li>
                                                    <li>Atau hapus data jadwal tersebut jika memang tidak dijadwalkan lagi</li>
                                                </ul>

                                                <h6>Bagaimana jika jadwal tersebut sudah terlaksana?</h6>
                                                <ul class="list list-sm list-checked">
                                                    <li>Klik tombol terlaksana untuk menandakan jadwal tersebut sudah terlaksana</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div><!-- .accordion-item -->
                                </div><!-- .accordion -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                        <div class="nk-block">
                            <div class="card">
                                <div class="card-inner">
                                    <div class="align-center flex-wrap flex-md-nowrap g-4">
                                        <div class="nk-block-image w-120px flex-shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 120 118">
                                                <path d="M8.916,94.745C-.318,79.153-2.164,58.569,2.382,40.578,7.155,21.69,19.045,9.451,35.162,4.32,46.609.676,58.716.331,70.456,1.845,84.683,3.68,99.57,8.694,108.892,21.408c10.03,13.679,12.071,34.71,10.747,52.054-1.173,15.359-7.441,27.489-19.231,34.494-10.689,6.351-22.92,8.733-34.715,10.331-16.181,2.192-34.195-.336-47.6-12.281A47.243,47.243,0,0,1,8.916,94.745Z" transform="translate(0 -1)" fill="#f6faff" />
                                                <rect x="18" y="32" width="84" height="50" rx="4" ry="4" fill="#fff" />
                                                <rect x="26" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                <rect x="50" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                <rect x="74" y="44" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                <rect x="38" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                <rect x="62" y="60" width="20" height="12" rx="1" ry="1" fill="#e5effe" />
                                                <path d="M98,32H22a5.006,5.006,0,0,0-5,5V79a5.006,5.006,0,0,0,5,5H52v8H45a2,2,0,0,0-2,2v4a2,2,0,0,0,2,2H73a2,2,0,0,0,2-2V94a2,2,0,0,0-2-2H66V84H98a5.006,5.006,0,0,0,5-5V37A5.006,5.006,0,0,0,98,32ZM73,94v4H45V94Zm-9-2H54V84H64Zm37-13a3,3,0,0,1-3,3H22a3,3,0,0,1-3-3V37a3,3,0,0,1,3-3H98a3,3,0,0,1,3,3Z" transform="translate(0 -1)" fill="#798bff" />
                                                <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="#6576ff" />
                                                <path d="M61.444,41H40.111L33,48.143V19.7A3.632,3.632,0,0,1,36.556,16H61.444A3.632,3.632,0,0,1,65,19.7V37.3A3.632,3.632,0,0,1,61.444,41Z" transform="translate(0 -1)" fill="none" stroke="#6576ff" stroke-miterlimit="10" stroke-width="2" />
                                                <line x1="40" y1="22" x2="57" y2="22" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                <line x1="40" y1="27" x2="57" y2="27" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                <line x1="40" y1="32" x2="50" y2="32" fill="none" stroke="#fffffe" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                                <line x1="30.5" y1="87.5" x2="30.5" y2="91.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                <line x1="28.5" y1="89.5" x2="32.5" y2="89.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                <line x1="79.5" y1="22.5" x2="79.5" y2="26.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                <line x1="77.5" y1="24.5" x2="81.5" y2="24.5" fill="none" stroke="#9cabff" stroke-linecap="round" stroke-linejoin="round" />
                                                <circle cx="90.5" cy="97.5" r="3" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                                <circle cx="24" cy="23" r="2.5" fill="none" stroke="#9cabff" stroke-miterlimit="10" />
                                            </svg>
                                        </div>
                                        <div class="nk-block-content">
                                            <div class="nk-block-content-head px-lg-4">
                                                <h5>Perlu Bantuan?</h5>
                                                <p class="text-soft">Tanyakan pertanyaan mu melalui email atau sosial media.</p>
                                            </div>
                                        </div>
                                        <div class="nk-block-content flex-shrink-0">
                                            <a href="mailto:kdkchy@gmail.com" class="btn btn-lg btn-outline-primary">Email Sekarang</a>
                                        </div>
                                    </div>
                                </div><!-- .card-inner -->
                            </div><!-- .card -->
                        </div><!-- .nk-block -->
                    </div><!-- .content-page -->
                </div>
            </div>
        </div>
    </div>
</div><!-- nk-block -->
@endsection
