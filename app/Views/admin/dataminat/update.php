<div class="col-md-10 konten">

    <article class="shadow-sm p-3 bg-white rounded">
        <?php foreach ($dataminat->getResultArray() as $row) : ?>


            <div class="row">
                <div class="col-8">
                    <h2 class="my-3">Form Ubah Data Minat</h2>

                    <form action="/admin/dataminat/save_update/<?= $row['id_minat']; ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <label for="kodeminat" class="col-sm-2 col-form-label">Kode Minat</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="kodeminat" name="kodeminat" value="<?= $row['id_minat']; ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaminat" class="col-sm-2 col-form-label">Nama Minat</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="namaminat" name="namaminat" value="<?= $row['nama_minat']; ?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Ubah Data</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </article>
</div>
</div>