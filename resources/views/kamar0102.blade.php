<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

    <title>PRATIKUM3</title>
  </head>
  <body>
  <div style="overflow-x: auto;">
    <table class="table table-dark table-hover">
      <thead>
        <tr>
          <th>id Dokter</th>
          <th>id Pasien</th>
          <th>Nama Pasien</th>
          <th>Alamat</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($kamar as $rs)
          <tr>
            <td>{{$rs->id_dokter}}</td>
            <td>{{$rs->id_pasien}}</td>
            <td>{{$rs->nama}}</td>
            <td>{{$rs->alamat}}</td>
          </tr>
        @endforeach
         <tr>
            <td>
                <br>
                <a href="{{ route('kamar0102.create') }}">Tambah</a><br>
                <a href="">Edit</a><br>
                <a href="">Update</a><br>
                <a href="">Hapus</a>
            </td>
         </tr>
      </tbody>
    </table>
  </div>

  

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    -->
  </body>
</html>