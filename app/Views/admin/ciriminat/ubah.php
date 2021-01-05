<div class="col-md-10 konten">


    <article class="shadow-sm p-3 bg-white rounded">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Tambah Ciri Minat</h2>
                <?php foreach ($query as $row) :  ?>
                    <form action="/admin/ciriminat/proses_ubah" method="post">

                        <?= csrf_field(); ?>
                        <div class="form-group row">
                            <label for="kodeciri" class="col-sm-2 col-form-label">Kode Ciri</label>

                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="kodeciri" name="kodeciri" value="<?= $row['id_ciri'] ?>" readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="namaminat" class="col-sm-2 col-form-label">Ciri Minat</label>
                            <div class="col-sm-5">
                                <input type="text" class="form-control" id="ciriminat" name="ciriminat" value="<?= $row['ciri_minat']; ?>" autofocus>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10">
                                <button type="submit" class="btn btn-primary">Ubah Data</button>
                            </div>
                        </div>

                    </form>
                <?php endforeach;  ?>
            </div>
        </div>
    </article>
</div>
</div>