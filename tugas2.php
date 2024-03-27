<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <h2 align="center">Form Belanja</h2>

    <form style="max-width: 400px; margin: 50px auto;" method="post">
        <div class="form-group row">
            <label for="nama" class="col-4 col-form-label">Nama</label> 
            <div class="col-8">
                <input id="nama" name="nama" type="text" class="form-control">
            </div>
        </div>
        <div class="form-group row">
            <label for="produk" class="col-4 col-form-label">Produk</label> 
            <div class="col-8">
                <select id="produk" name="produk" class="custom-select">
                    <option value="">---- Produk Pilihan ----</option>
                    <option value="tv">TV</option>
                    <option value="ac">AC</option>
                    <option value="kulkas">Kulkas</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="jumlah" class="col-4 col-form-label">Jumlah Beli</label> 
            <div class="col-8">
                <input id="jumlah" name="jumlah" type="text" class="form-control">
            </div>
        </div> 
        <div class="form-group row">
            <div class="offset-4 col-8">
                <button name="submit" type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>

    <?php
    if(isset($_POST['submit'])){
        $nama_pelanggan = $_POST['nama'];
        $produk = $_POST['produk'];
        $jumlah_beli = $_POST['jumlah'];
        $harga_satuan = 0;

        switch($produk) {
            case 'tv':
                $harga_satuan = 1000000;
                break;
            case 'ac':
                $harga_satuan = 2000000;
                break;
            case 'kulkas':
                $harga_satuan = 2500000;
                break;
            default:
                $harga_satuan = 0;
                break;
        }

        $total_belanja = $jumlah_beli * $harga_satuan;
        $diskon = 0.20 * $total_belanja;
        $total_setelah_diskon = $total_belanja - $diskon;
        $ppn = 0.10 * $total_setelah_diskon;
        $harga_bersih = $total_setelah_diskon + $ppn;

        echo "<div align='center' class='container' style='margin-top: 20px;'>";
        echo "<h4>Ringkasan Belanja:</h4>";
        echo "<p>Nama Pelanggan: $nama_pelanggan</p>";
        echo "<p>Produk Pilihan: $produk</p>";
        echo "<p>Jumlah Beli: $jumlah_beli</p>";
        echo "<p>Harga Satuan: Rp " . number_format($harga_satuan, 0, ',', '.') . "</p>";
        echo "<p>Total Belanja: Rp " . number_format($total_belanja, 0, ',', '.') . "</p>";
        echo "<p>Diskon (20%): Rp " . number_format($diskon, 0, ',', '.') . "</p>";
        echo "<p>PPN (10%): Rp " . number_format($ppn, 0, ',', '.') . "</p>";
        echo "<p>Harga Bersih: Rp " . number_format($harga_bersih, 0, ',', '.') . "</p>";
        echo "</div>";
    }
?>
