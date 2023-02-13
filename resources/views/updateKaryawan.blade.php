<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Karyawan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center">Update Karyawan </div>
        <div class="card-body">
            <form action="{{route('updateKaryawan', ['id' => $karyawan->id])}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('patch')
                <div class="mb-3">
                    <label for="Nama" class="form-label">Nama Karyawan</label>
                    <input name="nama" type="text" value="{{$karyawan->nama}}" class="form-control" id="formGroupExampleInput" placeholder="Masukkan nama karyawan">
                    @error('nama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="umur" class="form-label">Umur Karyawan</label>
                    <input name="umur" type="numeric" value="{{$karyawan->umur}}" class="form-control" id="formGroupExampleInput" placeholder="Masukkan umur karyawan">
                    @error('umur')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat Karyawan</label>
                    <input name="alamat" type="text" value="{{$karyawan->alamat}}" class="form-control" id="formGroupExampleInput" placeholder="Masukkan alamat">
                    @error('alamat')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="nomorhp" class="form-label">Nomor HP</label>
                    <input name="nomorhp" type="numeric" value="{{$karyawan->nomorhp}}" class="form-control" id="formGroupExampleInput" placeholder="Masukan nomor HP">
                    @error('nomorhp')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="card-body text-center">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
</html>