@extends('admin.app')

@section('title', 'Kelola pengaturan Sekolah')

@section('content')

    <div class="row">
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">kelola data pengumuman </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengaturan.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="nama_sekolah" class="form-label">Nama Sekolah</label>
                            <input type="text" class="form-control" value="{{ $data->nama_sekolah }}" id="nama_sekolah"
                                name="nama_sekolah" placeholder="Masukkan Nama Sekolah">
                        </div>

                        <div class="mb-3">
                            <label for="kepala_sekolah" class="form-label">Nama Kepala Sekolah</label>
                            <input type="text" class="form-control" value="{{ $data->kepala_sekolah }}"
                                id="kepala_sekolah" name="kepala_sekolah" placeholder="Masukkan Nama Kepala Sekolah">
                        </div>

                        <div class="mb-3">
                            <label for="kepala_sekolah" class="form-label">telepon sekolah</label>
                            <input type="text" class="form-control" value="{{ $data->phone }}" id="kepala_sekolah"
                                name="phone" placeholder="Masukkan Telepon Sekolah">
                        </div>

                        <div class="mb-3">
                            <label for="kepala_sekolah" class="form-label">email sekolah</label>
                            <input type="text" class="form-control" value="{{ $data->email }}" id="kepala_sekolah"
                                name="email" placeholder="Masukkan Email Sekolah">
                        </div>

                        <div class="mb-3 text-center">
                            <label class="form-label">Foto Kepala Sekolah Saat Ini</label>
                            <div class="mb-2">
                                <img src="{{ asset($data->avatar) }}" alt="Logo Sekolah" class="img-thumbnail"
                                    style="max-width: 150px;">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="foto_kepala_sekolah" class="form-label">Foto Kepala Sekolah</label>
                            <input type="file" class="form-control" id="foto_kepala_sekolah" name="avatar">
                            <small style="color: red">*abaikan jika tidak ingin mengubah
                                gambar</small>
                        </div>

                        <div class="mb-3 text-center">
                            <label class="form-label">Logo Sekolah Saat Ini</label>
                            <div class="mb-2">
                                <img src="{{ asset($data->logo) }}" alt="Logo Sekolah" class="img-thumbnail"
                                    style="max-width: 150px;">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="logo_sekolah" class="form-label">Logo Sekolah</label>
                            <input type="file" class="form-control" id="logo_sekolah" name="logo">
                            <small style="color: red">*abaikan jika tidak ingin mengubah
                                gambar</small>
                        </div>

                        <div class="mb-3">
                            <label for="editor" class="form-label">Sambutan</label>
                            <textarea id="editor" class="form-control" name="sambutan">{{ $data->sambutan }}</textarea>
                        </div>

                        <div class="d-flex justify-content-end mt-5">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">kelola data profile sekolah </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengaturan.updateprofile') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="npsn" class="form-label">NPSN</label>
                            <input type="text" class="form-control" value="{{ $data->npsn }}" id="npsn"
                                name="npsn" placeholder="Masukkan NPSN Sekolah">
                        </div>
                        <div class="mb-3">
                            <label for="akreditasi" class="form-label">Akreditasi</label>
                            <input type="text" class="form-control" value="{{ $data->akreditasi }}" id="akreditasi"
                                name="akreditasi" placeholder="Masukkan akreditasi Sekolah">
                        </div>
                        <div class="mb-3">
                            <label for="sk_akreditasi" class="form-label">No SK Akreditasi</label>
                            <input type="text" class="form-control" value="{{ $data->akreditasi }}"
                                id="sk_akreditasi" name="sk_akreditasi" placeholder="Masukkan No AKreditasi Sekolah">
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status Sekolah</label>
                            <select name="status" id="" class="form-control">
                                <option value="NEGERI" @if ($data->status == 'NEGERI') selected @endif>NEGERI</option>
                                <option value="SWASTA" @if ($data->status == 'SWASTA') selected @endif>SWASTA</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="pendidikan" class="form-label">Jenjang Pendidikan</label>
                            <input type="text" class="form-control" value="{{ $data->jenjang }}" id="pendidikan"
                                name="jenjang" placeholder="Masukkan Jenjang Pendidikan Sekolah">
                        </div>
                        <div class="mb-3">
                            <label for="sk_pendirian" class="form-label">SK Pendirian</label>
                            <input type="text" class="form-control" value="{{ $data->sk_pendirian }}"
                                id="sk_pendirian" name="sk_pendirian" placeholder="Masukkan SK Pendirian Sekolah">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_sk_pendirian" class="form-label">Tanggal SK Pendirian</label>
                            <input type="date" class="form-control" value="{{ $data->tgl_sk_pendirian }}"
                                id="tgl_sk_pendirian" name="tgl_sk_pendirian"
                                placeholder="Masukkan Tanggal SK Pendirian Sekolah">
                        </div>
                        <div class="mb-3">
                            <label for="sk_izin_operasional" class="form-label">SK Izin Operasional</label>
                            <input type="text" class="form-control" value="{{ $data->sk_izin_operasional }}"
                                id="sk_izin_operasional" name="sk_izin_operasional"
                                placeholder="Masukkan SK Izin Pendirian Sekolah">
                        </div>
                        <div class="mb-3">
                            <label for="tgl_sk_izin_operasional" class="form-label">Tanggal SK Izin Operasional</label>
                            <input type="date" class="form-control" value="{{ $data->tgl_sk_izin_operasional }}"
                                id="tgl_sk_izin_operasional" name="tgl_sk_izin_operasional"
                                placeholder="Masukkan Tanggal SK Izin Pendirian Sekolah">
                        </div>
                        <div class="mb-3">
                            <label for="sambutan" class="form-label">Alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="4" placeholder="Masukkan Alamat">{{ $data->alamat }}</textarea>
                        </div>



                        <div class="d-flex justify-content-end mt-5">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">kelola visi misi </h6>
                </div>
                <div class="card-body">
                    <form action="{{ route('pengaturan.update.visimisi') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="editor2" class="form-label">Visi Misi Sekolah</label>
                            <textarea id="editor2" class="form-control" name="visi_misi">{{ $data->visi_misi }}</textarea>
                        </div>

                        <div class="d-flex justify-content-end mt-5">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <style>
        .image-wrapper {
            width: 100%;
            padding-top: 100%;
            position: relative;
        }

        .image-wrapper img {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <hr>
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 text-right mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">+ tambah
                banner</button>
        </div>
    </div>
    <div class="row">
        @if ($banner->isEmpty())
            <div class="col-md-12 d-flex justify-content-center align-items-center" style="height: 500px;">
                <div class="text-center">
                    <i class="fas fa-image fa-5x mb-3" style="color: #ccc;"></i>
                    <p>Belum ada galeri yang tersedia.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">+ tambah
                        gambar sekarang</button>
                </div>
            </div>
        @else
            @foreach ($banner as $item)
                <div class="col-md-3 position-relative">
                    <div class="image-wrapper mb-3 position-relative">
                        <img src="{{ asset($item->banner) }}" alt="{{ $item->banner }}" class="img-fluid">
                        <button type="button" class="btn btn-danger btn-sm position-absolute"
                            style="top: 10px; right: 10px;" data-toggle="modal"
                            data-target="#deleteModal-{{ $item->id }}">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </div>
                </div>

                <!-- Delete Modal -->
                <div class="modal fade" id="deleteModal-{{ $item->id }}" role="dialog"
                    aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="deleteModalLabel">Hapus Gambar</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('pengaturan.banner.destroy', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-body">
                                    Apakah Anda yakin ingin menghapus gambar ini?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <button type="submit" class="btn btn-danger">Hapus</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        @endif
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="d-flex justify-content-center mt-3">
                {{ $banner->links() }}
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary" style="float: left">kelola data jurusan</h6>
                    <button type="button" class="btn btn-primary" style="float: right" data-toggle="modal"
                        data-target="#lampiran">+ tambah
                        lampiran</button>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table nowrap" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>#no</th>
                                    <th>nama file</th>
                                    <th>jenis</th>
                                    <th>lampiran</th>
                                    <th>created at</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($lampiran as $key => $item)
                                    <tr align="center">
                                        <td>{{ $key + 1 }}</td>
                                        <td align="center" class="center">{{ $item->judul }}</td>
                                        <td align="center" class="center">{{ $item->jenis }}</td>
                                        <td align="center" class="center"><a href="{{ asset($item->lampiran) }}"
                                                target="_blank"><i class="fa fa-download"></i></a></td>
                                        <td align="center" class="center">{{ $item->created_at }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <form id="delete-form-2-{{ $item->id }}"
                                                    action="{{ route('pengaturan.lampiran.destroy', $item->id) }}"
                                                    method="POST" class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger no-rounded-left"
                                                        onclick="confirmDelete2({{ $item->id }})">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="lampiran" role="dialog" aria-labelledby="lampiranLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="lampiranLabel">
                        tambah
                        data
                        lampiran sekolah
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('pengaturan.store.file') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group" id="errorMsgupdate">
                            {{-- field untuk error message --}}
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">judul lampiran</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">jenis lampiran</label>
                            <input type="text" class="form-control" name="jenis">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">lampiran</label>
                            <input type="file" class="form-control" name="lampiran">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="tutup_modal_edit" class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade" id="addUser" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserLabel">tambah data banner halaman sekolah</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('pengaturan.store.banner') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group" id="errorMsgupdate">
                            {{-- field untuk error message --}}
                        </div>
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">thumbnail</label>
                            <input type="file" class="form-control" name="banner">
                            <small style="color: red">*abaikan jika tidak ingin mengubah gambar</small>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" id="tutup_modal_edit" class="btn btn-secondary"
                            data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script lang="text/javascript">
        initTiny()
        initTiny2()

        function initTiny() {
            tinymce.init({
                selector: '#editor',
                plugins: 'image code media',
                toolbar: 'undo redo | link image | code | media',
                image_caption: true,
                automatic_uploads: true,
                media_live_embeds: true, // Optional: This allows live embeds of media
                menubar: true // Optional: Hide the menu bar for a cleaner UI
            });
        }

        function initTiny2() {
            tinymce.init({
                selector: '#editor2',
                plugins: 'image code media',
                toolbar: 'undo redo | link image | code | media',
                image_caption: true,
                automatic_uploads: true,
                media_live_embeds: true, // Optional: This allows live embeds of media
                menubar: true // Optional: Hide the menu bar for a cleaner UI
            });
        }

        function confirmDelete(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-' + id).submit();
                }
            });
        }

        function confirmDelete2(id) {
            Swal.fire({
                title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'Cancel'
            }).then((result) => {
                if (result.isConfirmed) {
                    document.getElementById('delete-form-2-' + id).submit();
                }
            });
        }
    </script>
@endsection
