@extends('layouts.admin')

@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="/dashboard" style="color: #fd6bc5">Dashboard</a></li>
      <li class="breadcrumb-item"><a href="/balita" style="color: #fd6bc5">Data Balita</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Data Balita</li>
    </ol>
</nav>
<div class="">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow p-3 mb-5 bg-white rounded">
            <form action="/balita" method="post" enctype="multipart/form-data">
                @csrf
                @method('post')
                <div class="form-group">
                    <label for="nama_balita">Nama Balita</label>
                    <input autocomplete="off" type="text" class="form-control @error('nama_balita') is-invalid @enderror" name="nama_balita"  id="nama_balita" value="{{ old('nama_balita') }}">
                    @error('nama_balita')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="tpt_lahir">Tempat Lahir</label>
                            <input autocomplete="off" type="text" class="form-control @error('tpt_lahir') is-invalid @enderror" name="tpt_lahir"  id="tpt_lhr" value="{{ old('tpt_lahir') }}">
                            @error('tpt_lahir')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input autocomplete="off" type="text" class="date form-control @error('tgl_lahir') is-invalid @enderror" name="tgl_lahir"  id="tgl_lahir" value="{{ old('tgl_lahir') }}">
                            @error('tgl_lahir')
                            <div class="invalid-feedback">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="tgl_lahir">Jenis Kelamin</label>
                    <select name="jenis_kelamin" class="custom-select mr-sm-2 @error('jenis_kelamin') is-invalid @enderror" id="inlineFormCustomSelect">
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jenis_kelamin')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="inlineFormCustomSelect">Nama OrangTua</label>
                    <select name="orang_tua_id" class="custom-select mr-sm-2 @error('orang_tua_id') is-invalid @enderror" id="inlineFormCustomSelect">
                        @foreach ($orangTua as $option)
                            <option value="{{$option->id ?? null}}">{{$option->nama ?? null}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group mt-2">
                    <label for="ket">Keterangan</label>
                    <textarea autocomplete="off" type="text" class="form-control @error('ket') is-invalid @enderror" name="ket"  id="nama" value="{{ old('ket') }}"></textarea>
                    @error('ket')
                    <div class="invalid-feedback">
                        {{$message}}
                    </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-outline-success">Simpan</button>
            </form>
        </div>
    </div>
</div>
</div>
<script type="text/javascript">
    $('.date').datepicker({  
       format: 'dd-mm-yyyy'
     });  
</script>

@endsection