<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <?php include_once '../temp/head.php'  ?>
    <link rel="stylesheet" href="../assets/css/indexSignIn.css">
</head>

<body>
    <?php include_once '../temp/navigasi.php'  ?>

    <div class="container main-content" style="margin-top: 4rem">
        <div class="row">
            <div class="col-7">
                <img src="../assets/img/Emails-pana.png" class="img-fluid">
            </div>~
            <div class="col-5">
                <form action="validasi.php" method="POST" class="formulir">
                    <h2>
                        Form Login
                    </h2>
                    <div class="row">
                        <label class="col-2">Email</label>
                        <input class="form-control col" type="email/text" name="email" id="email" required="">
                    </div>
                    <div class="row">
                        <label class="col-2">Password</label>
                        <input class="form-control col" type="password" name="password" id="password" required="">
                    </div>
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col">
                            <button type="submit" class="btn btn-primary" id="tmblSubmit">
                                Login
                            </button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

    <?php include_once '../temp/footer.php'  ?>
</body>

</html>