<section id="faq">
    <div class="container spacer-double-sm">
        <!--Row-->
        <div class="row aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
            <div class="col">
                <div class="mb-5 pb-5 text-center"> <span class="icon-title icon-bg-dark rounded-circle mb-3">
                        <img class="icon-title-inner" src="{{ asset('assets/images/comment.svg') }}" alt=""
                            style="width: 110px; height: 110px;">
                    </span>
                    <h2 class="h1">Pertanyaan yang sering muncul</h2>
                    <p class="w-md-60 mx-auto mb-0 lead">Berikut pertanyaan yang sering muncul di Rapat Kerja
                        Kementerian Perdagangan.</p>
                </div>
            </div>
        </div>
        <!--End row-->
        <!--Row-->


        <div class="faq-section">
            <div class="faq-list">
                <div class="faq">
                    <div class="ques">
                        <h1>Di mana lokasi penjemputan peserta acara?</h1>
                        <i class="fa-solid fa-arrow-down" style="color: black;"></i>
                    </div>
                    <div class="ans">
                        <p>Penjemputan peserta akan dilakukan di lobi titik point Airport Melbourne Tullamarine. Tim
                            penjemput akan berada di lokasi sesuai jadwal yang sudah dimasukkan ke dalam form gmail,
                            mohon segera update form gmail dan apabila ada kendala bisa hubungi panitia Rakornis.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="ques">
                        <h1>Siapa yang bertanggung jawab untuk memberikan cap SPPD?
                        </h1>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="ans">
                        <p>Untuk proses cap SPPD, silakan menghubungi bagian administrasi acara. Anda bisa menemui
                            petugas di meja registrasi pada saat acara berlangsung.
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="ques">
                        <h1>Bagaimana cara mendapatkan materi rakornis setelah acara berlangsung?</h1>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="ans">
                        <p>Materi rakornis dapat diunduh dari landing page rakornis.tanya-atdag.au di bagian "Download"
                            setelah acara selesai. Jadi jangan khawatir untuk ketersediaan materi rakornis
                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="ques">
                        <h1>Apa password WIFI di hotel Grand Hyatt tempat acara berlangsung?
                        </h1>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="ans">
                        <p>Password WIFI untuk akses internet di hotel Grand Hyatt adalah "GrandHyatt2024". Harap
                            hubungi petugas di meja resepsionis jika mengalami kesulitan saat mencoba mengakses jaringan
                            WIFI.

                        </p>
                    </div>
                </div>

                <div class="faq">
                    <div class="ques">
                        <h1>Transportasi apa yang direkomendasikan untuk menuju lokasi rakor?
                        </h1>
                        <i class="fa-solid fa-plus"></i>
                    </div>
                    <div class="ans">
                        <p>Untuk menuju lokasi rakor, Anda dapat menggunakan free tram zone yang akan berhenti di
                            sekitar hotel. Setelah itu tinggal ikuti saja rute yang telah disediakan free tram zone</p>
                    </div>
                </div>
            </div>
        </div>
        {{--
        <form action="{{ route('komentar.store') }}" method="POST">
            @csrf
            <div>
                <label for="nama">Nama:</label>
                <input type="text" id="nama" name="nama" required>
            </div>
            <div>
                <label for="komentar">Komentar:</label>
                <textarea id="komentar" name="komentar" required></textarea>
            </div>
            <button type="submit">Kirim Komentar</button>
        </form> --}}

        <style>
            .card {
                border: none;
                box-shadow: 5px 6px 6px 2px #e9ecef;
                border-radius: 4px;
                font-size: 1.2em;
                /* Increase the size of the card content */
                margin-bottom: 20px;
                /* Add more space between cards */
            }

            .dots {
                height: 4px;
                width: 4px;
                margin-bottom: 2px;
                background-color: #bbb;
                border-radius: 50%;
                display: inline-block;
            }

            .badge {
                padding: 7px;
                padding-right: 9px;
                padding-left: 16px;
                box-shadow: 5px 6px 6px 2px #e9ecef;
            }

            .user-img {
                margin-top: 4px;
                margin-right: 20px;
                /* Adjust the margin to create more space */
            }

            .user-name {
                margin-left: 20px;
                /* Adjust to increase space between image and text */
            }

            .check-icon {
                font-size: 17px;
                color: #c3bfbf;
                top: 1px;
                position: relative;
                margin-left: 3px;
            }

            .form-check-input {
                margin-top: 6px;
                margin-left: -24px !important;
                cursor: pointer;
            }

            .form-check-input:focus {
                box-shadow: none;
            }

            .icons i {
                margin-left: 8px;
            }

            .reply {
                margin-left: 12px;
            }

            .reply small {
                color: #b7b4b4;
            }

            .reply small:hover {
                color: green;
                cursor: pointer;
            }

            .headings h5 {
                font-size: 1.5em;
                /* Adjust the heading size */
            }

            .card.hidden {
                display: none;
            }
        </style>

<div class="container mt-5">
    <div class="row d-flex justify-content-center">
        <div class="col-md-8">
            <div class="headings d-flex justify-content-between align-items-center mb-3">
                <h5>Comments</h5>
            </div>
            {{-- logika jika komentar tidak ada --}}
            @if ($komentars->isEmpty())
                <div class="card p-3 mt-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="user d-flex flex-row align-items-center">
                            <span class="user-name">
                                <small class="font-weight-bold">Belum ada komentar</small>
                            </span>
                        </div>
                    </div>
                </div>
            @endif

            @foreach ($komentars->take(4) as $komentar)
                <div class="card p-3 mt-2">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="user d-flex flex-row align-items-center">
                            <img src="{{ asset('assets/images/icon-profile.jpg') }}" width="30" class="user-img rounded-circle">
                            <span class="user-name">
                                <small class="font-weight-bold text-primary">{{ $komentar->nama }}</small>
                                <small class="font-weight-bold">{{ $komentar->komentar }}</small>
                            </span>
                        </div>
                        <small>{{ $komentar->created_at->diffForHumans() }}</small>
                    </div>
                </div>
            @endforeach

            @if ($komentars->count() > 4)
                <div class="text-center mt-3">
                    <a href="#" id="loadMoreLink" class="text-primary">Load More ({{ $komentars->count() - 4 }})</a>
                </div>
            @endif

            <div id="hiddenComments" style="display: none;">
                @foreach ($komentars->skip(4) as $komentar)
                    <div class="card p-3 mt-2">
                        <div class="d-flex justify-content-between align-items-center">
                            <div class="user d-flex flex-row align-items-center">
                                <img src="{{ asset('assets/images/icon-profile.jpg') }}" width="30" class="user-img rounded-circle">
                                <span class="user-name">
                                    <small class="font-weight-bold text-primary">{{ $komentar->nama }}</small>
                                    <small class="font-weight-bold">{{ $komentar->komentar }}</small>
                                </span>
                            </div>
                            <small>{{ $komentar->created_at->diffForHumans() }}</small>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>



        <div class="container mt-5">
            <h2 class="text-center mb-4">Masukan Komentar</h2>
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <form class="bg-light p-4 rounded shadow-sm" style="background-color: #f8f9fa;"
                        action="{{ route('komentar.store') }}" method="POST">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="nama">Nama</label>
                            <input type="text" name="nama" id="nama" class="form-control" required>
                        </div>
                        <div class="form-group mb-4">
                            <label for="komentar">Komentar</label>
                            <textarea name="komentar" id="komentar" class="form-control" rows="5" required></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block"
                                style="background-color: #1F54C5; border-radius: 10px; width: 100%;">Kirim</button>
                        </div>
                    </form>
                    {{-- <form class="bg-light p-4 rounded shadow-sm" style="background-color: #f8f9fa;">
                        <div class="form-group mb-3">
                            <label for="nameInput">Nama</label>
                            <input type="text" style="background-color: #f2f2f2" class="form-control"
                                id="nameInput" aria-describedby="nameHelp" placeholder="Masukkan nama">
                        </div>
                        <div class="form-group mb-4">
                            <label for="commentInput">Komentar</label>
                            <textarea style="background-color: #f2f2f2" class="form-control" id="commentInput" placeholder="Masukkan komentar"
                                rows="5"></textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary btn-block"
                                style="background-color: #1F54C5; border-radius: 10px; width: 100%;">Kirim</button>
                        </div>
                    </form> --}}
                </div>
            </div>
        </div>





        <!--End row-->
    </div>
</section>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const loadMoreLink = document.getElementById('loadMoreLink');
        const hiddenComments = document.getElementById('hiddenComments');

        loadMoreLink.addEventListener('click', function(event) {
            event.preventDefault(); // Mencegah perilaku default link

            hiddenComments.style.display = 'block';
            loadMoreLink.style.display = 'none';

            // Delay untuk efek loading (misalnya, 1 detik)
            setTimeout(() => {
                hiddenComments.scrollIntoView({ behavior: 'smooth' });
            }, 3000);
        });

        // Menampilkan SweetAlert jika ada pesan sukses
        @if(session('success'))
            Swal.fire({
                icon: 'success',
                title: 'Berhasil!',
                text: '{{ session('success') }}',
            });
        @endif
    });
</script>
