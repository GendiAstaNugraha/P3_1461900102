<form action="{{ route('kamar0102.store') }}" method="POST">
    @csrf
    Nama Pasien = <input type="text" name="nama"><br><br>
    Alamat = <input type="text" name="alamat"><br><br>
    <button type="submit">Tambah</button>
</form>