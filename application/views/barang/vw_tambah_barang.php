<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Tambah Data Barang</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="card-body">
                    <form method="POST" action=" ">
                        <div class="mb-3">
                            <label class="form-label" >Nama Barang</label>
                            <input type="text" name="nama_barang" value="<?= set_value('nama_barang'); ?>" class="form-control" placeholder="Nama Barang">
                            <?= form_error('nama_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Jenis Barang</label>
                            <input type="text" name="jenis_barang" value="<?= set_value('jenis_barang'); ?>" class="form-control" placeholder="Jenis Barang">
                            <?= form_error('jenis_barang', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Harga</label>
                            <input type="text" name="harga" value="<?= set_value('harga'); ?>" class="form-control" placeholder="Harga">
                            <?= form_error('harga', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Stok</label>
                            <input type="text" name="stok" value="<?= set_value('stok'); ?>" class="form-control" placeholder="Stok">
                            <?= form_error('stok', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="reset" class="btn btn-primary">Clear</button>
                        <button href="<?= base_url('Barang') ?>" class="btn btn-danger">Cancel</button>
                        <button type="submit" name="tambah" class="btn btn-success float-right">Tambah</button>

                    </form>

                </div>
            </div>
        </div>
</main>