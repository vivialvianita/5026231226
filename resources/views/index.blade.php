@extends('template')

@section('content')

    <h3>Data Pegawai</h3>

    <a href="/pegawai/tambah" class="btn btn-primary btn-sm"> + Tambah Pegawai Baru</a>

    <p>Cari Data Pegawai :</p>
	<form action="/pegawai/cari" method="GET" class="form-inline">
		<input type="text" name="cari" placeholder="Cari Pegawai .." class="form-control">
		<input type="submit" value="CARI">
	</form>

    <br />

    <table class="table table-striped">
        <tr>
            <th>Nama</th>
            <th>Jabatan</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Opsi</th>
        </tr>
        @foreach ($pegawai as $p)
            <tr>
                <td>{{ $p->pegawai_nama }}</td>
                <td>{{ $p->pegawai_jabatan }}</td>
                <td>{{ $p->pegawai_umur }}</td>
                <td>{{ $p->pegawai_alamat }}</td>
                <td>
                    <a href="/pegawai/edit/{{ $p->pegawai_id }}" class="btn btn-warning btn-sm">Edit</a>
                    |
                    <a href="/pegawai/hapus/{{ $p->pegawai_id }}" class="btn btn-danger btn-sm">Hapus</a>
                </td>
            </tr>
        @endforeach
    </table>
    {{ $pegawai->links() }}  <!--hanya bisa dipakai dengan panginate, saat get harus dihapus
@endsection
