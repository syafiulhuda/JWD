<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php include_once '../temp/head.php'; ?>
</head>

<body>
    <?php include_once '../temp/navigasi.php'; ?>

    <div class="container" style="margin-top: 3.5rem">
        <h1>SinUp Form</h1>
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Informasi Pengguna</h5>
                <form action="" method="GET">
                    <div class="form-group">
                        <label for="nama">Nama:</label>
                        <input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan nama Anda" />
                    </div>
                    <div class="form-group">
                        <label for="no">No HP:</label>
                        <input type="text" class="form-control" name="id" id="no" placeholder="Masukkan nomor Hp Anda" />
                    </div>
                    <div class="form-group">
                        <label for="date">Tanggal Lahir:</label>
                        <input type="date" class="form-control" name="date" id="date" />
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Masukkan email Anda" />
                    </div>
                    <div class="row g-3 align-items-center">
                        <div class="col-auto">
                            <label for="inputEmail6" class="col-form-label">Email</label>
                        </div>
                        <div class="col-auto">
                            <input type="email" id="inputEmail6" class="form-control" />
                        </div>
                        <div class="col-auto">
                            <label for="inputPassword6" class="col-form-label">Password</label>
                        </div>
                        <div class="col-auto">
                            <input type="password" id="inputPassword6" class="form-control" aria-labelledby="passwordHelpInline" />
                        </div>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" />
                        <label class="form-check-label" for="exampleCheck1">Saya menyetujui ketentuan</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Kirim</button>
                </form>
            </div>
        </div>
    </div>

    <?php include_once '../temp/footer.php'; ?>
</body>

</html>