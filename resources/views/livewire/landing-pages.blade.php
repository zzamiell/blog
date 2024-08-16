<div>

    @if (session('credentials'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: '{{ session('credentials') }}',
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


    {{-- Stop trying to control. --}}
    @include('livewire.home.banner')
    @include('livewire.home.layanan_unggulan')
    @include('livewire.home.artikel_dan_berita')
    @include('livewire.home.agenda')
    @include('livewire.home.prestasi')
    @include('livewire.home.staff_dan_guru')
    @include('livewire.home.jurusan')

    @include('livewire.home.eskul')
    @include('livewire.home.pengumuman')
    @include('livewire.home.fasilitas')
    @include('livewire.home.kegiatan')
    <div style="margin-bottom: 20%">

    </div>
    {{-- @include('livewire.home.video')
    @include('livewire.home.alumni') --}}
</div>
