@extends('templateBootstrap')
@section('content')

<h3>Edit Sofa</h3>
<a href="/sofa" class="btn btn-secondary">Kembali</a>

<br>
<br>
<form action="/sofa/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $sofa->sofa_id }}">

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Merk Sofa</label>
        </div>
        <div class="col-6">
            <input type="text" required name="merksofa" value="{{ $sofa->merksofa }}" class="form-control"> <br />
        </div>
    </div>

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Harga Sofa (RP)</label>
        </div>
        <div class="col-6">
            <input type="number" required name="hargasofa" value="{{ $sofa->hargasofa }}" class="form-control"> <br />
        </div>
    </div>

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Tersedia</label>
        </div>
        <div class="col-6">
            <select name="tersedia" class="form-control">
                <option value="1" @if($sofa->tersedia == 1) selected @endif>Iya</option>
                <option value="0" @if($sofa->tersedia == 0) selected @endif>Tidak</option>
            </select> <br />
        </div>
    </div>

    <div class="row p-1 mb-1">
        <div class="col-2">
            <label class="control-label">Berat</label>
        </div>
        <div class="col-6">
            <input type="text" required name="berat" value="{{ $sofa->berat }}" class="form-control"> <br />
        </div>
    </div>

    <input type="submit" value="Simpan Data" class="btn btn-success">
</form>

@endsection
