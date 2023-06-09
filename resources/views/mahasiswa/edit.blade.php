@extends('layout.template')
@section('konten')

<br>
<div class="pb-2">
    <a type="text" class="btn btn-warning btn-sm">Edit Data Mahasiswa</a>
  </div>
 <!-- START FORM -->
 <form action='{{ url('mahasiswa')}}' method='post'>
    @csrf
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">
                <label for="nim" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                    {{ $data->nim }}
                </div>
            </div>
            <div class="mb-3 row">
                <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='nama' value="{{ $data->nama }}" id="nama">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label">Jurusan</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name='jurusan' value="{{ $data->jurusan }}" id="jurusan">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="jurusan" class="col-sm-2 col-form-label"></label>
                <div class="col-sm-10"><button type="submit" class="btn btn-success" name="submit">SIMPAN</button>
                <a  href='{{ url('mahasiswa')}}' class="btn btn-danger btn-sm-10">Batal</a>
            </div>
            </div>
        </div>
    </form>

        <!-- AKHIR FORM -->
        @endsection