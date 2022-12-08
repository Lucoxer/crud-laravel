<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Tambah Data</title>
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
            <div class="col-8">
                <h3 class="my-3">Form Tambah Mahasiswa/Mahasiswi</h3>
                <form action="/tambahmhs" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row mb-3">
                        <label for="NIM" class="col-sm-2 col-form-label">NIM</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="NIM" name="NIM" autofocus>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Nama Lengkap" class="col-sm-2 col-form-label">Nama Lengkap</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Kota Asal" class="col-sm-2 col-form-label">Kota Asal</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="kota_asal" name="kota_asal">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Tanggal Lahir" class="col-sm-2 col-form-label">Tanggal Lahir</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="tanggal_lahir" name="tanggal_lahir">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Nama Ortu" class="col-sm-2 col-form-label">Nama Ortu</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="nama_ortu" name="nama_ortu">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Alamat Ortu" class="col-sm-2 col-form-label">Alamat Ortu</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="alamat_ortu" name="alamat_ortu">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Kode Pos" class="col-sm-2 col-form-label">Kode Pos</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="kode_pos" name="kode_pos">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Kode Pos" class="col-sm-2 col-form-label">No Telp</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="no_telp" name="no_telp">
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label for="Status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-5">
                        <select class="form-select" aria-label="Default select example" id="status_mhs" name="status_mhs">
                            <option selected>Pilih Status Mahasiswa</option>
                                <option value="1">TAMA</option>
                                <option value="2">WREDA</option>
                        </select>
                        </div>
                    </div>
                    <!-- <div class="row mb-3">
                        <label for="Status" class="col-sm-2 col-form-label">Status</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" id="status_mhs" name="status_mhs" autofocus>
                        </div>
                    </div> -->
                    <div class="col-12">
                        <button class="btn btn-success" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>