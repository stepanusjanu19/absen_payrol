    <section class="content">
        <div class="container-fluid">
            <!-- Main row -->
            <div class="row">

                <section class="col-lg-12 connectedSortable">

                    <!-- Map card -->
                    <div class="card">
                        <div class="card-header"> <?= $title ?> </h3>
                        </div>
                        <form method="post" action="<?= base_url('admin/jabatan_update/' . $data->id_jabatan) ?>">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Jabatan</label>
                                    <input type="text" name="jabatan" value="<?= $data->nama_jabatan ?>" class="form-control" required="">
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('admin/jabatan') ?>" class="btn btn-danger">Kembali</a>
                                <button type="submit" class="btn btn-primary">Simpan</button>
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </div>
    </section>