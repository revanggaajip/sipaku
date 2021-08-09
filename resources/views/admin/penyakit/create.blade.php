@extends('layouts.admin.main')

@section('title')
    {{$title}}
@endsection

@section('content')
<section class="section">
    <div class="section-header">
      <h1>{{$title}}</h1>
    </div>

    <div class="section-body">
        <div class="card card-primary">
            <div class="card-header">
                <h4>Tambah {{$title}}</h4>
            </div>
            <form action="{{route('admin.penyakit.store')}}" method="post">
                @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label for="id">Id penyakit</label>
                        <input type="text" class="form-control @error('id') is-invalid @enderror" id="id" name="id" value="{{$generateId}}" readonly>
                        @error('id')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama">Nama penyakit</label>
                        <input type="text" class="form-control @error('nama') is-invalid @enderror"" id="nama" name="nama" value="{{old('nama')}}" placeholder="Masukkan Nama Penyakit">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="deskripsi">Deskripsi penyakit</label>
                        <textarea name="deskripsi" id="deskripsi" class="form-control"></textarea>
                        @error('deskripsi')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>
                </div>
                <div class="card-footer text-right">
                    <a href="{{route('admin.penyakit.index')}}" class="btn btn-danger"><i class="fas fa-arrow-left"></i> Kembali</a>
                    <button type="submit" class="btn btn-success"><i class="fa fa-plus"></i> Simpan</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection

@push('js')
    <script src="{{asset('assets/vendor/ckeditor/ckeditor.js')}}"></script>
@endpush

@push('script')
    <script>
        $(document).ready(()=>{
            CKEDITOR.replace('deskripsi');
        });
    </script>
@endpush