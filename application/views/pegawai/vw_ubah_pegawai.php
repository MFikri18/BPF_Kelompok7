<main class="content">
    <div class="container-fluid p-0">
        <div class="mb-3">
            <h1 class="h3 d-inline align-middle">Tambah Data Pegawai</h1>
        </div>
            <div class="card">
                <div class="row">
                    <div class="card-body">
                        <form method="POST" action="">
                            <input type="hidden" name="id_pegawai" value="<?= $pegawai['id_pegawai']; ?>">
                            <div class="mb-3">
                                <label class="form-label">Nama Pegawai</label>
                                <input type="text" name="nama_pegawai" value="<?= $pegawai['nama_pegawai']; ?>"
                                    class="form-control" placeholder="Nama Pegawai">
                                    <?= form_error('nama_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Jenis Kelamin</label>
                            </div>
                            <div class="mb-3">
                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                    value="<?= $pegawai['jenis_kelamin']; ?>">
                                <span class="form-check-label">Laki-laki &ensp;&ensp;&ensp;&ensp;&ensp;&ensp;</span>
                                <input class="form-check-input" type="radio" name="jenis_kelamin"
                                    value="<?= $pegawai['jenis_kelamin']; ?>">
                                <span class="form-check-label">Perempuan</span>
                                <?= form_error('jenis_kelamin', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">Alamat</label>
                                <input type="text" name="alamat_pegawai" value="<?= $pegawai['alamat_pegawai']; ?>"
                                    class="form-control" placeholder="Alamat Pegawai">
                                    <?= form_error('alamat_pegawai', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">No HP</label>
                                <input type="text" name="no_hp" value="<?= $pegawai['no_hp']; ?>" class="form-control"
                                    placeholder="No Hp">
                                    <?= form_error('no_hp', '<small class="text-danger pl-3">', '</small>'); ?>
                            </div>

                            <button type="reset" class="btn btn-primary">Clear</button>
                            <button href="<?= base_url('Pegawai') ?>" type="submit"
                                class="btn btn-danger">Cancel</button>
                            <button type="submit" name="ubah" class="btn btn-success float-right">Edit</button>

                        </form>

                    </div>
                </div>
            </div>
        </div>
</main>