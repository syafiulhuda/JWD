<?php
session_start();

if ($_SESSION["kondisi_login"] !== true) {
    echo "
		<script>
			alert('Silahkan Login Dulu')
		</script>
		";
    // include_once '../login/index.php';
    header("Location: http://localhost/vsga_7/admin/login/index.php");
} else {
?>

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sign In</title>
        <link rel="stylesheet" href="../assets/css/indexTransaksi.css">
        <?php include_once '../temp/head.php'  ?>
    </head>

    <body>
        <?php include_once '../temp/navigasi.php'  ?>

        <div class=" container" style="margin-top: 4rem;">
            <div class="card">
                <div class="card-header">
                    <h1>Form Pemesanan</h1>
                </div>
                <div class="card-body">
                    <div class="row menu-pilih" id="1" onclick="tambahPilihan(1,5000)">
                        <span class="col nama">Mi Goreng</span>
                        <span class="col harga">Rp 5000</span>
                        <span class="col jumlah" id="jumlah"></span>
                    </div>
                    <div class="row menu-pilih" id="2" onclick="tambahPilihan(2,4000)">
                        <span class="col nama">Mi Kuah</span>
                        <span class="col harga">Rp 4000</span>
                        <span class="col jumlah" id="jumlah"></span>
                    </div>
                    <div class="row menu-pilih" id="3" onclick="tambahPilihan(3,2000)">
                        <span class="col nama">Telor Ceplok</span>
                        <span class="col harga">Rp 2000</span>
                        <span class="col jumlah" id="jumlah"></span>
                    </div>
                    <div class="row menu-pilih" id="4" onclick="tambahPilihan(4,11000)">
                        <span class="col nama">Magelangan</span>
                        <span class="col harga">Rp 11000</span>
                        <span class="col jumlah" id="jumlah"></span>
                    </div>

                    <div class="row menu-pilih total">
                        <span class="col total">Total</span>
                        <span class="col harga_total" id="total_harga">Rp 0</span>
                    </div>


                    <form action="../transaksi/index.php" class="bayar">
                        <input type="hidden" name="total_belanja" id="total_belanja">
                        <input type="submit" name="submit" class="btn btn-primary" value="Checkout / Bayar">
                    </form>
                </div>
            </div>
        </div>

        <?php include_once '../temp/footer.php'; ?>

        <script type="text/javascript">
            let total = 0;

            function tambahPilihan(id_menu, harga) {
                total += harga;
                var selTotal = document.getElementById('total_harga');
                selTotal.innerText = 'Rp ' + total;

                var selMenu = document.getElementById(id_menu);
                selMenu.style = "background : pink";

                var selInputTotal = document.getElementById(total_belanja);
                selInputTotal.value = total;
            }
        </script>
    </body>

    </html>

<?php
}
?>