@extends('admin.app')

@section('title', 'kelola data pelanggan')

@section('content')
    <div class="row">
        <div class="col-md-6"></div>
        <div class="col-md-6 text-right mb-3">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addUser">+
                tambah</button>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">kelola data guru</h6>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table nowrap" id="myTable" width="100%" cellspacing="0">
                            <thead>
                                <tr align="center">
                                    <th>#no</th>
                                    <th>nama</th>
                                    <th>email</th>
                                    <th>nuptk</th>
                                    <th>nip</th>
                                    <th>phone</th>
                                    <th>agama</th>
                                    <th>jenis kelamin</th>
                                    <th>status</th>
                                    <th>jabatan</th>
                                    <th>created at</th>
                                    <th>action</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($gurus as $key => $item)
                                    <tr align="center">
                                        <td>{{ $key + 1 }}</td>
                                        <td align="center" class="center"> <img src="{{ asset($item->avatar) }}"
                                                alt="{{ $item->fullname }}"
                                                style="max-width: 100px; height: auto; vertical-align: middle;">
                                            <span
                                                style="vertical-align: middle; margin-left: 10px;">{{ $item->fullname }}</span>
                                        </td>
                                        <td align="center" class="center">{{ $item->email }}</td>
                                        <td align="center" class="center">{{ $item->nuptk }}</td>
                                        <td align="center" class="center">{{ $item->nip }}</td>
                                        <td align="center" class="center">{{ $item->phone }}</td>
                                        <td align="center" class="center">{{ $item->agama }}</td>
                                        <td align="center" class="center">{{ $item->jenis_kelamin }}</td>
                                        <td align="center" class="center">{{ $item->status }}</td>
                                        <td align="center" class="center">{{ $item->jabatan }}</td>
                                        <td align="center" class="center">{{ $item->created_at }}</td>
                                        <td class="text-center">
                                            <div class="btn-group" role="group" aria-label="Button group">
                                                <button type="button" class="btn btn-warning" data-toggle="modal"
                                                    data-target="#editKaryawan2{{ $item->id }}">
                                                    Update
                                                </button>
                                                <form id="delete-form-{{ $item->id }}"
                                                    action="{{ route('guru.destroy', $item->id) }}" method="POST"
                                                    class="d-inline">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="button" class="btn btn-danger no-rounded-left"
                                                        onclick="confirmDelete({{ $item->id }})">
                                                        Hapus
                                                    </button>
                                                </form>
                                            </div>
                                        </td>

                                    </tr>

                                    <div class="modal fade" id="editKaryawan2{{ $item->id }}" tabindex="-1"
                                        role="dialog" aria-labelledby="editKaryawan2{{ $item->id }}Label"
                                        aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="editKaryawan2{{ $item->id }}Label">
                                                        ubah
                                                        data
                                                        guru
                                                    </h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <form action="{{ route('guru.update', $item->id) }}" method="POST"
                                                    enctype="multipart/form-data">>
                                                    @csrf
                                                    <div class="modal-body">
                                                        <div class="form-group" id="errorMsgupdate">
                                                            {{-- field untuk error message --}}
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">nama</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $item->fullname }}" name="fullname">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">email</label>
                                                            <input type="email" value="{{ $item->email }}"
                                                                class="form-control" name="email">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">phone</label>
                                                            <input type="text" value="{{ $item->phone }}"
                                                                name="phone" class="form-control">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label">NUPTK</label>
                                                            <input type="text" value="{{ $item->nuptk }}"
                                                                class="form-control" name="nuptk">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">NIP</label>
                                                            <input type="text" value="{{ $item->nip }}"
                                                                class="form-control" name="nip">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">tempat
                                                                lahir</label>
                                                            <input type="text" value="{{ $item->tempat_lahir }}"
                                                                class="form-control" name="tempat_lahir">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">tanggal
                                                                lahir</label>
                                                            <input type="date" class="form-control"
                                                                name="tanggal_lahir" value="{{ $item->tanggal_lahir }}">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label">agama</label>
                                                            <select name="agama" class="form-control">
                                                                <option value="ISLAM"
                                                                    @if ($item->agama == 'ISLAM') selected @endif>ISLAM
                                                                </option>
                                                                <option value="KRISTEN KATOLIK"
                                                                    @if ($item->agama == 'KRISTEN KATOLIK') selected @endif>
                                                                    KRISTEN KATOLIK</option>
                                                                <option value="KRISTEN PROTESTAN"
                                                                    @if ($item->agama == 'KRISTEN PROTESTAN') selected @endif>
                                                                    KRISTEN PROTESTAN
                                                                </option>
                                                                <option value="HINDU"
                                                                    @if ($item->agama == 'HINDU') selected @endif>HINDU
                                                                </option>
                                                                <option value="BUDHA"
                                                                    @if ($item->agama == 'BUDHA') selected @endif>BUDHA
                                                                </option>
                                                                <option value="KONGHUCU"
                                                                    @if ($item->agama == 'KONGHUCU') selected @endif>
                                                                    KONGHUCU</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name" class="col-form-label">jenis
                                                                kelamin</label>
                                                            <select name="jenis_kelamin" class="form-control">
                                                                <option value="Laki-laki"
                                                                    @if ($item->jenis_kelamin == 'Laki-laki') selected @endif>
                                                                    Laki-laki</option>
                                                                <option value="Perempuan"
                                                                    @if ($item->jenis_kelamin == 'Perempuan') selected @endif>
                                                                    Perempuan</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label">status</label>
                                                            <select name="status" class="form-control">
                                                                <option value="PNS"
                                                                    @if ($item->status == 'PNS') selected @endif>PNS
                                                                </option>
                                                                <option value="HONORER"
                                                                    @if ($item->status == 'HONORER') selected @endif>
                                                                    Honorer</option>
                                                            </select>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label">jabatan</label>
                                                            <input type="text" class="form-control"
                                                                value="{{ $item->jabatan }}" name="jabatan">
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label">foto</label>
                                                            <input type="file" class="form-control" name="avatar">
                                                            <small style="color: red">*abaikan jika tidak ingin mengubah
                                                                gambar</small>
                                                        </div>
                                                        <div class="form-group">
                                                            <label for="recipient-name"
                                                                class="col-form-label">alamat</label>
                                                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control">{{ $item->alamat }}</textarea>
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

    <div class="modal fade" id="addUser" tabindex="-1" role="dialog" aria-labelledby="addUserLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addUserLabel">tambah
                        data
                        guru
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{ route('guru.store') }}" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="form-group" id="errorMsgupdate">
                            {{-- field untuk error message --}}
                        </div>
                        @csrf
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">nama</label>
                            <input type="text" class="form-control" name="fullname">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">password</label>
                            <input type="password" name="password" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">phone</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">NUPTK</label>
                            <input type="text" class="form-control" name="nuptk">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">NIP</label>
                            <input type="text" class="form-control" name="nip">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">tempat lahir</label>
                            <input type="text" class="form-control" name="tempat_lahir">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">tanggal lahir</label>
                            <input type="date" class="form-control" name="tanggal_lahir">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">agama</label>
                            <select name="agama" class="form-control">
                                <option value="ISLAM">ISLAM</option>
                                <option value="KRISTEN KATOLIK">KRISTEN KATOLIK</option>
                                <option value="KRISTEN PROTESTAN">KRISTEN PROTESTAN</option>
                                <option value="HINDU">HINDU</option>
                                <option value="BUDHA">BUDHA</option>
                                <option value="KONGHUCU">KONGHUCU</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">jenis kelamin</label>
                            <select name="jenis_kelamin" class="form-control">
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">status</label>
                            <select name="status" class="form-control">
                                <option value="PNS">PNS</option>
                                <option value="HONORER">Honorer</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">jabatan</label>
                            <input type="text" class="form-control" name="jabatan">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">foto</label>
                            <input type="file" class="form-control" name="avatar">
                        </div>
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">alamat</label>
                            <textarea name="alamat" id="" cols="30" rows="10" class="form-control"></textarea>
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
    </script>
@endsection
