<div class="col-md-10 konten">


    <article class="shadow-sm p-3 bg-white rounded">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Tambah Basis Pengetahuan</h2>
                <form action="/admin/rule/save" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="dataminat" class="col-sm-2 col-form-label">Data Minat</label>
                        <div class="col-sm-5">
                            <select class="form-control" id="dataminat" name="dataminat">
                                <option> </option>
                                <?php foreach ($dataminat->getResultArray() as $row) : ?>
                                    <option><?= $row['nama_minat']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaminat" class="col-sm-2 col-form-label">Ciri Minat</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="ciriminat" name="ciriminat">
                                <option> </option>
                                <?php foreach ($ciriminat->getResultArray() as $row) : ?>
                                    <option><?= $row['ciri_minat']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10">
                            <button type="submit" class="btn btn-primary">Tambah Data</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </article>
</div>
</div>