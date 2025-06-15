@extends('template')
@section('content')

    <h3>Tambah Sofa Baru</h3>
    <a href="/sofa" class="btn btn-secondary">Kembali</a>

    <br />
    <br />
    <form action="/sofa/store" method="post">
        {{ csrf_field() }}

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> Merk Sofa </label>
            </div>
            <div class="col-6">
                <input type="text" name="merksofa" required="required" class="form-control"> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> Harga (Rp) </label>
            </div>
            <div class="col-6">
                <input type="number" name="hargasofa" required="required" class="form-control"> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> Tersedia </label>
            </div>
            <div class="col-6">
                <select name="tersedia" class="form-control" required="required">
                    <option value="1">Iya</option>
                    <option value="0">Tidak</option>
                </select> <br />
            </div>
        </div>

        <div class="row p-1 mb-1">
            <div class="col-2">
                <label class="control-label"> Berat </label>
            </div>
            <div class="col-6">
                <input type="text" name="berat" required="required" class="form-control"> <br />
            </div>
        </div>

        <input type="submit" value="Simpan Data" class="btn btn-success">
    </form>

@endsection
