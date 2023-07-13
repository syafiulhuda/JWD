<?php
session_start();

// var_dump($_POST);
$email = $_POST['email'];
$pass = $_POST['password'];


$arr_user = [
    [
        'email' => 'msyafiulhuda1@gmail.com',
        'password' => 'admin'
    ],
    [
        'email' => 'adin2@gmail.com',
        'password' => '123456'
    ],
    [
        'email' => 'admin',
        'password' => 'admin'
    ],

];

$sukses = false;

foreach ($arr_user as $key => $value) {

    if ($email == $value["email"] && $pass == $value["password"]) {
        $sukses = true;
        break;
    }
}

if ($sukses) {
    include_once '../transaksi/index.php';
    $_SESSION["kondisi_login"] = true;
} else {
    echo "
		<script>
			alert('Email dan Password Tidak Terdaftar.
            Jika Belum Memiliki Akun Silahkan SignUp')
		</script>
		";
    include_once '../signup/index.php';
}
