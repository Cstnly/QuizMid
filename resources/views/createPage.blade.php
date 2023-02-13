<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Page</title>
    <h1>Insert Karyawan</h1>
    <style>
        input:required:invalid{
            border: none;
            outline: 3px solid red;
            border-radius: 3px;
        }

        input:required:valid{
            border: 2px solid green;
        }

        h1{
            text-align: center;
            color: green;
        }

        


    </style>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
</head>
<body>
<div class="container col-md-6" style="padding-top: 20px">
        <div class="card shadow">
        <div class="card-header text-center"> </div>
            <div class="card-body">
                <form action="/create-karyawan" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label for="nama" class="form-label">Nama Karyawan</label>
                        <input name="nama" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan nama karyawan[5-20 Characters]" required minlength = "5" maxlength = "20">
                    </div>
                    <div class="mb-3">
                        <label for="umur" class="form-label">Umur Karyawan</label>
                        <input name="umur" type="number" class="form-control" id="formGroupExampleInput" placeholder="Masukkan umur karyawan[>20 Tahun]" required min="21">
                    </div>
                    <div class="mb-3">
                        <label for="alamat" class="form-label">Alamat Karyawan</label>
                        <input name="alamat" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan alamat karyawan[10-40 Characters]" required minlength="10" maxlength="40">
                    </div>
                    <div class="mb-3">
                        <label for="nomorhp" class="form-label">Nomor HP Karyawan</label>
                        <input name="nomorhp" type="tel" class="form-control" id="formGroupExampleInput" placeholder="08...[9-12 Characters]" required pattern="^08[1-9][0-9]{5,9}$">
                    </div>

                    <button type="submit" class="btn btn-success">Input</button>
                    
                    <h8>By PT Meksiko</h8>
                </form>
            </div>
        </div>
    </div>

</body>
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
</script>
</html>