@extends('admin.app')

@section('title', 'Kelola Fasilitas Sekolah')

@section('content')
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
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 text-right mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">+ tambah</button>
        </div>
    </div>
    <div class="row">
        @if ($galeri->isEmpty())
            <div class="col-md-12 d-flex justify-content-center align-items-center" style="height: 500px;">
                <div class="text-center">
                    <i class="fas fa-image fa-5x mb-3" style="color: #ccc;"></i>
                    <p>Belum ada galeri yang tersedia.</p>
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">+ tambah
                        gambar sekarang</button>
                </div>
            </div>
        @else
            @foreach ($galeri as $item)
                <div class="col-md-3 position-relative">
                    <div class="image-wrapper mb-3 position-relative">
                        <img src="{{ asset($item->thumbnail) }}" alt="{{ $item->thumbnail }}" class="img-fluid">
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
                            <form action="{{ route('fasilitas.galeri.destroy', [$item->id, $item->fasilitasId]) }}"
                                method="POST">
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
                {{ $galeri->links() }}
            </div>
        </div>
    </div>

    <div class="modal fade" id="addUser" role="dialog" aria-labelledby="addUserLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserLabel">tambah data galeri fasilitas</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('fasilitas.store.galeri', $id) }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group" id="errorMsgupdate">
                            {{-- field untuk error message --}}
                        </div>
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">thumbnail</label>
                            <input type="file" class="form-control" name="thumbnail">
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

@endsection
