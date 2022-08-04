<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Tambah Data Supplier</h1>
        </div>
        <div class="card">
            <div class="row">
                <div class="card-body">
                <form method="POST" action="">
                        <div class="mb-3">
                            <label class="form-label">Nama Supplier</label>
                            <input type="text" name="nama_supplier" value="<?= set_value('nama_supplier'); ?>" class="form-control" placeholder="Nama Supplier">
                            <?= form_error('nama_supplier', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Alamat Supplier</label>
                            <input type="text" name="alamat_supplier" value="<?= set_value('alamat_pegawai'); ?>" class="form-control" placeholder="Alamat Supplier">
                            <?= form_error('alamat_supplier', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Kota Supplier</label>
                            <input type="text" name="kota_supplier" value="<?= set_value('kota_pegawai'); ?>" class="form-control" placeholder="Kota Supplier">
                            <?= form_error('kota_supplier', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">No HP</label>
                            <input type="text" name="no_hp" value="<?= set_value('no_hp'); ?>" class="form-control" placeholder="No Hp">
                            <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>

                        <button type="reset" class="btn btn-primary">Clear</button>
                        <button href="<?= base_url('Supplier') ?>" type="submit" class="btn btn-danger">Cancel</button>
                        <button type="submit" name="tambah" class="btn btn-success float-right">Tambah</button>

                    </form>

                </div>
            </div>
        </div>
</main>