@extends('templateBootstrap')
@section('content')

    <h3>Data Sofa</h3>
    <a href="/sofa/tambah" class="btn btn-primary mb-3">+ Tambah Sofa Baru</a>

    <form action="/sofa/cari" method="GET" class="form-inline mb-3">
        <label class="form-label me-2">Cari Data Sofa :</label>
        <input type="text" name="cari" placeholder="Ketik Merk Sofa" class="form-control me-2">
        <input type="submit" value="CARI" class="btn btn-primary">
    </form>

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Merk</th>
                <th>Harga (Rp)</th>
                <th>Tersedia</th>
                <th>Berat (kg)</th>
                <th>Opsi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($sofa as $s)
                <tr>
                    <td>{{ $s->sofa_id }}</td>
                    <td>{{ $s->merksofa }}</td>
                    <td>{{ number_format($s->hargasofa, 0, ',', '.') }}</td>
                    <td>{{ $s->tersedia == 1 ? 'Iya' : 'Tidak' }}</td>
                    <td>{{ $s->berat }}</td>
                    <td>
                        <a href="/sofa/edit/{{ $s->sofa_id }}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="/sofa/hapus/{{ $s->sofa_id }}" class="btn btn-danger btn-sm">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{ $sofa->links() }}

@endsection
