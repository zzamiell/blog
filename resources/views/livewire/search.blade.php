<div class="container mt-5 p-3" style="margin-bottom: 25%">
    <h2>Hasil Pencarian</h2>
    <div class="list-group">

        @foreach ($data['artikel'] as $item)
            <a href="{{ route('beritaDetailComponent', $item->slug) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->judul }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">Artikel & Berita</span></h5>
                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') !!}</p>
                    </div>
                </div>
            </a>
        @endforeach

        @foreach ($data['agenda'] as $item)
            <a href="{{ route('agendaDetailComponent', $item->slug) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->judul }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">Agenda</span></h5>
                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') !!}</p>
                    </div>
                </div>
            </a>
        @endforeach

        @foreach ($data['agenda'] as $item)
            <a href="{{ route('prestasiDetailComponent', $item->slug) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->judul }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">Prestasi</span></h5>
                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') !!}</p>
                    </div>
                </div>
            </a>
        @endforeach

        @foreach ($data['guru'] as $item)
            <a href="{{ route('guruDetailComponent', $item->id) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->avatar) }}" alt="{{ $item->fullname }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->fullname }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">Guru & Staff</span></h5>
                    </div>
                </div>
            </a>
        @endforeach

        @foreach ($data['jurusan'] as $item)
            <a href="{{ route('jurusanDetailComponent', $item->slug) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->judul }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">Jurusan</span></h5>
                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') !!}</p>
                    </div>
                </div>
            </a>
        @endforeach

        @foreach ($data['eskul'] as $item)
            <a href="{{ route('eskulDetailComponent', $item->slug) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->judul }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">Ekstrakulikuler</span></h5>
                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') !!}</p>
                    </div>
                </div>
            </a>
        @endforeach

        @foreach ($data['pengumuman'] as $item)
            <a href="{{ route('pengumumanDetailComponent', $item->slug) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->judul }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">Pengumuman</span></h5>
                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') !!}</p>
                    </div>
                </div>
            </a>
        @endforeach

        @foreach ($data['ppdb'] as $item)
            <a href="{{ route('ppdbDetailComponent', $item->slug) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->judul }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">PPDB</span></h5>
                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') !!}</p>
                    </div>
                </div>
            </a>
        @endforeach

        @foreach ($data['ujian'] as $item)
            <a href="{{ route('ujianDetailComponent', $item->slug) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->judul }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">Ujian</span></h5>
                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') !!}</p>
                    </div>
                </div>
            </a>
        @endforeach

        @foreach ($data['fasilitas'] as $item)
            <a href="{{ route('fasilitasDetailComponent', $item->slug) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->judul }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">Fasilitas</span></h5>
                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') !!}</p>
                    </div>
                </div>
            </a>
        @endforeach

        @foreach ($data['kegiatan'] as $item)
            <a href="{{ route('kegiatanDetailComponent', $item->slug) }}"
                class="list-group-item list-group-item-action mb-3">
                <div class="d-flex w-100 justify-content-between">
                    <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->judul }}" class="img-thumbnail me-3"
                        width="100" height="100">
                    <div class="flex-grow-1">
                        <h5 class="mb-1">{{ $item->judul }}</h5>
                        <h5 class="mb-1"><span class="badge bg-info">Kegiatan</span></h5>
                        <p class="mb-1">{!! \Illuminate\Support\Str::limit(strip_tags($item->deskripsi), 100, '...') !!}</p>
                    </div>
                </div>
            </a>
        @endforeach
    </div>
</div>
