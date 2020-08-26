    <div class="main-content col-lg-2"></div>
    <div class="main-content col-lg-8">
        <section class="section">
        <div class="section-header">
            <h1>Change Produk</h1>
            <div class="section-header-breadcrumb">
            <div class="breadcrumb-item"><a href="<?= base_url() ?>Admin/ephone">Produk</a></div>
            <div class="breadcrumb-item active">Change Produk</div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                <h4>Change Produk</h4>
                </div>
                <div class="card-body">
                    <?php foreach ($produk as $value) : ?>
                    <form method="post" action="<?= base_url('Produk/ChangeDbProduk');  ?>/<?= $value['id']; ?>">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input value="<?= $value['nama'] ?>" type="text" id="nama" name="nama" class="form-control" placeholder="Masukkan nama produk" required>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <input value="<?= $value['keterangan'] ?>" type="text" id="keterangan" name="keterangan" class="form-control" placeholder="Masukkan keterangan produk" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Harga</label>
                            <input value="<?= $value['harga'] ?>" type="text" id="harga" name="harga" class="form-control" placeholder="Masukkan harga" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Jumlah</label>
                            <input value="<?= $value['jumlah'] ?>" type="text" id="jumlah" name="jumlah" class="form-control" placeholder="Masukkan jumlah" required>
                        </div>
                        <div class="form-group text-right">
                            <button class="btn btn-success" style="padding: 5px 50px;">Change Now!</button>
                        </div>
                    </form>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
        </section>
    </div>
    <div class="main-content col-lg-2"></div>