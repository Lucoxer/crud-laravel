<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>@1 Laravel CRUD</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="/">Home</a>
                    <a class="nav-link" href="/mahasiswa">Mahasiswa</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
            <div class="row">
                <h1 class ="text-center">Data Mahasiswa</h1>
                <div class="col">
                    <table class="table">
                        <thead>
                            <tr>
                                <!-- <th scope="col">No</th> -->
                                <th scope="col">NIM</th>
                                <th scope="col">Nama Lengkap</th>
                                <th scope="col">Kota Asal</th>
                                <th scope="col">Tanggal Lahir</th>
                                <th scope="col">Nama Ortu</th>
                                <th scope="col">Alamat Ortu</th>
                                <th scope="col">Kode Pos</th>
                                <th scope="col">No Telp</th>
                                <th scope="col">Status</th>
                                <th scope="col">Aksi</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($mahasiswa as $mhs) : ?>
                                <tr>
                                    <!-- <th scope="row">[{$mhs->id}]</th> -->
                                    <th>{{ $mhs -> NIM}}</th>
                                    <td>{{ $mhs -> nama_lengkap}}</td>
                                    <td>{{ $mhs -> kota_asal}}</td>
                                    <td>{{ $mhs -> tanggal_lahir}}</td>
                                    <td>{{ $mhs -> nama_ortu}}</td>
                                    <td>{{ $mhs -> alamat_ortu}}</td>
                                    <td>{{ $mhs -> kode_pos}}</td>
                                    <td>{{ $mhs -> no_telp}}</td>
                                    <td>{{ $mhs -> status_mhs}}</td>
                                    <td><a href="/edit/{{ $mhs -> NIM}}" class="btn btn-info"> Update </a><td>
                                    <td><a href="/delete/{{ $mhs -> NIM}}" class="btn btn-danger delete" data-id = "{{ $mhs -> NIM}}"> Hapus </a></td>
                                </tr>
                            <?php endforeach ?>
                        </tbody>
                    </table>
                    <a href="/tambahdata" class="btn btn-primary"> Tambah Data </a>
                </div>
            </div>
        </div>
</body>
</html>