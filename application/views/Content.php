    <div class="main-content col-lg-12">
        <section class="section">
        <div class="section-header">
            <h1>Produk</h1>
            <?php if($this->session->flashdata('msg')): ?>
                <div class="alert alert-success alert-dismissible show fade center" style="width: 700px; margin: 20px 300px;">
                    <div class="alert-body">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <?php echo $this->session->flashdata('msg'); ?>
                    </div>
                </div>
            <?php endif; ?> 
            <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="#">Produk</a></div>
            </div>
        </div>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                <div class="card-header-form">
                    <a href="<?= base_url() ?>Produk/InsertProduk" class="btn btn-primary" style="padding: 5px; margin-right: 25px"><i class="fas fa-edit"></i> Create</a>
                </div>
                
                <div class="card-body">
                    <table class="table">
                            <thead>
                                <tr style="color: black">
                                    <th class="text-center">No</th>
                                    <th class="text-center">Nama</th>
                                    <th class="text-center">Keterangan</th>
                                    <th class="text-center">Harga</th>
                                    <th class="text-center">Jumlah</th>
                                    <th class="text-center">Aksi</th>
                                </tr>
                            </thead>
                            <?php $i = 1 ?>
                            <tbody>
                            <?php foreach ($produk as $value) : ?>
                            <tr style="color: black;">
                                <td class="text-center" style="padding: 10px;"><?= $i ?></td>
                                <td class="text-center"><?= $value['nama'] ?></td>
                                <td class="text-center"><?= $value['keterangan'] ?></td>
                                <td class="text-center"><?= $value['harga'] ?></td>
                                <td class="text-center"><?= $value['jumlah'] ?></td>
                                <td class="text-center">
                                    <a href="<?= base_url(); ?>Produk/ChangeProduk/<?= $value['id']; ?>" class="btn btn-primary">Edit</a>
                                    <a href="<?= base_url(); ?>Produk/DelDbProduk/<?= $value['id']; ?>" class="btn btn-danger">Hapus</a>
                                </td>
                            </tr>
                            <?php $i++ ?>
                            <?php endforeach; ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
        </section>
    </div>