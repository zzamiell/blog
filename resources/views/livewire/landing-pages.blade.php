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
    @include('livewire.home.ppdb')
    @include('livewire.home.ujian')
    @include('livewire.home.fasilitas')
    @include('livewire.home.kegiatan')
    @include('livewire.home.alumni')

    <style>
        #mitra img {
  max-height: 120px;
  object-fit: contain;
  filter: grayscale(100%);
  transition: filter 0.3s ease;
}

#mitra img:hover {
  filter: grayscale(0%);
}

    </style>
    <section id="mitra" class="py-5 bg-light">
        <div class="container">
          <h2 class="text-center mb-4">Mitra Kami</h2>
          <div class="row justify-content-center align-items-center">
            <div class="col-6 col-md-3 mb-4">
              <img src="{{asset('wp-content/uploads/2022/03/link-bwi.png')}}" alt="Logo Mitra 1" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 mb-4">
              <img src="{{asset('wp-content/uploads/2022/03/link-bwi.png')}}" alt="Logo Mitra 2" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 mb-4">
              <img src="{{asset('wp-content/uploads/2022/03/link-bwi.png')}}" alt="Logo Mitra 3" class="img-fluid">
            </div>
            <div class="col-6 col-md-3 mb-4">
              <img src="{{asset('wp-content/uploads/2022/03/link-bwi.png')}}" alt="Logo Mitra 4" class="img-fluid">
            </div>
          </div>
        </div>
      </section>

    <div style="margin-bottom: 0%">

    </div>
    {{-- @include('livewire.home.video')
    @include('livewire.home.alumni') --}}
</div>
