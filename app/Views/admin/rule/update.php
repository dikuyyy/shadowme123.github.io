<div class="col-md-10 konten">


    <article class="shadow-sm p-3 bg-white rounded">
        <div class="row">
            <div class="col-8">
                <h2 class="my-3">Form Ubah Basis Pengetahuan</h2>
                <form action="/admin/rule/update_process/" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group row">
                        <label for="dataminat" class="col-sm-2 col-form-label">Data Minat</label>
                        <input type="hidden" name="id_minat" value="<?= $id_minat; ?>">
                        <div class="col-sm-5">
                            <select class="form-control" id="dataminat" name="dataminat">
                                <?php foreach ($dataminat as $row) : ?>
                                    <option><?= $row['nama_minat']; ?></option>
                                    <?php $pembanding = $row['nama_minat'];  ?>
                                <?php endforeach; ?>
                                <?php foreach ($databaru as $row) : ?>
                                    <?php if ($pembanding <> $row['nama_minat']) :  ?>
                                        <option><?= $row['nama_minat']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="namaminat" class="col-sm-2 col-form-label">Ciri Minat</label>
                        <div class="col-sm-10">
                            <select class="form-control" id="ciriminat" name="ciriminat">
                                <?php foreach ($ciriminat as $row) : ?>
                                    <option><?= $row['ciri_minat']; ?></option>
                                    <?php $pembanding = $row['ciri_minat'];  ?>
                                <?php endforeach; ?>
                                <?php foreach ($ciribaru as $row) : ?>
                                    <?php if ($pembanding <> $row['ciri_minat']) :  ?>
                                        <option><?= $row['ciri_minat']; ?></option>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </select>
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
    </article>
</div>
</div>