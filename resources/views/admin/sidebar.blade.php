<!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('dashboard.index') }}">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-laugh-wink"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SEKOLAH</div>
    </a>
    <hr class="sidebar-divider my-0">

    <!-- Nav Item - Dashboard -->
    <li class="nav-item {{ request()->segment(2) === 'dashboard' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard.index') }}">
            <i class="fas fa-fw fa-tachometer-alt"></i>
            <span>Dashboard</span></a>
    </li>

    <div class="sidebar-heading">
        MENU UTAMA
    </div>
    <li class="nav-item {{ request()->segment(2) === 'agenda' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('agenda.index') }}">
            <i class="fas fa-list"></i>

            <span>Agenda</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) === 'artikel' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('artikel.index') }}">
            <i class="fas fa-newspaper"></i>
            <span>Artikel & Berita</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) === 'eskul' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('eskul.index') }}">
            <i class="fas fa-theater-masks"></i>

            <span>Ekstrakulikuler</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) === 'fasilitas' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('fasilitas.index') }}">
            <i class="fas fa-building"></i>

            <span>Fasilitas</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) === 'jurusan' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('jurusan.index') }}">
            <i class="fas fa-book"></i>

            <span>Jurusan</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) === 'kegiatan' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('kegiatan.index') }}">
            <i class="fas fa-play-circle"></i>

            <span>Kegiatan</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) === 'prestasi' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('prestasi.index') }}">
            <i class="fas fa-trophy"></i>

            <span>Prestasi</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) === 'pengumuman' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pengumuman.index') }}">
            <i class="fas fa-bell"></i>

            <span>Pengumuman</span></a>
    </li>
    <li class="nav-item {{ request()->segment(2) == 'guru' || request()->segment(2) == 'siswa' ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities2"
            aria-expanded="{{ request()->segment(2) == 'guru' || request()->segment(2) == 'siswa' ? 'true' : 'false' }}"
            aria-controls="collapseUtilities2">
            <i class="fa-solid fa-user"></i>
            <span>Users</span>
        </a>
        <div id="collapseUtilities2"
            class="collapse {{ request()->segment(1) == 'guru' || request()->segment(2) == 'siswa' ? 'show' : '' }}"
            aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
            <div class="bg-white py-2 collapse-inner rounded">
                <h6 class="collapse-header">all users</h6>
                <a class="collapse-item {{ request()->segment(2) == 'reedem' ? 'active' : '' }}"
                    href="{{ route('guru.index') }}">guru</a>
                <a class="collapse-item {{ request()->segment(2) == 'reedem-kategori' ? 'active' : '' }}"
                    href="{{ route('siswa.index') }}">siswa</a>
            </div>
        </div>
    </li>
    <li class="nav-item {{ request()->segment(2) === 'pengaturan' ? 'active' : '' }}">
        <a class="nav-link" href="{{ route('pengaturan.index') }}">
            <i class="fas fa-gear"></i>

            <span>Pengaturan</span></a>
    </li>


    <hr class="sidebar-divider d-none d-md-block">

    <!-- Sidebar Toggler (Sidebar) -->
    <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
    </div>

</ul>
<!-- End of Sidebar -->

@if (session('success'))
    <script>
        Swal.fire({
            icon: 'success',
            title: '',
            text: '{{ session('success') }}',
        });
    </script>
@endif

@if ($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'Validation Error',
            html: `
    <ul style="text-align: left;">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
`,
        });
    </script>
@endif
