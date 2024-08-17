@extends('admin.app')

@section('title', 'Kelola Kegiatan Sekolah')

@section('content')
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 text-right mb-3">
            <button type="button" onclick="initTiny()" class="btn btn-primary" data-toggle="modal" data-target="#addUser">+
                tambah</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">kelola data kegiatan</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table nowrap" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>#no</th>
                                    <th>kegiatan</th>
                                    <th>slug</th>
                                    <th>author</th>
                                    <th>created at</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($feeds as $key => $item)
                                    <tr align="center">
                                        <td>{{ $key + 1 }}</td>
                                        <td align="center" class="center"> <img src="{{ asset($item->thumbnail) }}"
                                                alt="{{ $item->judul }}"
                                                style="max-width: 100px; height: auto; vertical-align: middle;">
                                            <span
                                                style="vertical-align: middle; margin-left: 10px;">{{ $item->judul }}</span>
                                        </td>
                                        <td align="center" class="center">{{ $item->slug }}</td>
                                        <td align="center" class="center">{{ $item->creator }}</td>
                                        <td align="center" class="center">{{ $item->created_at }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#editKaryawan2{{ $item->id }}">
                                                    Update
                                                </button>
                                                <form id="delete-form-{{ $item->id }}"
                                                    action="{{ route('kegiatan.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger no-rounded-left"
                                                        onclick="confirmDelete({{ $item->id }})">
                                                        Hapus
                                                    </button>
                                                </form>
                                                <a href="{{ route('kegiatan.galeri', $item->id) }}"
                                                    class="btn btn-info rounded-right">
                                                    Galeri
                                                </a>
                                            </div>
                                        </td>

                                    </tr>

                                    <div class="modal fade" id="editKaryawan2{{ $item->id }}" role="dialog"
                                        aria-labelledby="editKaryawan2{{ $item->id }}Label" aria-hidden="true">
                                        <div class="modal-dialog modal-xl" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editKaryawan2{{ $item->id }}Label">
                                                        ubah
                                                        data
                                                        kegiatan
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('kegiatan.update', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group" id="errorMsgupdate">
                                                            {{-- field untuk error message --}}
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">nama
                                                                fasilitas</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $item->judul }}" name="judul">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label">thumbnail</label>
                                                            <input type="file" class="form-control" name="thumbnail">
                                                            <small style="color: red">*abaikan jika tidak ingin mengubah
                                                                gambar</small>
                                                        </div>


                                                        <div class="form-group">
                                                            <label for="editor2" class="col-form-label">Konten</label>
                                                            <textarea class="editKaryawan2{{ $item->id }}" name="deskripsi">{{ $item->deskripsi }}</textarea>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" id="tutup_modal_edit"
                                                            class="btn btn-secondary" data-dismiss="modal">Close</button>
                                                        <button type="submit" class="btn btn-primary">Ubah</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addUser" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserLabel">tambah
                        data
                        kegiatan
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('kegiatan.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group" id="errorMsgupdate">
                            {{-- field untuk error message --}}
                        </div>
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">nama kegiatan</label>
                            <input type="text" class="form-control" name="judul">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail">
                            <small style="color: red">*abaikan jika tidak ingin mengubah
                                gambar</small>
                        </div>

                        <div class="form-group">
                            <label for="editor" class="col-form-label">Konten</label>
                            <textarea id="editor" name="deskripsi"></textarea>
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


        // UNTUK EDIT TEXT EDITOR FORM
        function initializeTinyMCE(modalId) {
            tinymce.init({
                selector: `.${modalId}`, // Unique ID for each modal's textarea
                plugins: 'image code media',
                toolbar: 'undo redo | link image | code | media',
                image_title: true,
                automatic_uploads: true,
                media_live_embeds: true,
                menubar: true,
                file_picker_types: 'image',
                file_picker_callback: (cb, value, meta) => {
                    const input = document.createElement('input');
                    input.setAttribute('type', 'file');
                    input.setAttribute('accept', 'image/*');

                    input.addEventListener('change', (e) => {
                        const file = e.target.files[0];

                        const reader = new FileReader();
                        reader.addEventListener('load', () => {
                            const id = 'blobid' + (new Date()).getTime();
                            const blobCache = tinymce.activeEditor.editorUpload.blobCache;
                            const base64 = reader.result.split(',')[1];
                            const blobInfo = blobCache.create(id, file, base64);
                            blobCache.add(blobInfo);

                            cb(blobInfo.blobUri(), {
                                title: file.name
                            });
                        });
                        reader.readAsDataURL(file);
                    });

                    input.click();
                },
                content_style: 'body { font-family:Helvetica,Arial,sans-serif; font-size:16px }'
            });
        }

        // Reinitialize TinyMCE when each modal is shown
        $('.modal').on('shown.bs.modal', function() {
            const modalId = $(this).attr('id');
            initializeTinyMCE(modalId);
        });

        // Destroy TinyMCE when each modal is hidden
        $('.modal').on('hidden.bs.modal', function() {
            tinymce.remove();
        });
    </script>
@endsection
